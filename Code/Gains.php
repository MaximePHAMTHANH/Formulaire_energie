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
