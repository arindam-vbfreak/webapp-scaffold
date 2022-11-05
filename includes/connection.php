<?php
    $database = $debug?$development_settings["database"]:$production_settings["database"];    

    try {
        $conn = getConnectionObject();
    } catch (Throwable $th) {

    }

    function getConnectionObject(){
        global $database;
        $server = $database["server"];
        $port = $database["port"];
        $dbname= $database["dbname"];
        return new PDO("mysql:host=$server;port=$port;dbname=$dbname",$database["username"],$database["password"]);
    }
