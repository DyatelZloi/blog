<?php
/**
 * Created by PhpStorm.
 * User: DiZi
 * Date: 24.06.2016
 * Time: 13:56
 */
    abstract class C_Base extends C_Controller
    {
        protected $title;
        protected $content;

        function __construct()
        {
        }

        protected function before()
        {
            $this->title = 'Название сайта';
            $this->content = '';
        }

        //
        // Генерация базового шаблонаы
        //
        public function render()
        {
            $vars = array('title' => $this->title, 'content' => $this->content);
            $page = $this->Template('v_main.php', $vars);
            echo $page;
        }
    }
