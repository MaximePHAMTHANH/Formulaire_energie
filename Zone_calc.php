<?php

function zone_calculator($var){ 

	$zone1= array(01, 02, 03, 05, 08, 10, 14, 15, 19, 21, 23, 25, 27, 28, 38, 39, 42, 43, 45, 51, 52, 54, 55, 57, 58, 59, 60, 61, 62, 63, 67, 68, 69, 70, 71, 73, 74, 75, 76, 77, 78, 80, 87, 88, 89, 90, 91, 92, 93, 94, 95);
	$zone2= array(04, 07, 09, 12, 16, 17, 18, 22, 24, 26, 29, 31, 32, 33, 35, 36, 37, 40, 41, 44, 46, 47, 48, 49, 50, 53, 56, 64, 65, 72, 79, 81, 82, 84, 85, 86);
	$zone3= array(06, 11, 13, 20, 30, 34, 66, 83);


	if (in_array($var, $zone1)){ 
		return 1;}
	elseif (in_array($var, $zone2)){ 
		return 2;}
	elseif (in_array($var, $zone3)){ 
		return 3;}	
	else return 0;
}

