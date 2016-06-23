<?php
    include('functions.php');
    $id = $_GET['id'];
?>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>
            Просмотр статьи
        </title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div id = "head">

        </div>
        <?php
            $message = get_message($id);
            foreach ($message as &$value) {
                $title = $value['title'];
                $content = $value['content'];
                echo $title;
                echo $content;
            }
        ?>
    </body>
</html>