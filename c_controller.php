<?php
/**
 * Created by PhpStorm.
 * User: DiZi
 * Date: 24.06.2016
 * Time: 13:52
 */
    abstract class c_controller{

        protected abstract function render();

        protected abstract function before();

        public function Request($action)
        {
            $this->before();
            $this->$action();
            $this->render();
        }

        // Если вызвали метод, которого нет - завершаем работу
        public function __call($name, $params){
            die('Не пишите фигню в url-адресе!!!');
        }
    }
