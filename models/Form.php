<?php

    class Form
    {
        /*
         * Валидация имени
        */
        public static  function checkName($name)
        {
            $nameRegExp = '/([0-9]+)|([a-z]+)/i';
            if(preg_match($nameRegExp, $name)== true){
                return true;
            }
            return false;
        }
        /*
         * Валидация email
        */
        public static function checkEmail($email)
        {

            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                return true;
            }
            return false;

        }
        /*
         * Валидация files
        */
        public static function checkFile($files)
        {
            $regExpFile = '/\.(?:z(?:ip|[0-9]{2})|r(?:ar|[0-9]{2})|png|jpeg|gif|txt)$/i';
            if(preg_match($regExpFile, $files) == true){
                return true;
            }else if($files == ""){
                return true;
            }
            return false;
     }
        /*
         * Валидация message
        */
        public  static  function checkText($inputText)
        {
            if(strlen($inputText) >= 200){
            return false;
        }
            return true;
        }


        /*
         * Запись данных с формы в БД
        */

        public static function inputData($userName, $userEmail, $userMessage,$userId,$userBrowserInform)
        {
            //Соединение с БД
            $db = Db::getConnection();

            //Текст запроса
            $sql = 'INSERT INTO users_comment (name, email, message, users_id, browser_info) '
                .'VALUES (:name, :email, :message, :users_id, :browser_info) ';

            //Получение и возврат результатов, исполбзуется подготовленный запрос

            $result = $db->prepare($sql);
            $result->bindParam(':name',$userName, PDO::PARAM_STR);
            $result->bindParam(':email',$userEmail, PDO::PARAM_STR);
            $result->bindParam(':message',$userMessage, PDO::PARAM_STR);
            $result->bindParam(':users_id',$userId, PDO::PARAM_STR);
            $result->bindParam(':browser_info',$userBrowserInform, PDO::PARAM_STR);
            return $result->execute();

        }
        
        
        public static  function getResult()
        {
            //Соеденяем с базой данных
            $db = Db::getConnection();
            
            //Получаем результаты
            $result = $db->query(' SELECT name, email, message, browser_info, comment_date FROM users_comment ');
            
            $usersData = array();
            $i = 0;
            while ($row = $result->fetch()) {
                $usersData[$i]['name'] = $row['name'];
                $usersData[$i]['email'] = $row['email'];
                $usersData[$i]['message'] = $row['message'];
                $usersData[$i]['browser_info'] = $row['browser_info'];
                $usersData[$i]['comment_date'] = $row['comment_date'];
                $i++;
            }
            return $usersData;
            
        }


       public  static  function count()
       {
           //Соеденяем с базой данных
           $db = Db::getConnection();

           //Получаем результаты
           $result = $db->query(' SELECT   COUNT(*) FROM  users_comment ');
           $userData= $result->fetch();

           return $userData;


       }

    }
