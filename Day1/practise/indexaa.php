<?php

    $arrData = array(5, 3, 0, 3, 0, 5, 7, 7, 9);

    function uniqueElement($data){
        $resArray = array();
        foreach ($data as $item){
            if(isset($resArray[$item])){
                ++$resArray[$item];
            }else{
                $resArray[$item] = 1;
            }
        }
        return $resArray;
    }


    $res = uniqueElement($arrData);;
    foreach ($res as $key => $value) {
        if($value == 1){
            echo $key."<br />";
            //echo $value."<br />";
        }
    }
?>