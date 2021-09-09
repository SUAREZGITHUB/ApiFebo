<?php
    // Almacena instancia de la conexion.*/
    // Almacena instancia de la conexion
    class DBClass{
        private $conn; // 
        // credenciales de acceso al servidor
        private $host       = 'localhost';  // lo apunta al localhost que es nuestro ambito de desarrollo
        private $dbName     = 'db_sistemafebo';
        private $userName   = 'root';
        private $pwd        = '';

        // metodo que obtiene la instancia de la clase DBClass
        public function getConnection(){
            // le asigno mi cadena de conexion al PDO segun los parametros requeridos
            $this->conn = new PDO('myql:host=' .$this->host. ';dbname=' .$this->dbname. ';',$this->username, $this->pwd);
            $this->conn->exec("set names utf8");// que utilice la codificacion utf8
            return $this->conn; // que vuelque y retorne todos los valores cargados a conn

        }

    }

?>
