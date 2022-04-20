<?php

function Couleur($dep,$nb_de_pers,$revenu){ 

	// Tableau des couleurs en fonction des revenus
	$Revenus=["IDF"=>[[20593,25068,38184],[30225,36792,56130],[36297,44188,67585],[42381,51597,79041],[48488,59026,90496]],"HIDF"=>[[14879,19074,29148],[21760,27896,42848],[26170,33547,51592],[30572,39192,60336],[34993,44860,69081]]];

	//departement en IDF ?
	$is_IDF=Is_IDF($dep);

	//attribution de la couleur
	if ($revenu<=$Revenus[$is_IDF][$nb_de_pers-1][0]){ 
		return "Bleu";}
	elseif ($revenu<=$Revenus[$is_IDF][$nb_de_pers-1][1]){ 
		return "Jaune";}
	elseif ($revenu<=$Revenus[$is_IDF][$nb_de_pers-1][2]){ 
		return "Violet";}	
	elseif ($revenu>$Revenus[$is_IDF][$nb_de_pers-1][2]){ 
		return "Rose";}			
	else return "Erreur";
}

function Is_IDF($dep){ 
	$Dep_IDF=[75,77,78,91,92,93,94];
	if (in_array($dep, $Dep_IDF)){
	return "IDF"; }
	else return "HIDF";
}
