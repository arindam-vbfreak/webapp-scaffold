<?php
    $page_title = "Dashboards";
    $page = "index";
    require addEventMapper();

    require partials("header");
    require partials("nav");
    require view($page);
    require partials("footer");
