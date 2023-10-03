<?php

$id=$_GET['id'];

$uri = $authority."/donnee_pesistante/".$id;

$result=curl_get($uri, $token);

    $obj = json_decode($result);
                      
    $donnee_pesistantes= $obj->donnee_pesistantes;

    $code =  $obj->code;

    if($code ==200)
        {   
            $application_id=$donnee_pesistantes[0]->application_id; 

            $entite_id=$donnee_pesistantes[0]->entite_id;

            $nom=$donnee_pesistantes[0]->nom;
            
            $types=$donnee_pesistantes[0]->types;
            
            $taille=$donnee_pesistantes[0]->taille;

            $defaut=$donnee_pesistantes[0]->defaut;

            $valeur=$donnee_pesistantes[0]->valeur;

            $indexe=$donnee_pesistantes[0]->indexe;

            $cle_primaire=$donnee_pesistantes[0]->cle_primaire;
            
            $descriptions=$donnee_pesistantes[0]->descriptions;
            

            $id=$donnee_pesistantes[0]->id;
          
            require_once('composant/donnee_pesistante/recuperer/view/recuperation_un.php'); 
        }
    else
        {
            echo  $textes;  
        }




?>