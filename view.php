<?php
//
// Подключение шаблона.
//
    function template($fileName, $vars = array())
    {
        // Устанавливаем переменные из массива в шаблон
        extract($vars);

        // Генерация HTML в строку.
        ob_start();
        include $fileName;
        return ob_get_clean();
    }