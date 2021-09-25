<?php

if(!function_exists('url')){
    function url($args){
        $baseURI = str_ireplace('index.php', '',$_SERVER['SCRIPT_NAME']);
        return $baseURI . $args ;
    }
}