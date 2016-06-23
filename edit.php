<?php
    include_once('view.php');

    // Информация для отображения.
    $title = 'Редактировать сообщение';

    // Внутренний шаблон.
    $content = template('v_edit.php');

    // Внешний шаблон.
    $page = template(
        'v_main.php',
        array('title' => $title, 'content' => $content));

    // Вывод.
    echo $page;
