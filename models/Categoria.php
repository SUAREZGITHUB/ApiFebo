<?php

// el archivo debe contener el nombre primeo en mayuscula para saber que es una clase
// al igual que la definicion de clase
    class Categoria{
        // declaramos (o definimos) la propiedad que va a contener la conexion a la base de datos
         // que la obtendremos a traves de una instancia
        private $conn;

        // definimos e inicializamos propiedad que contendrá con el nombre de la tabla 
        private $table_name = "categorias";

        // luego definimos la lista de atributos (campos homologos segun nuestra base de datos) de la entidad que recibiran los datos de la tabla
        public $id;
        public $codigo;
        public $descripcion;
        public $created_at;
        public $modified_at;
        public $deleted_at;
                
        // constructor para que me pasen desde el controlador de categoria, creen esta intancia me pasen el objeto conexion para poderlo salvar
        // para crear un constructor usamos __construct()
        // el objetivo principal de un constructor es inicializarse automaticamente a diferencia de un metodo que hay que invocarlo
        // cuando __construct($db) reciba el parametro se lo volcamos a nuestra propiedad conn donde queda grabado
        public function __construct($db){// se la asociamos a conn que es el $db que estamos recibiendo
        $this->conn = $db;

        }
    }

?>