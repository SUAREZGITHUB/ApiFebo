<?php

    // aqui consumimos  la clase database
    // en VFP set procedure to "database.prg" ADDITIVE
     include_once '../config/database.php';
     //en VFP $dbClass = newobjetc ("DBClass", "database.prg")
    $dbClass = new DBClass();
     //en VFP $conn.getConnection()
    $conn    = $dbClass->getConnection();

?>