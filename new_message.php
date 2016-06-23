<?php
    /**
     * Created by PhpStorm.
     * User: DiZi
     * Date: 19.06.2016
     * Time: 13:20
     */
    include_once('view.php');

    // Информация для отображения.
    $title = 'Новое сообщение';

    // Внутренний шаблон.
    $content = template('v_new_message.php');

    // Внешний шаблон.
    $page = template(
        'v_main.php',
        array('title' => $title, 'content' => $content));

    // Вывод.
    echo $page;

