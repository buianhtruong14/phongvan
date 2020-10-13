<?php
    function sapXep($arr){
        for ($i = 0, $c = count($arr); $i < $c-1; $i ++){
            for ($j = $i +1,$d = count($arr); $j < $c; $j ++){
                if ( $arr[$i] > $arr[$j]){
                    $a = $arr[$i];
                    $arr[$i] = $arr[$j];
                    $arr[$j] = $a;
                }
            }
        }
        return $arr;
    }
	function KhoangCachMin($arr){
        $kcMin = $arr[1]-$arr[0];
		for( $i=0, $c= count($arr);$i<$c-1;$i++){
            if($arr[$i+1]-$arr[$i] < $kcMin){
                $kcMin = $arr[$i+1]-$arr[$i];
            }
        }
        return $kcMin;
    }
    function timcap($arr){
        if ( count($arr) < 100000){
            return "không tính";
        }
        $arrxs = sapXep($arr);
        $kcMin = KhoangCachMin($arrxs);
        for ( $i = 0, $c= count($arr); $i < $c -1 ; $i ++ ){
            if ($arr[$i+1]-$arr[$i] == $kcMin){
                $arrNew[] = [$arr[$i],$arr[$i+1]];
            }
            
        }
        return $arrNew;
    }
    $arr = array(1,2,4,6,7,9,10);
    
    
	print_r(timcap($arr)); 
?>