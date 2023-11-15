<?php 
    //Authority for URI
    $authority="http://develop.eliajimmy.net/referentiel";
    $authority2="http://api.eliajimmy.net";
    //Import module Curl
    require_once('composant/curl.php'); 

    if (isSet($_GET['demande']))
        {
            $demande=$_GET['demande'];

            if($demande=='ajout_application')
                {
                    require_once('composant/application/ajouter/model/ajout_un.php');  
                }
            else  if($demande=='ajouter_un_composant')
                {
                    require_once('composant/composant/ajouter/model/ajout_un.php');  
                }

            else  if($demande=='ajouter_un_unite_organisation')
                {
                    require_once('composant/unite_organisation/ajouter/model/ajout_un.php');  
                }


                else  if($demande=='modification_un_composant_processus')
                {
                    require_once('composant/composant_processus/modifier/model/modification_un.php');  
                }


            else  if($demande=='ajouter_un_tde')
                {
                    require_once('composant/donnee_echange/ajouter/model/ajout_un.php');  
                }
            else  if($demande=='ajouter_un_donnee_persistante')
                {
                    require_once('composant/donnee_persistante/ajouter/model/ajout_un.php');  
                }

            else  if($demande=='ajouter_entite')
                {
                    require_once('composant/entite/ajouter/model/ajout_un.php');  
                }

        else  if($demande=='ajouter_un_planification')
                {
                    require_once('composant/planification/ajouter/model/ajout_un.php');  
                }
            
            else  if($demande=='ajouter_un_api')
                {
                    require_once('composant/api/ajouter/model/ajout_un.php');  
                }

                else  if($demande=='ajouter_un_role')
                {
                    require_once('composant/role/ajouter/model/ajout_un.php');  
                }

                else  if($demande=='ajouter_un_acteur')
                {
                    require_once('composant/acteur/ajouter/model/ajout_un.php');  
                }

                else  if($demande=='ajouter_un_processus')
                {
                    require_once('composant/processus/ajouter/model/ajout_un.php');  
                }

                else  if($demande=='ajouter_un_composant_processus')
                {
                    require_once('composant/composant_processus/ajouter/model/ajout_un.php');  
                }

                else  if($demande=='modification_un_acteur')
                {
                    require_once('composant/acteur/modifier/model/modification_un.php');  
                }
            else  if($demande=='ajout_plusieurs')
                {
                    require_once('composant/ajout_plusieurs/model/ajout_plusieurs.php');  
                }
            else  if($demande=='ajouter_un_avec_dependance')
                {
                    require_once('composant/ajout_un_avec_dependance/model/ajout_un.php');  
                }
            else  if($demande=='modification_app')
                {
                    require_once('composant/application/modifier/model/modification_un.php');  
                }

             else  if($demande=='modification_un_api')
                {
                    require_once('composant/api/modifier/model/modification_un.php');  
                }


            else  if($demande=='modification_un_unite_organisation')
                {
                    require_once('composant/unite_organisation/modifier/model/modification_un.php');  
                }

            else  if($demande=='modification_entite')
                {
                    require_once('composant/entite/modifier/model/modification_un.php');  
                }
            else  if($demande=='recuperation_avec_entite_composant')
                {
                    require_once('composant\entite\recuperation_plusieurs_avec_composant\model\recuperation_avec_dependance.php');  
                }

            else  if($demande=='recuperation_avec_entite_application')
                {
                    require_once('composant\entite\recuperation_plusieurs_avec_application\model\recuperation_avec_dependance.php');  
                }

            else  if($demande=='recuperation_avec_organisation_nom')
                {
                    require_once('composant\unite_organisation\recuperation_plusieurs_avec_organisation\model\recuperation_avec_dependance.php');  
                }

            else  if($demande=='recuperation_avec_application_unite_organisation')
                {
                    require_once('composant\unite_organisation\recuperation_plusieurs_avec_application\model\recuperation_avec_dependance.php');  
                }

            else  if($demande=='modification_un_composant')
                {
                    require_once('composant/composant/modifier/model/modification_un.php');  
                }

            else  if($demande=='recuperation_avec_couche')
                {
                    require_once('composant\composant\recuperation_plusieurs_avec_couche\model\recuperation_avec_dependance.php');  
                }

            else  if($demande=='recuperation_avec_composant_entite')
                {
                    require_once('composant\composant\recuperation_plusieurs_avec_entite\model\recuperation_avec_dependance.php');  
                }

            else  if($demande=='recuperation_avec_composant_application')
                {
                    require_once('composant\composant\recuperation_plusieurs_avec_application\model\recuperation_avec_dependance.php');  
                }

                
            else  if($demande=='recuperation_avec_dp_application')
                {
                    require_once('composant\donnee_persistante\recuperation_plusieurs_avec_application\model\recuperation_avec_dependance.php');  
                }

                else  if($demande=='recuperation_avec_user')
                {
                    require_once('composant\planification\recuperation_plusieurs_avec_user\model\recuperation_avec_dependance.php');  
                }

                else  if($demande=='recuperation_avec_application_acteur')
                {
                    require_once('composant\acteur\recuperation_plusieurs_avec_application\model\recuperation_avec_dependance.php');  
                }


                else  if($demande=='recuperation_avec_nom_acteur')
                {
                    require_once('composant/acteur/recuperation_plusieurs_avec_acteur/model/recuperation_avec_dependance.php');  
                }


                else  if($demande=='recuperation_avec_application_processus')
                {
                    require_once('composant/processus/recuperation_plusieurs_avec_application/model/recuperation_avec_dependance.php');  
                }


                else  if($demande=='recuperation_avec_statut')
                {
                    require_once('composant\planification\recuperation_plusieurs_avec_statut\model\recuperation_avec_dependance.php');  
                }

            else  if($demande=='recuperation_avec_dp_entite')
                {
                    require_once('composant\donnee_persistante\recuperation_plusieurs_avec_entite\model\recuperation_avec_dependance.php');  
                }

            else  if($demande=='recuperation_avec_plateforme')
                {
                    require_once('composant\composant\recuperation_plusieurs_avec_plateforme\model\recuperation_avec_dependance.php');  
                }

            else  if($demande=='modification_un_donnee_persistance')
                {
                    require_once('composant\donnee_persistante\modifier\model\modification_un.php');  
                }

                else  if($demande=='modification_un_role')
                {
                    require_once('composant\role\modifier\model\modification_un.php');  
                }

                else  if($demande=='modification_un_processus')
                {
                    require_once('composant\processus\modifier\model\modification_un.php');  
                }
              
                else  if($demande=='modification_un_tde')
                {
                    require_once('composant/donnee_echange/modifier/model/modification_un.php');  
                }
                
            else  if($demande=='modification_un_planification')
                {
                    require_once('composant/planification/modifier/model/modification_un.php');  
                }
            else  if($demande=='suppression_application')
                {
                    require_once('composant/application/supprimer/model/suppression.php');  
                }

                else  if($demande=='suppression_un_unite_organisation')
                {
                    require_once('composant/unite_organisation/supprimer/model/suppression.php');  
                }

                else  if($demande=='suppression_un_acteur')
                {
                    require_once('composant/acteur/supprimer/model/suppression.php');  
                }

                else  if($demande=='suppression_un_composant_processus')
                {
                    require_once('composant/composant_processus/supprimer/model/suppression.php');  
                }
                
            else  if($demande=='suppression_un_processus')
                {
                    require_once('composant/processus/supprimer/model/suppression.php');  
                }
            else  if($demande=='suppression_un_composant')
                {
                    require_once('composant/composant/supprimer/model/suppression.php');  
                }
            else  if($demande=='suppression_un_planification')
                {
                    require_once('composant/composant/supprimer/model/suppression.php');  
                }
            else  if($demande=='suppression_un_api')
                {
                    require_once('composant/api/supprimer/model/suppression.php');  
                }
            else  if($demande=='suppression_un_donnee_persistante')
                {
                    require_once('composant/donnee_persistante/supprimer/model/suppression.php');  
                }

                else  if($demande=='suppression_un_role')
                {
                    require_once('composant/role/supprimer/model/suppression.php');  
                }

            else  if($demande=='suppression_un_tde')
                {
                    require_once('composant/donnee_echange/supprimer/model/suppression.php');  
                }
            else  if($demande=='recuperation_avec_tde')
                {
                    require_once('composant\donnee_echange\recuperation_plusieurs_avec_application\model\recuperation_avec_dependance.php');  
                }
                

            else  if($demande=='recuperation_avec_composant_tde')
                {
                    require_once('composant\donnee_echange\recuperation_plusieurs_avec_composant\model\recuperation_avec_dependance.php');  
                }

            else  if($demande=='suppression_entite')
                {
                    require_once('composant/entite/supprimer/model/suppression.php');  
                }

            else  if($demande=='recuperation_avec_composant_api')
                {
                    require_once('composant\api\recuperation_plusieurs_avec_composant\model\recuperation_avec_dependance.php');  
                }

            else  if($demande=='recuperation_avec_application_api')
                {
                    require_once('composant\api\recuperation_plusieurs_avec_application\model\recuperation_avec_dependance.php');  
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
                    require_once('composant/application/ajouter/view/demande_ajout.php');
                }
            else  if($page=='modifier_application')
                {
                    require_once('composant/application/modifier/model/recuperer_plusieurs.php'); 
                }

                else  if($page=='modification_app')
                {
                    require_once('composant/application/modifier/model/recuperer_un.php'); 
                }
 
            else if($page=='supprimer_application')
                {
                    require_once('composant/application/supprimer/model/recuperer_plusieurs.php');
                }
            else if($page=='demande_supprimer_app')
                {
                    require_once('composant/application/supprimer/model/recuperer_un.php');
                }

                else if($page=='demande_supprimer_processus')
                {
                    require_once('composant/processus/supprimer/model/recuperer_un.php');
                }
            else  if($page=='recuperes_applications')
                {
                    require_once('composant/application/recuperer_plusieurs/model/recuperer_plusieurs.php'); 
                } 
            else  if($page=='recuperer_un_application')
                {
                    require_once('composant/application/recuperer/model/recuperer_plusieurs.php');
                }
            else  if($page=='recuperation_application')
                {
                    require_once('composant/application/recuperer/model/recuperer_un.php');
                }
            else  if($page=='ajouter_composant')
                {
                    require_once('composant/composant/ajouter/model/recuperer_liste.php');
                }

             else  if($page=='ajouter_composant_plusieurs')
                {
                    require_once('composant\composant\ajout_plusieurs\view\nombre_ligne.php');
                }

            else  if($page=='ajouter_plusieurs_composant')
                {
                    require_once('composant\composant\ajout_plusieurs\model\recuperer_liste.php');
                }
           
            else  if($page=='recuperes_composants')
                {
                    require_once('composant\composant\recuperer_plusieurs\model\recuperer_plusieurs.php'); 
                }

            else  if($page=='modifier_composant')
                {
                    require_once('composant/composant/modifier/model/recuperer_plusieurs.php'); 
                }

                
            else  if($page=='recuperer_composant')
            {
                require_once('composant/composant/recuperer/model/recuperer_plusieurs.php'); 
            }

            else  if($page=='supprimer_composant')
                {
                    require_once('composant/composant/supprimer/model/recuperer_plusieurs.php'); 
                }

            else  if($page=='supprimer_unite_organisation')
                {
                    require_once('composant/unite_organisation/supprimer/model/recuperer_plusieurs.php'); 
                }
     
                else  if($page=='demande_supprimer_unite_organisation')
                {
                    require_once('composant/unite_organisation/supprimer/model/recuperer_un.php'); 
                }


                else  if($page=='demande_supprimer_role')
                {
                    require_once('composant/role/supprimer/model/recuperer_un.php'); 
                }


            else  if($page=='demande_supprimer_composant')
                {
                    require_once('composant/composant/supprimer/model/recuperer_un.php'); 
                }

            else  if($page=='demande_supprimer_tde')
                {
                    require_once('composant/donnee_echange/supprimer/model/recuperer_un.php'); 
                }
            else  if($page=='supprimer_donnee_echange')
                {
                    require_once('composant\donnee_echange\supprimer\model\recuperer_plusieurs.php'); 
                }
            else  if($page=='recuperer_donnee_echange')
                {
                    require_once('composant/donnee_echange/recuperer/model/recuperer_plusieurs.php'); 
                }
                
                else  if($page=='recuperation_un_composant_processus')
                {
                    require_once('composant\composant_processus\recuperer\model\recuperer_un.php');
                }

            else  if($page=='recuperation_un_tde')
                {
                    require_once('composant\donnee_echange\recuperer\model\recuperer_un.php');
                }
            else  if($page=='modification_composant')
                {
                    require_once('composant\composant\modifier\model\recuperer_liste.php'); 
                }


                else  if($page=='modification_composant_processus')
                {
                    require_once('composant\composant_processus\modifier\model\recuperer_liste.php'); 
                }
                
                else  if($page=='modification_role')
                {
                    require_once('composant\role\modifier\model\recuperer_liste.php'); 
                }
                
            else  if($page=='recuperes_composants_couche')
                {
                    require_once('composant\composant\recuperation_plusieurs_avec_couche\model\recuperer_liste.php'); 
                }

                else  if($page=='recuperes_composants_application')
                {
                    require_once('composant\composant\recuperation_plusieurs_avec_application\model\recuperer_liste.php'); 
                }

                else  if($page=='recuperes_acteur_application')
                {
                    require_once('composant\acteur\recuperation_plusieurs_avec_application\model\recuperer_liste.php'); 
                }

            else  if($page=='recuperes_composants_entite')
                {
                    require_once('composant\composant\recuperation_plusieurs_avec_entite\model\recuperer_liste.php'); 
                }
            else  if($page=='recuperes_donnee_echanges_composant')
                {
                    require_once('composant\donnee_echange\recuperation_plusieurs_avec_composant\model\recuperer_liste.php'); 
                }

            else  if($page=='recuperes_donnee_echanges_application')
                {
                    require_once('composant\donnee_echange\recuperation_plusieurs_avec_application\model\recuperer_liste.php'); 
                }
            else  if($page=='recuperation_un_composant')
                {
                    require_once('composant\composant\recuperer\model\recuperer_un.php');
                }
            else  if($page=='recuperes_composants_plateforme')
                {
                    require_once('composant\composant\recuperation_plusieurs_avec_plateforme\model\recuperer_liste.php'); 
                }
            else  if($page=='ajouter_entite')
                {
                    require_once('composant/entite/ajouter/model/recuperer_liste.php');
                }

                if($page=='modifier_acteur')
                {
                    require_once('composant/acteur/modifier/model/recuperer_plusieurs.php'); 
                }
            else  if($page=='modifier_entite')
                {
                    require_once('composant/entite/modifier/model/recuperer_plusieurs.php'); 
                }

                else  if($page=='modifier_role')
                {
                    require_once('composant/role/modifier/model/recuperer_plusieurs.php'); 
                }


            else  if($page=='modification_entite')
                {
                    require_once('composant/entite/modifier/model/recuperer_un.php'); 
                }

            else  if($page=='modification_acteur')
                {
                    require_once('composant/acteur/modifier/model/recuperer_liste.php'); 
                }
                
            else if($page=='supprimer_entite')
                {
                    require_once('composant/entite/supprimer/model/recuperer_plusieurs.php');
                }

                else if($page=='demande_supprimer_entite')
                {
                    require_once('composant/entite/supprimer/model/recuperer_un.php');
                }

                else if($page=='demande_supprimer_acteur')
                {
                    require_once('composant/acteur/supprimer/model/recuperer_un.php');
                }

            else  if($page=='recuperes_entites')
                {
                    require_once('composant\entite\recuperer_plusieurs\model\recuperer_plusieurs.php'); 
                }
            else  if($page=='recuperes_plusieurs_entite_application')
                {
                    require_once('composant\entite\recuperation_plusieurs_avec_application\model\recuperer_liste.php'); 
                }
                
            else  if($page=='recuperes_plusieurs_entite_composant')
                {
                    require_once('composant\entite\recuperation_plusieurs_avec_composant\model\recuperer_liste.php'); 
                }

            else  if($page=='recuperes_plusieurs_unite_organisation_nom')
                {
                    require_once('composant\unite_organisation\recuperation_plusieurs_avec_organisation\model\recuperer_liste.php'); 
                }
            else  if($page=='recuperes_plusieurs_unite_organisation_application')
                {
                    require_once('composant\unite_organisation\recuperation_plusieurs_avec_application\model\recuperer_liste.php'); 
                }

            else  if($page=='recuperer_un_entite')
                {
                    require_once('composant\entite\recuperer\model\recuperer_plusieurs.php');
                }

                else  if($page=='recuperation_un_unite_organisation')
                {
                    require_once('composant\unite_organisation\recuperer\model\recuperer_un.php');
                }

                else  if($page=='recuperation_un_role')
                {
                    require_once('composant\role\recuperer\model\recuperer_un.php');
                }

                else  if($page=='recuperation_un_acteur')
                {
                    require_once('composant\acteur\recuperer\model\recuperer_un.php');
                }

            else  if($page=='recuperation_entite')
                {
                    require_once('composant\entite\recuperer\model\recuperer_un.php');
                }
           
                else  if($page=='ajouter_acteur')
                {
                    require_once('composant/acteur/ajouter/model/recuperer_liste.php');
                }

            else  if($page=='ajouter_donnee_echange')
                {
                    require_once('composant/donnee_echange/ajouter/model/recuperer_liste.php');
                }
                else  if($page=='modifier_processus')
                {
                    require_once('composant\processus\modifier\model\recuperer_plusieurs.php'); 
                }

            else  if($page=='modifier_donnee_echange')
                {
                    require_once('composant\donnee_echange\modifier\model\recuperer_plusieurs.php'); 
                }
            else  if($page=='modification_tde')
                {
                    require_once('composant\donnee_echange\modifier\model\recuperer_liste.php'); 
                }
                
            else if($page=='supprimer_donnee_echange')
                {
                    require_once('composant/ajout_un_avec_dependance/model/recuperer_liste.php');
                }
            else  if($page=='recuperes_donnee_echanges')
                {
                    require_once('composant\donnee_echange\recuperer_plusieurs\model\recuperer_plusieurs.php'); 
                }  
            else  if($page=='recuperer_donnee_echange')
                {
                    require_once('composant/recuperation_plusieurs/model/recuperer_plusieurs.php'); 
                }

            else  if($page=='ajouter_donnee_persistante')
                {
                    require_once('composant\donnee_persistante\ajouter\model\recuperer_liste.php');
                }

                else  if($page=='ajouter_processus')
                {
                    require_once('composant\processus\ajouter\model\recuperer_liste.php');
                }
            else if($page=='supprimer_donnee_persistante')
                {
                    require_once('composant\donnee_persistante\supprimer\model\recuperer_plusieurs.php');
               
                } 
             else if($page=='demande_supprimer_donnee_persistante')
                {
                    require_once('composant\donnee_persistante\supprimer\model\recuperer_un.php');
               
                } 
            else if($page=='modification_donnee_persistante')
                {
                    require_once('composant\donnee_persistante\modifier\model\recuperer_liste.php');
               
                } 

            else  if($page=='recuperes_donnee_persistantes')
                {
                    require_once('composant\donnee_persistante\recuperer_plusieurs\model\recuperer_plusieurs.php'); 
                }

            else  if($page=='recuperer_donnee_persistante')
                {
                    require_once('composant\donnee_persistante\recuperer\model\recuperer_plusieurs.php'); 
                }
            else  if($page=='recuperation_un_donnee_persistante')
                {
                    require_once('composant\donnee_persistante\recuperer\model\recuperer_un.php'); 
                }

                else  if($page=='recuperation_un_processus')
                {
                    require_once('composant\processus\recuperer\model\recuperer_un.php'); 
                }

                else  if($page=='recuperes_processus_application')
                {
                    require_once('composant\processus\recuperation_plusieurs_avec_application\model\recuperer_liste.php'); 
                }

            else  if($page=='recuperes_donnee_persistantes_application')
                {
                    require_once('composant\donnee_persistante\recuperation_plusieurs_avec_application\model\recuperer_liste.php'); 
                }

                else  if($page=='recuperes_role_application')
                {
                    require_once('composant\role\recuperation_plusieurs_avec_application\model\recuperer_liste.php'); 
                }

            else  if($page=='modifier_donnee_persistante')
                {
                    require_once('composant\donnee_persistante\modifier\model\recuperer_plusieurs.php'); 
                }

            else  if($page=='recuperes_donnee_persistantes_entite')
                {
                    require_once('composant\donnee_persistante\recuperation_plusieurs_avec_entite\model\recuperer_liste.php'); 
                }

                else  if($page=='recuperes_acteur_nom')
                {
                    require_once('composant\acteur\recuperation_plusieurs_avec_acteur\model\recuperer_liste.php'); 
                }

                else  if($page=='ajouter_role')
                {
                    require_once('composant/role/ajouter/model/recuperer_liste.php');
                }


            else  if($page=='ajouter_composant_processus')
                {
                    require_once('composant/composant_processus/ajouter/model/recuperer_liste.php');
                }
                
            else  if($page=='ajouter_api')
                {
                    require_once('composant/api/ajouter/model/recuperer_liste.php');
                }
            else  if($page=='modification_api')
                {
                    require_once('composant\api\modifier\model\recuperer_liste.php'); 
                }
            else  if($page=='modifier_api')
                {
                    require_once('composant\api\modifier\model\recuperer_plusieurs.php'); 
                }

                else  if($page=='modifier_composant_processus')
                {
                    require_once('composant\composant_processus\modifier\model\recuperer_plusieurs.php'); 
                }

                else if($page=='demande_supprimer_composant_processus')
                {
                    require_once('composant\composant_processus\supprimer\model\recuperer_un.php');
                }

            
            else if($page=='supprimer_api')
                {
                    require_once('composant\api\supprimer\model\recuperer_plusieurs.php');
                }
            else if($page=='demande_supprimer_api')
                {
                    require_once('composant\api\supprimer\model\recuperer_un.php');
                }
            else  if($page=='recuperes_apis')
                {
                    require_once('composant\api\recuperer_plusieurs\model\recuperer_plusieurs.php'); 
                } 
            else  if($page=='recuperer_api')
                {
                    require_once('composant\api\recuperer\model\recuperer_plusieurs.php'); 
                }

            else  if($page=='recuperation_un_api')
                {
                    require_once('composant\api\recuperer\model\recuperer_un.php'); 
                }

                else  if($page=='modification_un_unite_organisation')
                {
                    require_once('composant\unite_organisation\modifier\model\recuperer_liste.php'); 
                }
            else  if($page=='recuperes_api_composant')
                {
                    require_once('composant\api\recuperation_plusieurs_avec_composant\model\recuperer_liste.php'); 
                }
            else  if($page=='recuperes_api_application')
                {
                    require_once('composant\api\recuperation_plusieurs_avec_application\model\recuperer_liste.php'); 
                }

                else  if($page=='ajouter_planification')
                {
                    require_once('composant/planification/ajouter/model/recuperer_liste.php');
                }
            else  if($page=='modifier_planification')
                {
                    require_once('composant/planification/modifier/model/recuperer_plusieurs.php'); 
                }
            else  if($page=='modification_un_planificaton')
                {
                    require_once('composant\planification\modifier\model\recuperer_liste.php'); 
                }

                else  if($page=='modification_processus')
                {
                    require_once('composant\processus\modifier\model\recuperer_liste.php'); 
                }

            else if($page=='supprimer_planification')
                {
                    require_once('composant\planification\supprimer\model\recuperer_plusieurs.php');
                }
            else if($page=='demande_supprimer_planification')
                {
                    require_once('composant\planification\supprimer\model\recuperer_un.php');
                }
            else  if($page=='recuperes_planifications')
                {
                    require_once('composant/planification/recuperer_plusieurs/model/recuperer_plusieurs.php'); 
                } 
            else  if($page=='recuperer_planification')
                {
                    require_once('composant\planification\recuperer\model\recuperer_plusieurs.php'); 
                }
            else  if($page=='recuperation_un_planification')
                {
                    require_once('composant\planification\recuperer\model\recuperer_un.php'); 
                }

            else  if($page=='recuperes_planifications_user')
                {
                    require_once('composant\planification\recuperation_plusieurs_avec_user\model\recuperer_liste.php'); 
                }
            else  if($page=='recuperes_planification_statut')
                {
                    require_once('composant\planification\recuperation_plusieurs_avec_statut\model\recuperer_liste.php'); 
                }


                else  if($page=='modifier_unite_organisation')
                {
                    require_once('composant/unite_organisation/modifier/model/recuperer_plusieurs.php'); 
                }

                else  if($page=='ajouter_unite_organisation')
                {
                    require_once('composant\unite_organisation\ajouter\model\recuperer_liste.php');
                }


                else  if($page=='dash')
                {
                    require_once('composant/dashboard/view/index.php'); 
                }


        }
    else   
        {
                require_once('composant/dashboard/view/index.php'); 
        }
      
      
?>