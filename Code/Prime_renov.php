<?php

function prime_renov($att,$couleur,$surface){ 

	// Tableau des primes
	$PAC=["Bleu"=> 4000,"Jaune"=>3000,"Violet"=>2000,"Rose"=>"0" ];
	$Insert=["Bleu"=> 3000,"Jaune"=>2500,"Violet"=>1500,"Rose"=>"0" ];
	$Chaudiere=["Bleu"=> 1200,"Jaune"=>800,"Violet"=>"0","Rose"=>"0" ];
	$Combles=["Bleu"=> 25,"Jaune"=>20,"Violet"=>15,"Rose"=>7 ];
	$Murs=["Bleu"=> 75,"Jaune"=>75,"Violet"=>75,"Rose"=>75 ];	
	$Sous_sols=["Bleu"=> 75,"Jaune"=>75,"Violet"=>75,"Rose"=>75 ];	


	if ($att=="Murs_i"||$att=="Murs_e"){
		$att="Murs";
	}
	elseif ($att=="Murs_i+Sous_sols"||$att=="Murs_e+Sous_sols"){
		$att="Murs+Sous_sols";
	}
	elseif ($att=="Combles+Murs_i"||$att=="Combles+Murs_e"){
		$att="Combles+Murs";
	}	
	elseif ($att=="Combles+Murs_i+Sous_sols"||$att=="Combles+Murs_e+Sous_sols"){
		$att="Combles+Murs+Sous_sols";
	}


	if ($att=="PAC") {
		return $PAC[$couleur];
	}
	elseif ($att=="Chaudiere"){
		return $Chaudiere[$couleur];
	}
	elseif ($att=="Insert"){
		return $Insert[$couleur];
	}
	elseif ($att=="Combles"){
		return $Combles[$couleur]*min($surface,100);
	}
	elseif ($att=="Murs"){
		return $Murs[$couleur]*min($surface,100);
	}
	elseif ($att=="Sous_sols"){
		return $Sous_sols[$couleur]*min($surface,100);
	}
	elseif ($att=="Murs+Sous_sols"){
		return ($Murs[$couleur]+$Sous_sols[$couleur])*min($surface,100);
	}
	elseif ($att=="Combles+Sous_sols"){
		return ($Combles[$couleur]+$Sous_sols[$couleur])*min($surface,100);
	}
	elseif ($att=="Combles+Murs"){
		return ($Combles[$couleur]+$Murs[$couleur])*min($surface,100);
	}
	elseif ($att=="Combles+Murs+Sous_sols"){
		return ($Combles[$couleur]+$Murs[$couleur]+$Sous_sols[$couleur])*min($surface,100);
	}
	else return "Erreur";

}