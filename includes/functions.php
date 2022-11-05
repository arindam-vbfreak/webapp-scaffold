<?php
    session_start();

    include "env.php";
    include "includes/connection.php";
    include "includes/routes.php";

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
