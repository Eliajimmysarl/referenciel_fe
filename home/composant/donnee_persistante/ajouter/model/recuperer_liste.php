<?php

    $uri =  $authority.'/application/';
   
    $result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    
    $applications= $obj->applications;


    $uri =  $authority.'/entite/';
   
    $result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    
    $entites= $obj->entite;
    
    
    $code = $obj->code;

    if($code ==200)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant\donnee_persistante\ajouter\view\demande_ajout.php'); 
        }
    else
        {
            echo "verifier le code sources ";  
        }

   


?>