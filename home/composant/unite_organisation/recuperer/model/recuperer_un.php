<?php

$id=$_GET['id'];

$uri = $authority."/unite_organisation/".$id;

$result=curl_get($uri, $token);

    $obj = json_decode($result);
                      
    $unite_organisations= $obj->unite_organisation;

    $code =  $obj->code;

    if($code ==200)
        {   
            $application_nom=$unite_organisations[0]->applications_nom; 

            $nom=$unite_organisations[0]->unite_organisation_nom;

            $description=$unite_organisations[0]->descriptions;
           
            $id=$unite_organisations[0]->id;

          
            require_once('composant/unite_organisation/recuperer/view/recuperation_un.php'); 
        }
    else
        {
            echo  $textes;  
        }




?>