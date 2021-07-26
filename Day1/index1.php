<?php
//key mane main array ar element but jokhon 1ta element 1 barer bese asbe tokhon oi element ar value 1 kore increment hobe

/*****
 * *
 * *    key => value 
 * *    5 => 1 
 * *    3 => 1
 * *    0 => 1
 * *    3 => 2
 * *    0 => 2
 * *    5 => 2   
 * *    7 => 1 
 * *    7 => 2
 * *    9 => 1
 * *
 * *******/

$arrData = array(5, 3, 0, 3, 0, 5, 7, 7, 9);

function uniqueElement($data){
    $resArray = array();
    foreach ($data as $item){
        if(isset($resArray[$item])){
            $resArray[$item]++; //array ar length 1 increment holo
        }else{
            $resArray[$item] = 1; //array ar length 1 set holo
        }
    }
    return $resArray;
}


$res = uniqueElement($arrData);;
foreach ($res as $key => $value) {

        echo $key."<br />";
        echo $value."<br />";

}





//$arrData = array(5, 3, 0, 3, 0, 5, 7, 7, 9);
//$out = array();
//
//foreach ($arrData as $item) {
//    if (isset($out[$item])) {
//        ++$out[$item];
//        //echo $out[$item];
//    }
//    else {
//        $out[$item] = 1;
//    }
//}
//
//foreach ($out as $key => $value) {
//    if($value == 1){
//        echo $key."<br />";
//        //echo $value."<br />";
//    }
//
//}

?>

