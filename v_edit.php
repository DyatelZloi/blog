<?php
/**
 * Created by PhpStorm.
 * User: DiZi
 * Date: 23.06.2016
 * Time: 18:39
 */

$id =$_GET['id'];
$title1 = $_GET['title'];
$message1 = $_GET['message'];
$title = $_POST['title'];
$message = $_POST['message'];
if ($title!='' && $message!='')
    $object->edit($id, $title, $message);
?>
<form method="post">
    <input name="title" type="text" value="<?php echo $title1 ?>"/>
    <textarea name="message" type="text" placeholder="Текст сообщения" cols="40" rows="3"><?php echo $message1 ?></textarea>
    <input type="submit" value="Отправить"/>
</form>
