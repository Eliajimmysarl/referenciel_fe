<?php

$id=$_GET['id'];

$uri = $authority."/composant/".$id;

$result=curl_get($uri, $token);

    $obj = json_decode($result);
                      
    $composants= $obj->composant;

    $code =  $obj->code;

    if($code ==200)
        {   
            $application_id=$composants[0]->application_id; 

            $couche=$composants[0]->couche;

            $plateforme=$composants[0]->plateforme;
            
            $entite_id=$composants[0]->entite_id;
            
            $nom=$composants[0]->nom;
            
            $url_code=$composants[0]->url_code;

            $descriptions=$composants[0]->descriptions;
            

            $id=$composants[0]->id;

          
            require_once('composant\composant\recuperer\view\recuperation_un.php'); 
        }
    else
        {
            echo  $textes;  
        }




?>