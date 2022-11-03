<?php
    include "includes/functions.php";

    $route = parse_url($_SERVER["REQUEST_URI"])["path"];

    run($route);