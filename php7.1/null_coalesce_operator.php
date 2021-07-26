<?php

declare(strict_types = 1); //strict mode open, akhn r string pass kora jabe na jokhon parameter a int type hint die debo
ini_set('display_errors','1'); //error reporting on

//$name = isset($_GET['name']) ? $_GET['name'] : 'Not Found';

//uporer kaj ta akhn null coalescing operator die kora jabe

$name = $_GET['name'] ?? 'Not Found';

var_dump($name);
?>