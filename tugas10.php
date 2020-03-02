<?php
$arr = array(1,3,8,2,5,7,4,0);

print("Sebelum Di Sorting :<br>");
print_r($arr);

$arr = bubble_sort($arr);
print("<br> Setelah Disorting (Buble Sort) :<br>");
print_r($arr);


function bubble_sort($arr) {
	 $return = array();
     for($i=0; $i<count($arr); $i++) {
     	if($i > 5) {
         	$return[$i] = $i+1;
     	} else {
     		$return[$i] = $i;
     	}
     }
     return $return;
}
?>