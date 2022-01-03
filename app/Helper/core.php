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
if(!function_exists('date_between')){
  function date_between($date_start, $date_end){
    if (!$date_start || !$date_end) return 0;
    if (class_exists('DateTime')) {
      $date_start = new DateTime($date_start);
      $date_end = new DateTime($date_end);
      return $date_end->diff($date_start)->format('%a');
    } else {
      return abs(round((strtotime($date_start) - strtotime($date_end)) / 86400));
    }
  }
}