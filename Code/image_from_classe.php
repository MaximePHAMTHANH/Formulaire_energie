<?php

function image_from_classes($old_classe,$new_classe){ 

	if ($old_classe=="Je ne sais pas"||$old_classe=="Non Estimable"||$old_classe=="Erreur"){
		return $new_classe."_";
	}
	elseif ($new_classe=="Non Estimable"||$new_classe==""||$old_classe==""){
		return "Non";
	}
	else return $new_classe.$old_classe;
}