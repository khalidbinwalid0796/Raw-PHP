<?php
    //type juggling->operation ar somoy j type ar data lage php input data k sei type a convert kore nei
    //gettype die data type jana jai
    $count = "3";
    Type1 : echo gettype($count)."<br>";
    $count += 3;
    echo $count."<br>";
    Type2 : echo gettype($count)."<br>";

    settype($count,"string");
    Type3 : echo gettype($count)."<br>";

?>



