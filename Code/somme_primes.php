<?php

function somme_prime($prime,$cee){ 

	if ($prime=="0"){
		return $cee;
	}
	elseif ($prime=="Erreur"||$cee=="Erreur"){
		return "Erreur";
	}
	else return $prime+$cee;
}