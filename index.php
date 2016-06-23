<?php
    include_once('view.php');

    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

    // Информация для отображения.
    $title = 'Главная';

    // Внутренний шаблон.
    $content = template('v_index.php');

    // Внешний шаблон.
    $page = template(
        'v_main.php',
        array('title' => $title, 'content' => $content, 'page' => $page));

    // Вывод.
    echo $page;
