<?php
/*
 * Клас Router
 * Компонент для работы с маршрутами
*/

class Router
{
    /*
     * Свойство для хранения массива роутов
     * @var array
    */
    private $routes;

    /*
     * Конструктор
    */
    public function  __construct()
    {
        //Путь к файлу с роутами
        $routesPath = ROOT.'/config/routes.php';

        //Получае роуты из файла
        $this->routes = include ($routesPath);
    }

    //Возвращаем строку запроса

    private  function getURI()
    {
        if(!empty($_SERVER['REQUEST_URI'])){
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

   /*
    * Метод для обработки запроса
   */
     public  function run()
     {
         //Получаем строку запроса
         $uri = $this->getURI();

         //Проверяем наличие такого запроса в масиве маршрутов(routes.php)
         foreach($this->routes as $uriPattern => $path){

             //Сравниваем uriPattern и $uri
             if(preg_match("~$uriPattern~", $uri)){

               //Получаем внутренний путь из внешнего, согласно правилу
                 $internalRoute = preg_replace("~$uriPattern~", $path, $uri);

                 //Определить контроллер, action, параметры

                 $segments = explode('/', $internalRoute);
                 $controllerName = array_shift($segments).'Controller';
                 $controllerName = ucfirst($controllerName);

                 $actionName = 'action'.ucfirst(array_shift($segments));

                 $parameters =$segments;

                 //Подключить файл класа контроллера
                 $controllerFile = ROOT. '/controllers/'.$controllerName.'.php';

                 if(file_exists($controllerFile)){
                     include_once ($controllerFile);
                 }

                 //Создать обект, вызвать метод (т.е. action)

                 $controllerObject = new $controllerName;

                 /*
                  * Вызываем необходимый метод ($actionName), у определенного
                  * кдасса ($controllerObject), с задаными параметрами ($parameters)
                 */
                 $result = call_user_func(array($controllerObject, $actionName), $parameters);

                 //Если метод контроллера успешно вызван, завершаем работу роутера
                 if($result != null){
                     break;
                 }
             }
         }
     }

}