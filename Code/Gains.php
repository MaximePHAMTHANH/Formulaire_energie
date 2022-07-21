<?php

function gains($chauffage,$surface,$parcours){ 

	// Tableau des primes
	$PAC=["Electrique"=>["85m2"=> 1200,"110m2"=>1740,"140m2"=>2040,"+140m2"=>2400 ],
	"Gaz"=>["85m2"=> 450,"110m2"=>540,"140m2"=>690,"+140m2"=>840 ],
	"Fioul"=>["85m2"=> 1296,"110m2"=>1620,"140m2"=>1944,"+140m2"=>2430 ],
	"PAC"=>["85m2"=> "Non Estimable","110m2"=>"Non Estimable","140m2"=>"Non Estimable","+140m2"=>"Non Estimable" ],
	"Bois"=>["85m2"=> "Non Estimable","110m2"=>"Non Estimable","140m2"=>"Non Estimable","+140m2"=>"Non Estimable" ],
	"Charbon"=>["85m2"=> "Non Estimable","110m2"=>"Non Estimable","140m2"=>"Non Estimable","+140m2"=>"Non Estimable" ]];

	$Chaudiere=["Electrique"=>["85m2"=> 600,"110m2"=>870,"140m2"=>1020,"+140m2"=>1200 ],
	"Gaz"=>["85m2"=> 225,"110m2"=>270,"140m2"=>345,"+140m2"=>420 ],
	"Fioul"=>["85m2"=> 648,"110m2"=>810,"140m2"=>972,"+140m2"=>1215 ],
	"PAC"=>["85m2"=> "Non Estimable","110m2"=>"Non Estimable","140m2"=>"Non Estimable","+140m2"=>"Non Estimable" ],
	"Bois"=>["85m2"=> "Non Estimable","110m2"=>"Non Estimable","140m2"=>"Non Estimable","+140m2"=>"Non Estimable" ],
	"Charbon"=>["85m2"=> "Non Estimable","110m2"=>"Non Estimable","140m2"=>"Non Estimable","+140m2"=>"Non Estimable" ]];

	$Insert=["Electrique"=>["85m2"=> 400,"110m2"=>580,"140m2"=>680,"+140m2"=>800 ],
	"Gaz"=>["85m2"=> 150,"110m2"=>180,"140m2"=>230,"+140m2"=>280 ],
	"Fioul"=>["85m2"=> 432,"110m2"=>600,"140m2"=>648,"+140m2"=>810 ],
	"PAC"=>["85m2"=> "Non Estimable","110m2"=>"Non Estimable","140m2"=>"Non Estimable","+140m2"=>"Non Estimable" ],
	"Bois"=>["85m2"=> "Non Estimable","110m2"=>"Non Estimable","140m2"=>"Non Estimable","+140m2"=>"Non Estimable" ],
	"Charbon"=>["85m2"=> "Non Estimable","110m2"=>"Non Estimable","140m2"=>"Non Estimable","+140m2"=>"Non Estimable" ]];

	$Combles=["Electrique"=>["85m2"=> 600,"110m2"=>870,"140m2"=>1020,"+140m2"=>1200 ],
	"Gaz"=>["85m2"=> 225,"110m2"=>270,"140m2"=>345,"+140m2"=>420 ],
	"Fioul"=>["85m2"=> 648,"110m2"=>810,"140m2"=>972,"+140m2"=>1215 ],
	"PAC"=>["85m2"=> 238,"110m2"=>244,"140m2"=>246,"+140m2"=>249 ],
	"Bois"=>["85m2"=> 252,"110m2"=>306,"140m2"=>360,"+140m2"=>414 ],
	"Charbon"=>["85m2"=> 306,"110m2"=>360,"140m2"=>414,"+140m2"=>450 ]];

	$Murs_e=["Electrique"=>["85m2"=> 600,"110m2"=>870,"140m2"=>1020,"+140m2"=>1200 ],
	"Gaz"=>["85m2"=> 225,"110m2"=>270,"140m2"=>345,"+140m2"=>420 ],
	"Fioul"=>["85m2"=> 648,"110m2"=>810,"140m2"=>972,"+140m2"=>1215 ],
	"PAC"=>["85m2"=> 238,"110m2"=>244,"140m2"=>246,"+140m2"=>249 ],
	"Bois"=>["85m2"=> 252,"110m2"=>306,"140m2"=>360,"+140m2"=>414 ],
	"Charbon"=>["85m2"=> 306,"110m2"=>360,"140m2"=>414,"+140m2"=>450 ]];

	$Murs_i=["Electrique"=>["85m2"=> 300,"110m2"=>435,"140m2"=>510,"+140m2"=>600 ],
	"Gaz"=>["85m2"=> 113,"110m2"=>135,"140m2"=>173,"+140m2"=>210 ],
	"Fioul"=>["85m2"=> 324,"110m2"=>415,"140m2"=>486,"+140m2"=>608 ],
	"PAC"=>["85m2"=> 119,"110m2"=>122,"140m2"=>123,"+140m2"=>124 ],
	"Bois"=>["85m2"=> 126,"110m2"=>153,"140m2"=>180,"+140m2"=>207 ],
	"Charbon"=>["85m2"=> 153,"110m2"=>180,"140m2"=>207,"+140m2"=>225 ]];

	$Sous_sols=["Electrique"=>["85m2"=> 300,"110m2"=>435,"140m2"=>510,"+140m2"=>600 ],
	"Gaz"=>["85m2"=> 113,"110m2"=>135,"140m2"=>173,"+140m2"=>210 ],
	"Fioul"=>["85m2"=> 324,"110m2"=>415,"140m2"=>486,"+140m2"=>608 ],
	"PAC"=>["85m2"=> 119,"110m2"=>122,"140m2"=>123,"+140m2"=>124 ],
	"Bois"=>["85m2"=> 126,"110m2"=>153,"140m2"=>180,"+140m2"=>207 ],
	"Charbon"=>["85m2"=> 153,"110m2"=>180,"140m2"=>207,"+140m2"=>225 ]];
  
	$surface_range=surface_getter($surface);


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
		return $Combles[$chauffage][$surface_range]+$Murs_e[$chauffage][$surface_range];
	}
	elseif ($parcours=="Combles+Murs_i"){
		return $Combles[$chauffage][$surface_range]+$Murs_i[$chauffage][$surface_range];
	}
	elseif ($parcours=="Murs_i+Sous_sols"){
		return $Murs_i[$chauffage][$surface_range]+$Sous_sols[$chauffage][$surface_range];
	}
	elseif ($parcours=="Murs_e+Sous_sols"){
		return $Murs_e[$chauffage][$surface_range]+$Sous_sols[$chauffage][$surface_range];
	}
	elseif ($parcours=="Combles+Sous_sols"){
		return $Combles[$chauffage][$surface_range]+$Sous_sols[$chauffage][$surface_range];
	}
	elseif ($parcours=="Combles+Murs_e+Sous_sols"){
		return $Combles[$chauffage][$surface_range]+$Murs_e[$chauffage][$surface_range]+$Sous_sols[$chauffage][$surface_range];
	}
	elseif ($parcours=="Combles+Murs_i+Sous_sols"){
		return $Combles[$chauffage][$surface_range]+$Murs_i[$chauffage][$surface_range]+$Sous_sols[$chauffage][$surface_range];
	}
	else return "Erreur";

}

function surface_getter($surface){
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
