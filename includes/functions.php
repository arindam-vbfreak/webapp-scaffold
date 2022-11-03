<?php
    include "includes/connection.php";
    include "includes/routes.php";
    include "env.php";

    $debug=true;
    
    function getConnectionObject(){
        global $debug,$development_settings,$production_settings;
        $database = $debug?$development_settings["database"]:$production_settings["database"];
        $server = $database["server"];
        $port = $database["port"];
        $dbname= $database["dbname"];
        return new PDO("mysql:host=$server;port=$port;dbname=$dbname",$database["username"],$database["password"]);
    }
    function run($route){
        global $routes;
        require array_key_exists($route, $routes) ? controller($route) : controller("/404");
    }

    function controller($path){
        global $routes;
        $part ="controllers/".$routes[$path].".php";
        return $part;
    }

    function view($path){
        return "views/{$path}.view.php";
    }

    function partials($part){
        return "views/partials/$part.php";
    }

    function dependencies($part,$type){
        if($part==null) return false;
        $path = "views/dependencies/{$part}.{$type}";
        if(file_exists($path)){
            ?>
            <link rel="stylesheet" href="<?=$path?>">
            <?php
        }
    }