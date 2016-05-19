<?php
$str_cool = "cool";
$str_array = str_split($str_cool);

function recursion($str_array) {
	$temp = array();
	$loco_word = "";
	if($loco_word == "loco") {
	    return $loco_word;
	} else {
		if($str_array == $temp) { 
			for($i = 0; $i < count($str_array); $i++) {
			    $temp[$i] = array_reverse($str_array[$i]);
			}
			$temp = implode("",$temp);
			$loco_word = implode("",$temp);
	    } else {
	        return recursion($temp);
	    }
	}
}
echo recursion($str_array);
?>
