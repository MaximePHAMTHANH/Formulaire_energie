<?php

function prime_renov($att,$couleur,$surface){ 

	// Tableau des primes
	$PAC=["Bleu"=> 4000,"Jaune"=>3000,"Violet"=>2000,"Rose"=>0 ];
	$Insert=["Bleu"=> 3000,"Jaune"=>2500,"Violet"=>1500,"Rose"=>0 ];
	$Chaudiere=["Bleu"=> 1200,"Jaune"=>800,"Violet"=>0,"Rose"=>0 ];

	if ($att=="PAC") {
		return $PAC[$couleur];
	}
	elseif ($att=="Chaudiere"){
		return $Chaudiere[$couleur];
	}
	elseif ($att=="Insert"){
		return $Insert[$couleur];
	}
	else return "Erreur";

}
