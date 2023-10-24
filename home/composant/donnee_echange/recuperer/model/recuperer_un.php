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

            $application_nom=$donnee_echanges[0]->application_nom;

            $composant_nom=$donnee_echanges[0]->composant_nom;
            
            $entite_nom=$donnee_echanges[0]->entite_nom;
            
            $descriptions=$donnee_echanges[0]->descriptions;
        
            $id=$donnee_echanges[0]->id_donnee_echange;


          
            require_once('composant/donnee_echange/recuperer/view/recuperation_un.php'); 
        }
    else
        {
            echo  $textes;  
        }




?>