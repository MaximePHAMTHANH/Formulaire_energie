<?php

function revenus($var){
    if ($var=="Inférieur à 14879€"){
    	return 14878;
      }
    elseif($var=="Entre 14879€ et 30572€"){
        return (14878+30572)/2;
      }
    elseif($var=="Entre 30572€ et 39192€"){
        return (39192+30572)/2;
      }
    else return 39192;
 }
