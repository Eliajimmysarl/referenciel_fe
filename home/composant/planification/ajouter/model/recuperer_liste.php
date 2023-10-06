<?php

    $uri =  $authority2.'/client/';
   
    $result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    
    $users= $obj->user;


    $uri =  $authority.'/composant/';
   
    $result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    
    $composants= $obj->composant;

    
    $code = $obj->code;

    if($code ==200)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/planification/ajouter/view/demande_ajout.php'); 
        }
    else
        {
            echo "verifier le code sources ";  
        }

   


?>