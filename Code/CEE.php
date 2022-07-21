<?php

function CEE_calc($parcours){ 


	if ($parcours=="PAC") {
		return 3000;
	}
	elseif ($parcours=="Chaudiere"){
		return 200;
	}
	elseif ($parcours=="Insert"){
		return 200;
	}
	
	elseif ($parcours=="Combles"){
		return 600;
	}
	elseif ($parcours=="Murs_e"){
		return 1600;
	}
	elseif ($parcours=="Murs_i"){
		return 1200;
	}
	elseif ($parcours=="Sous_sols"){
		return 600;
	}
	elseif ($parcours=="Combles+Murs_e"){
		return 2200;
	}
	elseif ($parcours=="Combles+Murs_i"){
		return 1800;
	}
	elseif ($parcours=="Murs_i+Sous_sols"){
		return 1800;
	}
	elseif ($parcours=="Murs_e+Sous_sols"){
		return 2200;
	}
	elseif ($parcours=="Combles+Sous_sols"){
		return 1200;
	}
	elseif ($parcours=="Combles+Murs_e+Sous_sols"){
		return 2800;
	}
	elseif ($parcours=="Combles+Murs_i+Sous_sols"){
		return 2400;
	}
	else return "Erreur";

}
