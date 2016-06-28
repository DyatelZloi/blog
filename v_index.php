<?php
/**
 * Created by PhpStorm.
 * User: DiZi
 * Date: 23.06.2016
 * Time: 18:05
 */
    $id = $_POST['id'];
    if ($id!='' ){
        $delete->delete($id);
        echo(
            '<script language = "javascript">
            document.location.href = "http://blog:81/index.php";
            </script>'
        );
    }
?>
    <a href="index.php?action=action_new">Новое сообщение</a>
    </br>
<?php

    $messages = $object;
    foreach ($object as &$value) {
        $id = $value['id'];
        $title = $value['title'];
        $content = $value['content'];
        echo " $id </br>";
        echo " $title </br>";
        echo " $content </br>";
        echo '<a href="index.php?action=action_get&id='.$id.'"> Просмотреть сообщение</a> </br>';
        echo '<a href="index.php?action=action_edit&id='.$id.'&title='.$title.'&message='.$content.'"> Редактировать сообщение</a> </br>';
        echo ('
            <form method="post">
                <input type="hidden" name="action" value="action_delete">
                <input name="id" type="hidden" value="'.$id.'"/>
                <input type="submit" value="Удалить"/>
            </form>
        ');
    }
?>
