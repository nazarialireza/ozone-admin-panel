<?php
require "vendor/autoload.php";
use eftec\bladeone\BladeOne;

$views = __DIR__ . '/views';
$cache = __DIR__ . '/cache';
$blade = new BladeOne($views,$cache,BladeOne::MODE_DEBUG);

echo $blade->run("hello",array("variable1"=>"value1")); // it calls /views/hello.blade.php
