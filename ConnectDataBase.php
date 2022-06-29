<?php
    class ConnectDataBase {
        private $host, $port, $db_name, $db_user, $db_psw, $db_enc;

        public function __construct($name) {
            $conf = parse_ini_file($name . ".ini");
            $conn = null;
            $this->host = $conf["host"];
            $this->port = $conf["port"];
            $this->db_name = $conf["db_name"];
            $this->db_user = $conf["db_user"];
            $this->db_psw = $conf["db_psw"];
            $this->db_enc= $conf["db_enc"];
            $this->conn = $conn;
        }

        private function connect(): PDO
        {
            return $this->conn = new PDO(
                "mysql:host=$this->host;
                port=$this->port;
                dbname=$this->db_name;
                charset=$this->db_enc",
                $this->db_user,
                $this->db_psw
            );
        }

        public function connecting():PDO
        {
            return $this-> connect();
        }
    }



