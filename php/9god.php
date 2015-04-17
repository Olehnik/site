<?php
header('Content-Type: text/html; charset=UTF-8');
function gody($year) {
	$year = 2014;
	if ($year % 4 == 0){
	echo "Год ".$year. " високосный!";
	}
	else{
	echo "Год ".$year. " не високосный!";
		}
	}
	echo gody(2000);
	?>
	
	