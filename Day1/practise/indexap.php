<?php
$arrData = array(5, 3, 0, 3, 0, 5, 7, 7, 9);
$out = array();
$arrLength = count($arrData);
for($i = 0; $i < $arrLength; $i++) {
    if (($arrData[i] !== $arrData[i+1]) && ($arrData[i] !== $arrData[i-1])) {
        $out[] = $arrData[i];
    }
}


foreach ($out as $item){
    echo $item;
}
?>