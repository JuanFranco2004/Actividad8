<?php
    class dataConex {
        private $hostname = "localhost";
        private $dbname = "base23";
        private $username = "Juan";
        private $password = "Morad@123";

        public function conexion() {
            try {
                $PDO = new PDO("mysql:host=".$this->hostname.";dbname=".$this->dbname,$this->username,$this->password);
                return $PDO;
            } catch (PDOException $ex) {
                return $ex->getMessage();
            }
        }
    }
?>