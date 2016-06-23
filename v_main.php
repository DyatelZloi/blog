<?php
/**
 * Created by PhpStorm.
 * User: DiZi
 * Date: 23.06.2016
 * Time: 18:01
 */
//Основной шаблон
    // Языковая настройка.
    setlocale(LC_ALL, 'ru_RU.UTF-8'); // Устанавливаем нужную локаль (для дат, денег, запятых и пр.)
    mb_internal_encoding('UTF-8'); // Устанавливаем кодировку строк
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

        <?php echo $content?>

        <p>
            <small>Все права защищены. Адрес. Телефон.<small>
        </p>
    </body>
</html>
