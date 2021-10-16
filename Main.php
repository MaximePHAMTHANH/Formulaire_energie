<style><?php include "Economies.css"; ?></style>

<?php

include "Departement_from_codepostal.php";
include "Couleur.php";
include "Revenus.php";
include "Prime_renov.php";
include "Diag_display.php";
include "Diag.php";
include "Gains.php";
include "Get_from_field.php";

function Economies($atts, $content=null) { 


       //Recuperation des donnes du formulaire chaudiere
       if ($atts[0]=="Chaudiere"){       
       $superficie=get_from_field(103);
       $chauffage_actuel=get_from_field(107);
       $code_postal=get_from_field(112);
       $diag_actuel=get_from_field(117);
       $nb_de_pers=get_from_field(121);
       $revenus=get_from_field(125);
       }


       //Recuperation des donnes du formulaire PAC
       elseif ($atts[0]=="PAC"){
       $superficie=get_from_field(222);
       $chauffage_actuel=get_from_field(226);
       $code_postal=get_from_field(230);
       $diag_actuel=get_from_field(235);
       $nb_de_pers=get_from_field(239);
       $revenus=get_from_field(243);
       }

       //Recuperation des donnes du formulaire Insert
       elseif ($atts[0]=="Insert"){
       $superficie=get_from_field(266);
       $chauffage_actuel=get_from_field(270);
       $code_postal=get_from_field(274);
       $diag_actuel=get_from_field(279);
       $nb_de_pers=get_from_field(283);
       $revenus=get_from_field(287);
       //Deprecated $revenus=FrmProEntriesController::get_field_value_shortcode(array('field_id' => 125, 'user_id' => 'current'));
       }
       else return "Erreur de definition du shortcode";


       //Calcul des variables
       $departement=departement_from_codepostal($code_postal);
       $revenus_moyen=revenus($revenus);
       $couleur=Couleur($departement,$nb_de_pers,$revenus_moyen);
       $prime=prime_renov($atts[0],$couleur,$superficie);
       $diag_actuel_string=diag_display($diag_actuel);
       $nv_diag=Diag($chauffage_actuel,$superficie,$atts[0]);
       $nv_diag_string=diag_display($nv_diag);
       $gains=gains($chauffage_actuel,$superficie,$atts[0]);



       
       // echo "Superficie  " .$superficie. "m2";
       // echo "</br>";
       // echo "Code postal  " .$code_postal;
       // echo "</br>";
       // echo "Departement  " .$departement;
       // echo "</br>";
       // echo "Nb de pers " .$nb_de_pers;
       // echo "</br>";
       // echo "Departement  " .$departement;
       // echo "</br>";
       // echo "Revenus  " .$revenus;
       // echo "</br>";
       // echo "Revenus moyens " .$revenus_moyen;
       // echo "</br>";
       // echo "Couleur  " .$couleur;
       // echo "</br>";
       // echo "Prime  " .$prime;
       // echo "</br>";
       // echo "Diag  " .$diag_actuel;
       // echo "</br>";
       // echo "Chauffage  " .$chauffage_actuel;
       // echo "</br>";
       // echo "Parcours  " .$atts[0];
       // echo "</br>";
       // echo "Gains  " .$gains;
       // echo "</br>";
       // echo "Nv Diag  " .$nv_diag_string;
       // echo "</br>";


       //Affichage des resultats
       if ($atts[1]=="Prime"){
              if ($prime=="Non Estimable"){
                     return "Non Estimable";}
              else return "<div class=money style='font-size:40px;font-weight: bold;color:#3DAE2B;'>".$prime."€</div>";}
       elseif ($atts[1]=="Classe_actuelle"){
              return $diag_actuel_string;}
       elseif ($atts[1]=="Nouvelle_classe"){
              return $nv_diag_string;}  
       elseif ($atts[1]=="Economies"){
              if ($gains=="Non Estimable"){
                     return "Non Estimable";}
              elseif ($gains=="Erreur"){
                     return "Oups ! Une erreur s'est glissé dans le formulaire";}
              elseif (is_null($gains)) {
                     return "Oups ! Une erreur s'est glissé dans le formulaire";}                     
              else return "<div class=money style='font-size:40px;font-weight: bold;color:#3DAE2B'>".$gains."€/an</div>";}                            
       else return "Erreur de declaration du shortcode";
}


add_shortcode('economies', 'economies');  

?>