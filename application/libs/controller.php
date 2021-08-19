<?php
class Controller {
        public $db = null;

        function __construct() {
                $this->dbConnect();
        }

        private function dbConnect() {
                try{
                        $dsn= "mysql:host=".DB_HOST.":".DB_PORT.";dbname=".DB_NAME;
                        $this->db = new PDO($dsn, DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

                }catch(Exception $e) {
                    echo $e->getMessage();
                }
        }

        public function loadModel($model_name) {
                require './application/models/' . strtolower($model_name) . '.php';
                return new $model_name($this->db, '');
        }
}
?>