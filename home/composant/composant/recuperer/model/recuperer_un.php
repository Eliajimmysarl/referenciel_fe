<?php

$id=$_GET['id'];

$uri = $authority."/composant/".$id;

$result=curl_get($uri, $token);

    $obj = json_decode($result);
                      
    $composants= $obj->composants;

    $code =  $obj->code;

    if($code ==200)
        {   
            $application_id=$composants[0]->application_id; 

            $couche=$composants[0]->couche;

            $plateforme=$composants[0]->plateforme;
            
            $entite=$composants[0]->entite;
            
            $nom=$composantss[0]->nom;
            
            $lien_code=$composants[0]->lien_code;

            $descriptions=$composants[0]->descriptions;
            

            $id=$composants[0]->id;

          
            require_once('composant/composant/recuperation_un/view/recuperation_un.php'); 
        }
    else
        {
            echo  $textes;  
        }




?>