<?php

    // aqui consumimos  la clase database
    // en VFP set procedure to "database.prg" ADDITIVE
     include_once '../config/database.php';
     include_once '../utils/response.php';
     //en VFP $dbClass = newobjetc ("DBClass", "database.prg")
    $dbClass = new DBClass();
     //en VFP $conn.getConnection()
    $conn    = $dbClass->getConnection();

    $res    = new Response();
    echo json_encode($res->getResponse("success" ,null  ,200 , "conectado ok"));

?>