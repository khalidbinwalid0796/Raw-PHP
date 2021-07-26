<?php

    /*** 
     * 
     *  javascript a global variable ar scope sob jaigai
     *  but php te global variable k local scope k use korte hole global keyword use kora hoy
     * 
     * ****/

    $a = 10;
    function add(){
        //$a = 20;
        global $a;
        //GLOBAL $a;
        echo "inside the function value is".$a."<br>";
    }
    add();
    echo "outside the function value is".$a;
?>