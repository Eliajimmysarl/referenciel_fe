<?php

$id=$_GET['id'];

$uri = $authority."/acteur/".$id;

$result=curl_get($uri, $token);

    $obj = json_decode($result);
                      
    $acteurs= $obj->acteur;

    $code =  $obj->code;

    if($code ==200)
        {   
            $application_id=$acteurs[0]->applications_nom; 

            $unite_organisation_nom=$acteurs[0]->unite_organisation_nom;

            $nom=$acteurs[0]->acteur_nom;
            
            $types=$acteurs[0]->types;
            
            $descriptions=$acteurs[0]->descriptions;        

            $id=$acteurs[0]->id;

        
        
            require_once('composant/acteur/supprimer/view/demande_suppression.php'); 
    }
else if ($code ==400)
    {
        echo $result; 
    }




?>