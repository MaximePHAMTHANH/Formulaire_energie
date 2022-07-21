<?php

function diag($chauffage,$surface,$parcours){ 

	// Tableau des primes
	$PAC=["Electrique"=>["85m2"=> "C","110m2"=>"C","140m2"=>"D","+140m2"=>"D" ],
	"Gaz"=>["85m2"=> "B","110m2"=>"B","140m2"=>"B","+140m2"=>"B" ],
	"Fioul"=>["85m2"=> "C","110m2"=>"C","140m2"=>"C","+140m2"=>"C" ],
	"PAC"=>["85m2"=> "Non Estimable","110m2"=>"Non Estimable","140m2"=>"Non Estimable","+140m2"=>"Non Estimable" ],
	"Bois"=>["85m2"=> "B","110m2"=>"B","140m2"=>"B","+140m2"=>"B" ],
	"Charbon"=>["85m2"=> "C","110m2"=>"C","140m2"=>"C","+140m2"=>"C" ]];
	$Chaudiere=["Electrique"=>["85m2"=> "D","110m2"=>"D","140m2"=>"E","+140m2"=>"E" ],
	"Gaz"=>["85m2"=> "C","110m2"=>"C","140m2"=>"C","+140m2"=>"C" ],
	"Fioul"=>["85m2"=> "D","110m2"=>"D","140m2"=>"D","+140m2"=>"D" ],
	"PAC"=>["85m2"=> "Non Estimable","110m2"=>"Non Estimable","140m2"=>"Non Estimable","+140m2"=>"Non Estimable" ],
	"Bois"=>["85m2"=> "Non Estimable","110m2"=>"Non Estimable","140m2"=>"Non Estimable","+140m2"=>"Non Estimable" ],
	"Charbon"=>["85m2"=> "D","110m2"=>"D","140m2"=>"D","+140m2"=>"D" ]];
	$Insert=["Electrique"=>["85m2"=> "E","110m2"=>"E","140m2"=>"F","+140m2"=>"F" ],
	"Gaz"=>["85m2"=> "C","110m2"=>"C","140m2"=>"C","+140m2"=>"C" ],
	"Fioul"=>["85m2"=> "D","110m2"=>"D","140m2"=>"D","+140m2"=>"D" ],
	"PAC"=>["85m2"=> "Non Estimable","110m2"=>"Non Estimable","140m2"=>"Non Estimable","+140m2"=>"Non Estimable" ],
	"Bois"=>["85m2"=> "Non Estimable","110m2"=>"Non Estimable","140m2"=>"Non Estimable","+140m2"=>"Non Estimable" ],
	"Charbon"=>["85m2"=> "D","110m2"=>"D","140m2"=>"D","+140m2"=>"D" ]];



	$Combles=["Electrique"=>["85m2"=> "D","110m2"=>"D","140m2"=>"E","+140m2"=>"E" ],
	"Gaz"=>["85m2"=> "C","110m2"=>"C","140m2"=>"C","+140m2"=>"C" ],
	"Fioul"=>["85m2"=> "D","110m2"=>"D","140m2"=>"D","+140m2"=>"D" ],
	"PAC"=>["85m2"=> "B","110m2"=>"B","140m2"=>"C","+140m2"=>"C" ],
	"Bois"=>["85m2"=> "B","110m2"=>"B","140m2"=>"C","+140m2"=>"C" ],
	"Charbon"=>["85m2"=> "D","110m2"=>"D","140m2"=>"D","+140m2"=>"D" ]];
	$Murs_i=["Electrique"=>["85m2"=> "E","110m2"=>"E","140m2"=>"F","+140m2"=>"F" ],
	"Gaz"=>["85m2"=> "C","110m2"=>"C","140m2"=>"C","+140m2"=>"C" ],
	"Fioul"=>["85m2"=> "D","110m2"=>"D","140m2"=>"D","+140m2"=>"D" ],
	"PAC"=>["85m2"=> "B","110m2"=>"B","140m2"=>"C","+140m2"=>"C" ],
	"Bois"=>["85m2"=> "B","110m2"=>"B","140m2"=>"C","+140m2"=>"C" ],
	"Charbon"=>["85m2"=> "D","110m2"=>"D","140m2"=>"D","+140m2"=>"D" ]];
	$Murs_e=["Electrique"=>["85m2"=> "D","110m2"=>"D","140m2"=>"E","+140m2"=>"E" ],
	"Gaz"=>["85m2"=> "C","110m2"=>"C","140m2"=>"C","+140m2"=>"C" ],
	"Fioul"=>["85m2"=> "D","110m2"=>"D","140m2"=>"D","+140m2"=>"D" ],
	"PAC"=>["85m2"=> "B","110m2"=>"B","140m2"=>"C","+140m2"=>"C" ],
	"Bois"=>["85m2"=> "B","110m2"=>"B","140m2"=>"C","+140m2"=>"C" ],
	"Charbon"=>["85m2"=> "D","110m2"=>"D","140m2"=>"D","+140m2"=>"D" ]];
	$Sous_sols=["Electrique"=>["85m2"=> "E","110m2"=>"E","140m2"=>"F","+140m2"=>"F" ],
	"Gaz"=>["85m2"=> "D","110m2"=>"D","140m2"=>"D","+140m2"=>"D" ],
	"Fioul"=>["85m2"=> "D","110m2"=>"D","140m2"=>"D","+140m2"=>"D" ],
	"PAC"=>["85m2"=> "C","110m2"=>"C","140m2"=>"D","+140m2"=>"D" ],
	"Bois"=>["85m2"=> "C","110m2"=>"C","140m2"=>"D","+140m2"=>"D" ],
	"Charbon"=>["85m2"=> "D","110m2"=>"D","140m2"=>"D","+140m2"=>"D" ]];


	$Comble_Sous_sols=["Electrique"=>["85m2"=> "D","110m2"=>"D","140m2"=>"D","+140m2"=>"D" ],
	"Gaz"=>["85m2"=> "C","110m2"=>"C","140m2"=>"C","+140m2"=>"C" ],
	"Fioul"=>["85m2"=> "C","110m2"=>"C","140m2"=>"C","+140m2"=>"C" ],
	"PAC"=>["85m2"=> "B","110m2"=>"B","140m2"=>"C","+140m2"=>"C" ],
	"Bois"=>["85m2"=> "B","110m2"=>"B","140m2"=>"C","+140m2"=>"C" ],
	"Charbon"=>["85m2"=> "D","110m2"=>"D","140m2"=>"D","+140m2"=>"D" ]];
	$Murs_e_Sous_sols=["Electrique"=>["85m2"=> "D","110m2"=>"D","140m2"=>"D","+140m2"=>"D" ],
	"Gaz"=>["85m2"=> "C","110m2"=>"C","140m2"=>"C","+140m2"=>"C" ],
	"Fioul"=>["85m2"=> "C","110m2"=>"C","140m2"=>"C","+140m2"=>"C" ],
	"PAC"=>["85m2"=> "B","110m2"=>"B","140m2"=>"C","+140m2"=>"C" ],
	"Bois"=>["85m2"=> "B","110m2"=>"B","140m2"=>"C","+140m2"=>"C" ],
	"Charbon"=>["85m2"=> "D","110m2"=>"D","140m2"=>"D","+140m2"=>"D" ]];
	$Murs_i_Sous_sols=["Electrique"=>["85m2"=> "D","110m2"=>"D","140m2"=>"E","+140m2"=>"E" ],
	"Gaz"=>["85m2"=> "C","110m2"=>"C","140m2"=>"C","+140m2"=>"C" ],
	"Fioul"=>["85m2"=> "D","110m2"=>"D","140m2"=>"D","+140m2"=>"D" ],
	"PAC"=>["85m2"=> "B","110m2"=>"B","140m2"=>"C","+140m2"=>"C" ],
	"Bois"=>["85m2"=> "B","110m2"=>"B","140m2"=>"C","+140m2"=>"C" ],
	"Charbon"=>["85m2"=> "D","110m2"=>"D","140m2"=>"D","+140m2"=>"D" ]];
	$Combles_Murs_i=["Electrique"=>["85m2"=> "C","110m2"=>"C","140m2"=>"D","+140m2"=>"D" ],
	"Gaz"=>["85m2"=> "B","110m2"=>"B","140m2"=>"B","+140m2"=>"B" ],
	"Fioul"=>["85m2"=> "C","110m2"=>"C","140m2"=>"C","+140m2"=>"C" ],
	"PAC"=>["85m2"=> "B","110m2"=>"B","140m2"=>"B","+140m2"=>"B" ],
	"Bois"=>["85m2"=> "B","110m2"=>"B","140m2"=>"B","+140m2"=>"B" ],
	"Charbon"=>["85m2"=> "C","110m2"=>"C","140m2"=>"C","+140m2"=>"C" ]];
	$Combles_Murs_e=["Electrique"=>["85m2"=> "C","110m2"=>"C","140m2"=>"D","+140m2"=>"D" ],
	"Gaz"=>["85m2"=> "B","110m2"=>"B","140m2"=>"B","+140m2"=>"B" ],
	"Fioul"=>["85m2"=> "C","110m2"=>"C","140m2"=>"C","+140m2"=>"C" ],
	"PAC"=>["85m2"=> "B","110m2"=>"B","140m2"=>"B","+140m2"=>"B" ],
	"Bois"=>["85m2"=> "B","110m2"=>"B","140m2"=>"B","+140m2"=>"B" ],
	"Charbon"=>["85m2"=> "C","110m2"=>"C","140m2"=>"C","+140m2"=>"C" ]];


	$Combles_Murs_e_Sous_sols=["Electrique"=>["85m2"=> "C","110m2"=>"C","140m2"=>"C","+140m2"=>"C" ],
	"Gaz"=>["85m2"=> "B","110m2"=>"B","140m2"=>"B","+140m2"=>"B" ],
	"Fioul"=>["85m2"=> "C","110m2"=>"C","140m2"=>"C","+140m2"=>"C" ],
	"PAC"=>["85m2"=> "B","110m2"=>"B","140m2"=>"B","+140m2"=>"B" ],
	"Bois"=>["85m2"=> "B","110m2"=>"B","140m2"=>"B","+140m2"=>"B" ],
	"Charbon"=>["85m2"=> "C","110m2"=>"C","140m2"=>"C","+140m2"=>"C" ]];
	$Combles_Murs_i_Sous_sols=["Electrique"=>["85m2"=> "C","110m2"=>"C","140m2"=>"D","+140m2"=>"D" ],
	"Gaz"=>["85m2"=> "B","110m2"=>"B","140m2"=>"B","+140m2"=>"B" ],
	"Fioul"=>["85m2"=> "C","110m2"=>"C","140m2"=>"C","+140m2"=>"C" ],
	"PAC"=>["85m2"=> "B","110m2"=>"B","140m2"=>"B","+140m2"=>"B" ],
	"Bois"=>["85m2"=> "B","110m2"=>"B","140m2"=>"B","+140m2"=>"B" ],
	"Charbon"=>["85m2"=> "C","110m2"=>"C","140m2"=>"C","+140m2"=>"C" ]];


	$surface_range=surface_getter_diag($surface);

	if ($parcours=="PAC") {
		return $PAC[$chauffage][$surface_range];
	}
	elseif ($parcours=="Chaudiere"){
		return $Chaudiere[$chauffage][$surface_range];
	}
	elseif ($parcours=="Insert"){
		return $Insert[$chauffage][$surface_range];
	}

	elseif ($parcours=="Combles"){
		return $Combles[$chauffage][$surface_range];
	}
	elseif ($parcours=="Murs_e"){
		return $Murs_e[$chauffage][$surface_range];
	}
	elseif ($parcours=="Murs_i"){
		return $Murs_i[$chauffage][$surface_range];
	}
	elseif ($parcours=="Sous_sols"){
		return $Sous_sols[$chauffage][$surface_range];
	}

	elseif ($parcours=="Combles+Murs_e"){
		return $Combles_Murs_e[$chauffage][$surface_range];
	}
	elseif ($parcours=="Combles+Murs_i"){
		return $Combles_Murs_i[$chauffage][$surface_range];
	}
	elseif ($parcours=="Murs_i+Sous_sols"){
		return $Murs_i_Sous_sols[$chauffage][$surface_range];
	}
	elseif ($parcours=="Murs_e+Sous_sols"){
		return $Murs_e_Sous_sols[$chauffage][$surface_range];
	}
	elseif ($parcours=="Combles+Sous_sols"){
		return $Comble_Sous_sols[$chauffage][$surface_range];
	}

	elseif ($parcours=="Combles+Murs_e+Sous_sols"){
		return $Combles_Murs_e_Sous_sols[$chauffage][$surface_range];
	}
	elseif ($parcours=="Combles+Murs_i+Sous_sols"){
		return $Combles_Murs_i_Sous_sols[$chauffage][$surface_range];
	}
	else return "Erreur";

}

function surface_getter_diag($surface){
	if ($surface<85){
		return "85m2";
	}
	elseif ($surface<110){
		return "110m2";
	}
	elseif ($surface<140){
		return "140m2";
	}
	elseif ($surface>=140){
		return "+140m2";
	}
	else return "Erreur de surface";
}

