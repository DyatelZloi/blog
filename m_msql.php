<?php
/**
 * Created by PhpStorm.
 * User: DiZi
 * Date: 25.06.2016
 * Time: 1:22
 */
    class m_msql{

        private static $instance;
        private $mysqli;

        public function get_mysql(){
            return $this->mysqli;
        }

        public function set_mysql($mysql){
            $this->mysqli = $mysql;
        }



        public function __construct(){
            $this->mysqli = mysqli_connect("localhost", "root", "", "blog");
            if ($this->mysqli->connect_errno) {
                printf("Не удалось подключиться: %s\n", $this->mysqli->connect_error);
                exit();
            }
        }

        public function get_all($query){
            $result = mysqli_query($this->get_mysql(), $query);
            $objects = array();
            while ($row = mysqli_fetch_assoc($result)) {
                $objects[] = $row;
            }
            return $objects;
        }

        public function get($query){
            $results = mysqli_query($this->get_mysql(), $query);
            $objects = array();
            while ($row = mysqli_fetch_assoc($results)) {
                $objects[] = $row;
            }
            return $objects;
        }

        public function update($query){
            $results = mysqli_query($this->get_mysql(), $query);
            return $results;
        }

        public function delete($query){
            $results = mysqli_query($this->get_mysql(), $query);
            return $results;
        }

        public function create($query){
            $results = mysqli_query($this->get_mysql(), $query);
            return $results;
        }
    }
?>