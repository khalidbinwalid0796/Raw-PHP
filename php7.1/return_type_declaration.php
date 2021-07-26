<?php

declare(strict_types = 1); //strict mode open, akhn r string pass kora jabe na jokhon parameter a int type hint die debo
ini_set('display_errors','1'); //error reporting on

function test() : array //return type declare
{
    return [];
}

var_dump(test());

?>