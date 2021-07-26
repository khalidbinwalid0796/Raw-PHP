<?php

    declare(strict_types = 1); //strict mode open, akhn r string pass kora jabe na jokhon parameter a int type hint die debo
    ini_set('display_errors','1'); //error reporting on

//    class User{}
//
//    function test(User $abc){
//        var_dump($abc);
//    }
//
//    test(new User()); //object pass


//    class User{}
//
//    function test(Array $abc){
//        var_dump($abc);
//    }
//
//    test([]); //array pass


//scalar type hint(int,float,bool)-->parameter type define kore dea

function add(int $a, int $b){
    return $a+$b;
}
echo add(3,4);
//echo add(3,'35');
?>