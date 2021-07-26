<?php

$arrData = array(3, 5, 5, 8, 7, 6, 3, 1, 2, 8, 9);
$out = array();

foreach ($arrData as $item) {
    if (in_array($item, $out)) {
        $out[$item]++;
    }else{
        $out[$item] = 1;
    }
}


foreach ($out as $item){
    echo $item;
}
?>
