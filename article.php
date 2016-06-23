<?php
    include_once('view.php');

    // Информация для отображения.
    $title = 'Просмотр сообщения';

    // Внутренний шаблон.
    $content = template('v_article.php');

    // Внешний шаблон.
    $page = template(
        'v_main.php',
        array('title' => $title, 'content' => $content));

    // Вывод.
    echo $page;
