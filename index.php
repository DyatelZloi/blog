<?php
    function __autoload($classname){
        include_once("$classname.php");
    }

    $action = isset($_GET['action']) ? $_GET['action'] : 'action_index';
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

    // Внешний шаблон.
    $page = new c_article();

    echo $page->Request($action);
    /*switch ($action){
        case 'index' : echo $page->action_index();
            break;
        case 'new' : echo $page->action_new();
            break;
        case 'edit' : echo $page->action_edit();
            break;
        case 'view' : echo $page->action_get();
            break;
        case '': echo $page->action_delete();
            break;
        default : echo $page->action_index();
    }
    */


