<?php

$array = array(11,21,13,14,5,6,17,8,9,10);
$pos = (count($array) - 1);
function swap($array, $pos) {
	$temp = array();
	for($i =0; $i < $pos; $i++) {
		for($j =0; $j < $pos-1-$i; $j++) {
			if($array[$j] > $array[$j+1]) {
			    $temp = $array[$j];
				$array[$j] = $array[$j+1];
				$array[$j+1] = $array;
				printf("swapped %d, %d <br />", $array[$j], $array[$j+1]);
			} else {
				print "Not Swapped <br />";
				
			}
		}
	}
	return $temp;
}
$result = swap($array, $pos);

?>
