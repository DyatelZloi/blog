<?php
/**
 * Created by PhpStorm.
 * User: DiZi
 * Date: 23.06.2016
 * Time: 18:39
 */
$title = $_POST['title'];
$message = $_POST['message'];
if ($title!='' && $message!=''){
    $object->add($title, $message);
    //TODO в константу!
    echo(
    '<script language = "javascript">
        document.location.href = "http://blog:81/index.php";
    </script>'
    );
}
?>
<form method="post">
    <input name="title" type="text" placeholder="Заголовок"/>
    <textarea name="message" type="text" placeholder="Текст сообщения" cols="40" rows="3"></textarea>
    <input type="submit" value="Отправить"/>
</form>
