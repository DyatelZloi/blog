<?php
/**
 * Created by PhpStorm.
 * User: DiZi
 * Date: 24.06.2016
 * Time: 13:58
 */
    class c_article extends c_base{

        private $mArticles;

        public function __construct(){
            $this->mArticles = m_article::Instance();
        }

        public function template($fileName, $vars = array()){
            extract($vars);
            ob_start();
            include $fileName;
            return ob_get_clean();
        }

        public function action_index(){
            $this->title = 'Главная';
            $this->content = $this->template('v_index.php', array('object' => $this->mArticles->all(), 'delete' => $this->mArticles));
        }

        public function action_edit(){
            $this->title = 'Редактировать сообщение';
            $this->content = $this->template('v_edit.php', array('object' => $this->mArticles));
        }

        public function action_new(){
            $this->title = 'Новое сообщение';
            $this->content = $this->template('v_new_message.php', array('object' => $this->mArticles));
        }

        public function action_get(){
            $this->title = 'Прочитать сообщение';
            $this->content = $this->template('v_article.php', array('object' => $this->mArticles));
        }

        public function action_delete(){
            $this->title = 'Удалить сообщение';
            $this->content = $this->template('v_index.php', array( 'delete' => $this->mArticles, 'object' => $this->mArticles->all()));
        }

    }
?>