<?php
    $page_title = isset($page_title)?$page_title:"Home Page";
    $page = isset($page)?$page:null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$page_title?></title>
    <?php 
        require partials("styles"); 
        dependencies($page,"css");
    ?>
</head>
<body style="padding-bottom:50px;">
<form method="POST">
