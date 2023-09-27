<?php 
    //Authority for URI
    $authority="http://test.eliajimmy.net";

    //Import module Curl
    require_once('composant/curl.php'); 

    if (isSet($_GET['demande']))
        {
            $demande=$_GET['demande'];

            if($demande=='ajout_un')
                {
                    require_once('composant/ajout_un/model/ajout_un.php');  
                }
            else  if($demande=='ajout_plusieurs')
                {
                    require_once('composant/ajout_plusieurs/model/ajout_plusieurs.php');  
                }
            else  if($demande=='ajouter_un_avec_dependance')
                {
                    require_once('composant/ajout_un_avec_dependance/model/ajout_un.php');  
                }
            else  if($demande=='modification_un')
                {
                    require_once('composant/modification_un/model/modification_un.php');  
                }
            else  if($demande=='suppression_un')
                {
                    require_once('composant/suppression_un/model/suppression.php');  
                }

            else  if($demande=='recuperation_avec_dependance')
                {
                    require_once('composant/recuperation_plusieurs_avec_dependance/model/recuperation_avec_dependance.php');  
                }

            else  if($demande=='modification_plusieurs')
                {
                    require_once('composant/modification_plusieurs/model/modification_plusieurs.php');  
                }
            else  if($demande=='suppression_plusieurs')
                {
                    require_once('composant/suppression_plusieurs/model/suppression_plusieurs.php');  
                }
            else  if($demande=='import_excel')
                {
                    require_once('composant/import_excel/model/import_excel.php');  
                }
            else  if($demande=='import_image')
                {
                    require_once('composant/import_image/model/import_image.php');  
                }
        }
    else if (isSet($_GET['page']))
        {
            $page=$_GET['page'];
           
            if($page=='ajouter_application')
                {
                    require_once('composant/ajout_un/view/demande_ajout.php');
                }
            else  if($page=='modifier_application')
                {
                    require_once('composant/ajout_plusieurs/view/nombre_ligne.php'); 
                }
            else if($page=='supprimer_application')
                {
                    require_once('composant/ajout_un_avec_dependance/model/recuperer_liste.php');
                }
            else  if($page=='recuperes_applications')
                {
                    require_once('composant/ajout_plusieurs/view/demande_ajout.php'); 
                } 
            else  if($page=='recuperer_application')
                {
                    require_once('composant/ajout_un_avec_dependance/model/recuperer_liste.php');
                }
            else  if($page=='ajouter_composant')
                {
                    require_once('composant/ajout_un_avec_dependance/model/recuperer_liste.php');
                }
            else  if($page=='modifier_composant')
                {
                    require_once('composant/ajout_plusieurs/view/nombre_ligne.php'); 
                }
            else if($page=='supprimer_composant')
                {
                    require_once('composant/ajout_un_avec_dependance/model/recuperer_liste.php');
                }
            else  if($page=='recuperes_composants')
                {
                    require_once('composant/ajout_plusieurs/view/demande_ajout.php'); 
                } 
            else  if($page=='recuperer_composant')
                {

                }
            else  if($page=='ajouter_service')
                {
                    require_once('composant/ajout_un_avec_dependance/model/recuperer_liste.php');
                }
            else  if($page=='modifier_service')
                {
                    require_once('composant/ajout_plusieurs/view/nombre_ligne.php'); 
                }
            else if($page=='supprimer_service')
                {
                    require_once('composant/ajout_un_avec_dependance/model/recuperer_liste.php');
                }
            else  if($page=='recuperes_services')
                {
                    require_once('composant/ajout_plusieurs/view/demande_ajout.php'); 
                } 
            else  if($page=='recuperer_service')
                {
                } 
            else  if($page=='ajouter_donnee_echange')
                {
                    require_once('composant/ajout_un_avec_dependance/model/recuperer_liste.php');
                }
            else  if($page=='modifier_donnee_echange')
                {
                    require_once('composant/ajout_plusieurs/view/nombre_ligne.php'); 
                }
            else if($page=='supprimer_donnee_echange')
                {
                    require_once('composant/ajout_un_avec_dependance/model/recuperer_liste.php');
                }
            else  if($page=='recuperes_donnee_echanges')
                {
                    require_once('composant/ajout_plusieurs/view/demande_ajout.php'); 
                } 
            else  if($page=='recuperer_donnee_echange')
                {
                    require_once('composant/recuperation_plusieurs/model/recuperer_plusieurs.php'); 
                }
            else  if($page=='ajouter_donnee_persistante')
                {
                    require_once('composant/ajout_un_avec_dependance/model/recuperer_liste.php');
                }
            else  if($page=='modifier_donnee_persistante')
                {
                    require_once('composant/ajout_plusieurs/view/nombre_ligne.php'); 
                }
            else if($page=='supprimer_donnee_persistante')
                {
                    require_once('composant/ajout_un_avec_dependance/model/recuperer_liste.php');
                }
            else  if($page=='recuperes_donnee_persistantes')
                {
                    require_once('composant/ajout_plusieurs/view/demande_ajout.php'); 
                } 
            else  if($page=='recuperer_donnee_persistante')
                {
                    require_once('composant/recuperation_plusieurs/model/recuperer_plusieurs.php'); 
                }

            else  if($page=='ajouter_api')
                {
                    require_once('composant/ajout_un_avec_dependance/model/recuperer_liste.php');
                }
            else  if($page=='modifier_api')
                {
                    require_once('composant/ajout_plusieurs/view/nombre_ligne.php'); 
                }
            else if($page=='supprimer_api')
                {
                    require_once('composant/ajout_un_avec_dependance/model/recuperer_liste.php');
                }
            else  if($page=='recuperes_apis')
                {
                    require_once('composant/ajout_plusieurs/view/demande_ajout.php'); 
                } 
            else  if($page=='recuperer_api')
                {
                    require_once('composant/recuperation_plusieurs/model/recuperer_plusieurs.php'); 
                }


        }
    else   
        {
            //require_once('composant/dashboard/ihm/index.php'); 
        }
      
      
?>