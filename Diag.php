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


	$surface_range=surface_getter_diag($surface);

    // echo "Chauffage_actuel  " .$chauffage_actuel;
    // echo "</br>";	
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

