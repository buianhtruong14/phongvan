<?php
    function soLonNhat($arr){
        $max = null;
        for ($i = 0; $i < count($arr); $i++)
        
        {
            if ($max == null){
                $max = $arr[$i];
            }
            else {
                if ($arr[$i] > $max){
                    $max = $arr[$i];  
                }
            }
        }
        return $max;
    }
    function deleteMax($max,$arr){
        $arr2 = $arr;
        for ($i = 0; $i < count($arr); $i++){
            if ($arr[$i] == $max) {
                unset($arr[$i]);
            }
        }
        return $arr;
    }
	function timTong($arr){
        $max1 = soLonNhat($arr);
        $arr2 = deleteMax($max1,$arr);
        $max2 = soLonNhat($arr2);
        return $max1 + $max2;

    }
    $max = 234;
    $arr = array(0,100,-3,4,1,100,234,234,4);
	print_r(timTong($arr)); 
?>