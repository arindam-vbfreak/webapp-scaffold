<?php
    function callPostHandlers(){
        $count=0;
        $func=null;
        foreach ($_POST as $key => $value) {
            if(substr($key,0,1)=="_"){
                $count++;
                $func = substr($key,1);
            }
        }
        if($count==1){
            if($func!=null)call_user_func($func);
        }
    }
    if(count($_POST)!==0){
        callPostHandlers();
    };