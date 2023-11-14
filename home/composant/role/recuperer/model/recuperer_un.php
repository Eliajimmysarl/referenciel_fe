<?php

$id=$_GET['id'];

$uri = $authority."/role/".$id;

$result=curl_get($uri, $token);

    $obj = json_decode($result);
                      
    $roles= $obj->roles;

    $code =  $obj->code;

    if($code ==200)
        {   
            $application_nom=$roles[0]->application_nom; 

            $acteur_nom=$roles[0]->acteur_nom;

            $unite_organisation_nom=$roles[0]->unite_organisation_nom;
            
            $nom=$roles[0]->nom;
            
            $descriptions=$roles[0]->descriptions;        

            $id=$roles[0]->id_roles;

          
            require_once('composant/role/recuperer/view/recuperation_un.php'); 
        }
    else
        {
            echo  $textes;  
        }




?>