<?php
	function cauTrucMang($n,$arr){
		for( $i=0;$i<$n;$i++){
            for( $j= $i, $c= count($arr);$j<$c;$j= $j + $n){
                $arr2[] = $arr[$i];
            }
        }
        return $arr2;
	}
    $arr = array(1,2,3,4,1,2,3,4,1,2,3,4);
    $n= 4;
	print_r(cauTrucMang($n,$arr)); 
?>