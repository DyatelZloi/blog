<?php
include("functions.php");
/**
 * Created by PhpStorm.
 * User: DiZi
 * Date: 23.06.2016
 * Time: 18:05
 */
?>
    <a href="new_message.php">Новое сообщение</a>
    </br>
<?php

    $messages = get_messages($page);
    foreach ($messages as &$value) {
        $id = $value['id'];
        $title = $value['title'];
        $content = $value['content'];
        echo " $id </br>";
        echo " $title </br>";
        echo " $content </br>";
        echo '<a href="article.php?id='.$id.'"> Просмотреть сообщение</a> </br>';
    }
?>