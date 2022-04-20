<?php

function diag_display($att){ 


	if ($att=="A") {
		return "<div class=diagletter style='color:#22984E;font-size:30px;font-weight: bold;'>".$att."</div>";
	}
	elseif ($att=="B"){
		return "<div class=diagletter style='color:#a1c250;font-size:30px;font-weight: bold;'>".$att."</div>";
	}
	elseif ($att=="C"){
		return "<div class=diagletter style='color:#E6D71E;font-size:30px;font-weight: bold;'>".$att."</div>";
	}
	elseif ($att=="D"){
		return "<div class=diagletter style='color:#FEE340;font-size:30px;font-weight: bold;'>".$att."</div>";
	}
	elseif ($att=="E"){
		return "<div class=diagletter style='color:#EFA32F;font-size:30px;font-weight: bold;'>".$att."</div>";
	}
	elseif ($att=="F"){
		return "<div class=diagletter style='color:#E77D3A;font-size:30px;font-weight: bold;'>".$att."</div>";
	}
	elseif ($att=="G"){
		return "<div class=diagletter style='color:#DD353A;font-size:30px;font-weight: bold;'>".$att."</div>";
	}
	elseif ($att=="Je ne sais pas"){
		return "Je ne sais pas";
	}
	elseif ($att=="Non Estimable"){
		return "Non Estimable";
	}
	else return "Erreur";

}
