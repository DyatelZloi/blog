<?php
/**
 * Created by PhpStorm.
 * User: DiZi
 * Date: 19.06.2016
 * Time: 13:21
 */
require_once("settings.php");

    //Новое сообщение
    function new_message($title, $message){
        $mysqli = mysqli_connect(SERVER, USERNAME, PASSWORD, DATABASE_NAME);
        if ($mysqli->connect_errno) {
            printf("Не удалось подключиться: %s\n", $mysqli->connect_error);
            exit();
        }
        $sql = "INSERT INTO messages (title, content) VALUES ('".$title."', '".$message."')";
        $results = mysqli_query($mysqli, $sql);
        mysqli_close($mysqli);
    }

    //Получить все сообщения
    function get_messages($page){
        $page = 1;
        $articles_per_page = 10;
        $skip = ($page-1) * $articles_per_page;
        $mysqli = mysqli_connect(SERVER, USERNAME, PASSWORD, DATABASE_NAME);
        $sql = "SELECT * FROM messages ORDER BY id LIMIT ".$skip.",".$articles_per_page;
        $result = mysqli_query($mysqli, $sql);
        $messages = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $messages[] = $row;
        }
        mysqli_close($mysqli);
        return $messages;
    }

    //Получить конкретное сообщение
    function get_message($id){
        $mysqli = mysqli_connect(SERVER, USERNAME, PASSWORD, DATABASE_NAME);
        if ($mysqli->connect_errno) {
            printf("Не удалось подключиться: %s\n", $mysqli->connect_error);
            exit();
        }
        $sql = "SELECT * FROM messages WHERE id=".$id;
        $result = mysqli_query($mysqli, $sql);
        $message = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $message[] = $row;
        }
        mysqli_close($mysqli);
        return $message;
    }

    function update_message($id, $title, $content){
        $mysqli = mysqli_connect(SERVER, USERNAME, PASSWORD, DATABASE_NAME);
        if ($mysqli->connect_errno) {
            printf("Не удалось подключиться: %s\n", $mysqli->connect_error);
            exit();
        }
        $sql = "UPDATE messages SET title='".$title."',content='".$content."' WHERE id='".$id."'";
        $results = mysqli_query($mysqli, $sql);
        mysqli_close($mysqli);
    }

    function delete_message($id){
        $mysqli = mysqli_connect(SERVER, USERNAME, PASSWORD, DATABASE_NAME);
        if ($mysqli->connect_errno) {
            printf("Не удалось подключиться: %s\n", $mysqli->connect_error);
            exit();
        }
        $sql = "DELETE FROM messages WHERE id ='".$id."'";
        $results = mysqli_query($mysqli, $sql);
        mysqli_close($mysqli);
    }
?>