<?php
/**
 * Created by PhpStorm.
 * User: DiZi
 * Date: 25.06.2016
 * Time: 1:33
 */

include_once('m_msql.php');
    class m_article {

        private static $instance;

        private $msqli;

        public static function instance(){
            if (self::$instance == null){
                self::$instance = new self();
            }
            return self::$instance;
        }

        public function __construct(){
            $this->msqli = new m_msql();
        }

        public function all(){
            $page = 1;
            $articles_per_page = 10;
            $skip = ($page-1) * $articles_per_page;
            $query = "SELECT * FROM messages ORDER BY id LIMIT ".$skip.",".$articles_per_page;
            return $this->msqli->get_all($query);
        }

        public function get($id){
            $query = "SELECT * FROM messages WHERE id=".$id;
            return $this->msqli->get($query);
        }

        public function add($title, $message){
            $query = "INSERT INTO messages (title, content) VALUES ('".$title."', '".$message."')";
            $this->msqli->create($query);
        }

        public function edit($id, $title, $content){
            $query = "UPDATE messages SET title='".$title."',content='".$content."' WHERE id='".$id."'";
            $this->msqli->update($query);
        }

        public function delete($id){
            $query = "DELETE FROM messages WHERE id ='".$id."'";
            $this->msqli->delete($query);
        }
    }

?>