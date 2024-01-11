<?php

$uri =  $authority.'/interaction_entite/';
   

$result=curl_get($uri, $token);

    $obj = json_decode($result);                      
   
    $interaction_entites= $obj->interaction_entite;

    $code = $obj->code;

    if($code ==200)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant\interaction_entite\recuperer_plusieurs\view\recuperation_plusieurs.php'); 
        }
        else
        {
            echo "verifier le code sources ";  
        }


?>