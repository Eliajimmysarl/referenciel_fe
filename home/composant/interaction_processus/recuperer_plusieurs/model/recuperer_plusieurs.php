<?php

$uri =  $authority.'/interaction_processus/';
   

$result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    
    $interaction_processuss= $obj->interaction_processus;

    $code = $obj->code;

    if($code ==200)
        {     
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant\interaction_processus\recuperer_plusieurs\view\recuperation_plusieurs.php'); 
        }
        else
        {
            echo "verifier le code sources ";  
        }


?>