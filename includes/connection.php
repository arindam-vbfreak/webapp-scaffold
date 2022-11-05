<?php

    $database = $debug ? $development_settings["database"] : $production_settings["database"]; 
    $con = null;
    try {
        $con = getConnectionObject();
    } catch (Throwable $th) {
        $con = null;
    }

    function getConnectionObject(){
        global $database;
        $server = $database["server"];
        $port = $database["port"];
        $dbname= $database["dbname"];
        return new PDO("mysql:host=$server;port=$port;dbname=$dbname",$database["username"],$database["password"]);
    }

    function db_query($sql){
        global $con;
        if($con==null){
            return false;
        }else{
            return $con->query($sql);
        }
    }