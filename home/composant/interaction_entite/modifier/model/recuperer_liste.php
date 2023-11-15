<?php

    $uri =  $authority.'/entite/';
   
    $result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    
    $entites= $obj->entite;




    $uri =  $authority.'/composant_entite/';
   
    $result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    
    $composant_entites= $obj->composant_entite;
    
    
    
    $code = $obj->code;

    if($code ==200)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/interaction_entite/modifier/model/recuperer_un.php'); 
        }
    else
        {
            echo "verifier le code sources ";  
        }

   


?>