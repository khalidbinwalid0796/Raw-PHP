<?php

for($i =1; $i<=10 ; $i++){
    if($i === 5){
        break; //continue
    }
    echo $i;
}

echo "<br>";

$j = 1;
while($j<=10){
    if($j == 5){
        break;  //continue
    }
    echo $j;
    $j++;
}

echo "<br>";

$x = 1;

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);


?>