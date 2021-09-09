<?php
    // Almacena instancia de la conexion
    class DBClass{
        private $conn;// 
        // credenciales de acceso al servidor
        private $host       = "localhost";  // lo apunta al localhost que es nuestro ambito de desarrollo
        private $dbName     = "db_sistemafebo";
        private $userName   = "root";
        private $pwd        = "";
        private $port       ="3310";

        // metodo que obtiene la instancia de la clase DBClass
        public function getConnection(){
            try{
                //PDO significa PHP Data Objects, Objetos de Datos de PHP, una extensión para acceder a bases de datos
                // le asigno mi cadena de conexion al objeto PDO segun los parametros requeridos

                $this->conn = new PDO("mysql:host=" . $this->host . ";port=" .$this->port. ";dbname=" . $this->dbName . ";", $this->userName, $this->pwd);
                //$this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbName . ";", $this->userName, $this->pwd);
                $this->conn->exec("set names utf8");// que utilice la codificacion utf8
                echo "conectado Ok";
                return $this->conn; // que vuelque y retorne todos los valores cargados a conn
            }catch(PDOException $ex){
                echo $ex->getMessage();
            }

        }

    }

?>
© 2021 GitHub, Inc.