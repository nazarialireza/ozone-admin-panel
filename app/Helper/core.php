<?php

if(!function_exists('url')){
    function url($args){
        $baseURI = str_ireplace('index.php', '',$_SERVER['SCRIPT_NAME']);
        return $baseURI . $args ;
    }
}
if(!function_exists('active')){
    function active($args){
        $pathInfo = $_SERVER['PATH_INFO'];
        return isset($pathInfo) && $pathInfo == $args ? 'active' : '';
    }
}