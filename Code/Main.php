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
include "Parcours_isolation.php";
include "CEE.php";
include "somme_primes.php";
include "image_from_classe.php";
function Economies($atts, $content=null) { 


       //Recuperation des donnes du formulaire chaudiere
       if ($atts[0]=="Chaudiere"){       
       $superficie=get_from_field(103);
       $chauffage_actuel=get_from_field(107);
       $code_postal=get_from_field(112);
       $diag_actuel=get_from_field(117);
       $nb_de_pers=get_from_field(121);
       $revenus=get_from_field(125);
       $parcours="Chaudiere";
       }


       //Recuperation des donnes du formulaire PAC
       elseif ($atts[0]=="PAC"){
       $superficie=get_from_field(222);
       $chauffage_actuel=get_from_field(226);
       $code_postal=get_from_field(230);
       $diag_actuel=get_from_field(235);
       $nb_de_pers=get_from_field(239);
       $revenus=get_from_field(243);
       $parcours="PAC";
       }

       //Recuperation des donnes du formulaire Insert
       elseif ($atts[0]=="Insert"){
       $superficie=get_from_field(266);
       $chauffage_actuel=get_from_field(270);
       $code_postal=get_from_field(274);
       $diag_actuel=get_from_field(279);
       $nb_de_pers=get_from_field(283);
       $revenus=get_from_field(287);
       $parcours="Insert";
       }

       //Recuperation des donnes du formulaire Combles
       elseif ($atts[0]=="Combles"){
       $superficie=get_from_field(49);
       $chauffage_actuel=get_from_field(91);
       $code_postal=get_from_field(58);
       $diag_actuel=get_from_field(81);
       $nb_de_pers=get_from_field(66);
       $revenus=get_from_field(93);
       $surface_combles=get_from_field(191);
       $surface_sous_sols=get_from_field(196);
       $hauteur_vide_sanitaire=get_from_field(200);
       $superficie_murs=get_from_field(204);
       $int_or_ext=get_from_field(206);
       $parcours=parcours_choice("Combles",$surface_combles,$surface_sous_sols,$hauteur_vide_sanitaire,$superficie_murs,$int_or_ext);
       }

       //Recuperation des donnes du formulaire Murs
       elseif ($atts[0]=="Murs"){
       $superficie=get_from_field(530);
       $chauffage_actuel=get_from_field(534);
       $code_postal=get_from_field(563);
       $diag_actuel=get_from_field(568);
       $nb_de_pers=get_from_field(572);
       $revenus=get_from_field(576);       
       $surface_combles=get_from_field(542);
       $surface_sous_sols=get_from_field(551);
       $hauteur_vide_sanitaire=get_from_field(555);
       $superficie_murs=get_from_field(559);
       $int_or_ext=get_from_field(547);
       $parcours=parcours_choice("Murs",$surface_combles,$surface_sous_sols,$hauteur_vide_sanitaire,$superficie_murs,$int_or_ext);
       }

       //Recuperation des donnes du formulaire Sous-sols
       elseif ($atts[0]=="Sous_sols"){
       $superficie=get_from_field(595);
       $chauffage_actuel=get_from_field(599);
       $code_postal=get_from_field(628);
       $diag_actuel=get_from_field(633);
       $nb_de_pers=get_from_field(637);
       $revenus=get_from_field(641);
       $surface_combles=get_from_field(607);
       $surface_sous_sols=get_from_field(616);
       $hauteur_vide_sanitaire=get_from_field(620);
       $superficie_murs=get_from_field(624);
       $int_or_ext=get_from_field(612);
       $parcours=parcours_choice("Sous_sols",$surface_combles,$surface_sous_sols,$hauteur_vide_sanitaire,$superficie_murs,$int_or_ext);
       }



       //Deprecated $revenus=FrmProEntriesController::get_field_value_shortcode(array('field_id' => 125, 'user_id' => 'current'));
       
       else return "Erreur de definition du shortcode";


       //Calcul des variables
       $departement=departement_from_codepostal($code_postal);
       $revenus_moyen=revenus($revenus);
       $couleur=Couleur($departement,$nb_de_pers,$revenus_moyen);
       $prime=prime_renov($parcours,$couleur,$superficie);
       $diag_actuel_string=diag_display($diag_actuel);
       $nv_diag=Diag($chauffage_actuel,$superficie,$parcours);
       $nv_diag_string=diag_display($nv_diag);
       $gains=gains($chauffage_actuel,$superficie,$parcours);
       $CEE=CEE_calc($parcours);
       $prime_totale=somme_prime($prime,$CEE);
       $image_classe=image_from_classes($diag_actuel,$nv_diag);


       //Affichage des resultats
       if ($atts[1]=="Prime"){
              if ($prime_totale=="Non Estimable"){
                     return "Non Estimable";}
              elseif ($prime_totale=="Erreur"){
                     return "Erreur";}
              else return "<div class=money style='font-size:60px;font-weight: bold;color:#3DAE2B;'>".$prime_totale."€</div>";}
       elseif ($atts[1]=="CEE"){
              if ($CEE=="Non Estimable"){
                     return "Non Estimable";}
              elseif ($CEE=="Erreur"){
                     return "Erreur";}
              else return "<div class=money style='font-size:60px;font-weight: bold;color:#3DAE2B;'>".$CEE."€</div>";}
       elseif ($atts[1]=="Classe_actuelle"){
              return $diag_actuel_string;}
       elseif ($atts[1]=="Nouvelle_classe"){
              return "<img src='../wp-content/plugins/Economies_v1.1/classes_energetiques/".$image_classe.".png'>";}  
       elseif ($atts[1]=="Economies"){
              if ($gains=="Non Estimable"){
                     return "Non Estimable";}
              elseif ($gains=="Erreur"){
                     return "<h5> Oups ! Une erreur s'est glissé dans le formulaire</h5>";}
              elseif (is_null($gains)) {
                     return "<h5> Oups ! Une erreur s'est glissé dans le formulaire</h5>";}                     
              else return "<div class=money style='font-size:60px;font-weight: bold;color:#3DAE2B'>".$gains."€/an</div>";}                            
       else return "Erreur de declaration du shortcode";
}


add_shortcode('economies', 'economies');  

?>