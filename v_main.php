<?php
    setlocale(LC_ALL, 'ru_RU.UTF-8');
    mb_internal_encoding('UTF-8');
?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title?></title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <h1><?php echo $title?></h1>
        <a href="index.php">На главную</a>
        <?php echo $content?>

        <p>
            <small>Все права защищены. Адрес. Телефон.<small>
        </p>
    </body>
</html>
