<?php

$id=$_GET['id'];

$uri = $authority."/donnee_persistante/".$id;

$result=curl_get($uri, $token);

    $obj = json_decode($result);
                      
    $donnee_persistantes= $obj->donnee_persistante;

    $code =  $obj->code;

    if($code ==200)
        {   
            $application_id=$donnee_persistantes[0]->application_id; 

            $entite_id=$donnee_persistantes[0]->entite_id;

            $nom=$donnee_persistantes[0]->nom;
            
            $types=$donnee_persistantes[0]->types;
            
            $taille=$donnee_persistantes[0]->taille;

            $defaut=$donnee_persistantes[0]->defaut;

            $valeur=$donnee_persistantes[0]->valeur;

            $indexe=$donnee_persistantes[0]->indexe;

            $cle_primaire=$donnee_persistantes[0]->cle_primaire;
            
            $descriptions=$donnee_persistantes[0]->descriptions;
            

            $id=$donnee_persistantes[0]->id;

        
        
        
        require_once('composant/donnee_persistante/modifier/view/demande_modification.php'); 
    }
else if ($code ==400)
    {
        echo $result; 
    }




?>