<?php

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

?>