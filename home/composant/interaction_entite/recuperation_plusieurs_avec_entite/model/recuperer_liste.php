<?php

    $uri =  $authority.'/entite/';
   
    $result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    
    $entites= $obj->entite;

    
    
    $code = $obj->code;

    if($code ==200)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/interaction_entite/recuperation_plusieurs_avec_entite/view/demande_recuperation.php'); 
        }
    else
        {
            echo "verifier le code sources ";  
        }

   


?>