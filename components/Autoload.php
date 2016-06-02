<?php
/*
 * Функция __autoload, для автоматического подключения класов
*/

    function __autoload($class_name)
    {
        //Массив папок, в которых могут находится необходимые класы
        $array_paths = array(
            '/models/',
            '/components/',
            '/controllers/',
        );

        //Проходим по массиву папок
        foreach($array_paths as $path){
            //Формируем имя, и путь к файлу с класом
            $path = ROOT.$path.$class_name.'.php';

            //Если такой клас существует подключаем его
            if (is_file($path)){
                include_once $path;
            }
        }
    }