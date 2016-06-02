<?php
/*
 * Контроллер FormController
*/
    class FormController
    {
        /*
         * Action для главной станицы
        */
            public function actionIndex()
            {
                require_once(ROOT.'/views/site/index.php');
                return true;
            }

        /*Action для формы отзывов*/

            public function actionForm()
            {

                //Переменные для формы
                $userName = false;
                $userEmail = false;
                $userFile = false;
                $useMessage = false;
                $userIp = false;
                $userBrowserInfo = false;
                $result = false;
                //Флаг на ошибки
                $errors = false;


                //Обработка формы
                if(isset($_POST['submit'])){
                    $userName = $_POST['userName'];
                    $userEmail = $_POST['userEmail'];
                    $userFile = $_FILES['userFile']['name'];
                    $useMessage = $_POST['userMessage'];
                    $userIp = $_SERVER['REMOTE_ADDR'];
                    $userBrowserInfo = $_SERVER['HTTP_USER_AGENT'];
                    if(!Form::checkName($userName)){
                        $errors[] = 'Имя введено неправильно.';
                    }

                    if(!Form::checkEmail($userEmail)){
                        $errors[] = 'Email введен не правильно.';
                    }

                    if(!Form::checkFile($userFile)){
                        $errors[]= 'Запрещенное расширение файла';
                    }else{
                        $uploadDir = './upload';
                        $tmp_name = $_FILES['userFile']['tmp_name'];
                        move_uploaded_file($tmp_name, "$uploadDir/$userFile");
                    }

                    if(!Form::checkText($useMessage)){
                        $errors[] = 'Максимально допустимо символов 200.';
                    }

                    if($errors == false){
                       $result =  Form::inputData($userName,$userEmail,$useMessage,$userIp,$userBrowserInfo);
                    }
                }
                require_once(ROOT.'/views/site/form.php');
                return true;
            }


//Action для просмотра результатов 
            public function actionReview()
            {

                $userDataArray = Form::getResult();
                $countData = Form::count();
                foreach ($countData as $data)

                require_once(ROOT.'/views/site/review.php');
                return true;
            }
    }