<?php

/***
 * 
 * actually flatten_array function ta array ar element gulok parameter hisabe nei but at a time aktai element nei  
 * se single element hok r array hok r jei array pai sei abar function nije nijek call kore mane array venge fale
 * karon amader to akta array banate hobe
 * 
 * ***/

$myArray = [[[2, 7, 7, 1, 8, 2, 7], 8, 7, 16]];

function flatten_array($data){
    if(!is_array($data)){
        return false;
    }
    $pushArray = array();
    foreach ($data as $key => $value){
        if(is_array($value)){
            $pushArray = array_merge($pushArray,flatten_array($value));
            //print_r($pushArray);
        }else{
            $pushArray = array_merge($pushArray,array($key=>$value));
        }
    }
    return $pushArray;
}

print_r(flatten_array($myArray));



//    $res = flatten_array($myArray);
//    foreach ($res as $value) {
//        echo $value."<br />";
//    }


//function merge_array($arr1,$arr2){
//    $cnt = count($arr2);
//
//    for ($i = 1; $i < $cnt; $i++){
//        $arr1[] = $arr2[$i];
//    }
//    return $arr1;
//}
//
//$arr1 =[1,2,3];
//$arr2 =[1,2,3];
//print_r(merge_array($arr1,$arr2));


?>