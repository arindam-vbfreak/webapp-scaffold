<?php
    $page_title = "Not Found";
    $page = "404";
    
    require partials("header");
    require partials("nav");
    require view($page);
    require partials("footer");
