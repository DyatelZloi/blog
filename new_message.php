<?php
/**
 * Created by PhpStorm.
 * User: DiZi
 * Date: 19.06.2016
 * Time: 13:20
 */
    include("functions.php");
    $title = $_POST['title'];
    $message = $_POST['message'];

    new_message($title, $message);
?>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>
            Блог
        </title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
        <body>
        <div id = "head">
            <a href="index.php">На галавную</a>
        </div>
        <div id = "body">
            <form method="post">
                <input name="title" type="text" placeholder="Заголовок"/>
                <textarea name="message" type="text" placeholder="Текст сообщения" cols="40" rows="3"></textarea>
                <input type="submit" value="Отправить"/>
            </form>
        </div>
    </body>
</html>

