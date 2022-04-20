<?php

function departement_from_codepostal($var){
if ($var>100){
	return floor($var/1000);
  }
else return $var;
 }
