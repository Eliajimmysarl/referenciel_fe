<?php

$id=$_GET['id'];

$uri = $authority."/donnee_echange/".$id;

$result=curl_get($uri, $token);

    $obj = json_decode($result);
                      
    $donnee_echanges= $obj->donnee_echange;

    $code =  $obj->code;

    if($code ==200)
        {   
            $nom=$donnee_echanges[0]->nom; 

            $types=$donnee_echanges[0]->types;

            $application_id=$donnee_echanges[0]->application_id;

            $composant_id=$donnee_echanges[0]->composant_id;
            
            $entite_id=$donnee_echanges[0]->entite_id;
            
            $descriptions=$donnee_echanges[0]->descriptions;
        
            $id=$donnee_echanges[0]->id_donnee_echange;

        
        
        
        require_once('composant/donnee_echange/modifier/view/demande_modification.php'); 
    }
else if ($code ==400)
    {
        echo $result; 
    }




?>