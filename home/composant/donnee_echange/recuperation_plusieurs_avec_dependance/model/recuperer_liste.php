<?php

    $uri =  $authority.'/application/';
   
    $result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    
    $applications= $obj->applications;


    $uri =  $authority.'/composant/';
   
    $result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    
    $composants= $obj->composants;


    $uri =  $authority.'/entite/';
   
    $result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    
    $entites= $obj->entites;
    
    
    $code = $obj->code;

    if($code ==200)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/donnee_echange/recuperation_plusieurs_avec_dependance/view/demande_recuperation.php'); 
        }
    else
        {
            echo "verifier le code sources ";  
        }

   


?>