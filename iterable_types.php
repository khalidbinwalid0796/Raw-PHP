<?php

/***
 * 
 * It accepts any array or object implementing the Traversable interface
 * Object or array ar pottek ta element k traverse korar jonno use kora hoy
 * 
 * ***/

function printIterable(iterable $myIterable) {
    foreach($myIterable as $item) {
        echo $item."<br>";
    }
}

$arr = ["a", "b", "c"];
printIterable($arr);

?>