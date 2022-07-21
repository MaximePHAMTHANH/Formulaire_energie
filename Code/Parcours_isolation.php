<?php

function parcours_choice($parcours,$att1,$att2,$att3,$att4,$att5){ 

//att1 = surface_combles
//att2 = surface_sous_sols
//att3 = hauteur_vide_sanitaire sous sols
//att4 = superficie_murs
//att5 = murs int or ext

//  if (strpos($att5, "int") !== false) (deprecated)

	if ($parcours=="Combles") {
		if (($att2>0||$att3>0)&&$att4>0){
			if ($att5=="Les murs intérieurs"){
				return "Combles+Murs_i+Sous_sols";
			}
			else return "Combles+Murs_e+Sous_sols";
		}
		elseif ($att2>0||$att3>0){
			return "Combles+Sous_sols";
		}
		elseif ($att4>0){
			if ($att5=="Les murs intérieurs"){
				return "Combles+Murs_i";
			}
			else return "Combles+Murs_e";
		}
		else return 'Combles';
	}

	elseif ($parcours=="Sous_sols"){
		if ($att1>0&&$att4>0){
			if ($att5=="Les murs intérieurs"){
				return "Combles+Murs_i+Sous_sols";
			}
			else return "Combles+Murs_e+Sous_sols";
		}
		elseif ($att1>0){
			return "Combles+Sous_sols";
		}
		elseif ($att4>0){
			if ($att5=="Les murs intérieurs"){
				return "Murs_i+Sous_sols";
			}
			else return "Murs_e+Sous_sols";
		}
		else return 'Sous_sols';
	}

	elseif ($parcours=="Murs"){
		if (($att2>0||$att3>0)&&$att1>0){
			if ($att5=="Les murs intérieurs"){
				return "Combles+Murs_i+Sous_sols";
			}
			else return "Combles+Murs_e+Sous_sols";
		}
		elseif ($att2>0||$att3>0){
			if ($att5=="Les murs intérieurs"){
				return "Murs_i+Sous_sols";
			}
			else return "Murs_e+Sous_sols";
		}
		elseif ($att1>0){
			if ($att5=="Les murs intérieurs"){
				return "Combles+Murs_i";
			}
			else return "Combles+Murs_e";
		}
		else {
			if ($att5=="Les murs intérieurs"){
				return "Murs_i";
			}
			else return "Murs_e";
		}
	}
	

	else return "Erreur";
}
