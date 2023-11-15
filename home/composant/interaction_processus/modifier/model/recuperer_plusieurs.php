<?php

$uri =  $authority.'/interaction_processus/';
   

$result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    
    $interaction_processuss= $obj->interaction_processus;

    $code = $obj->code;

    if($code ==200)
        {   
            require_once('composant/interaction_processus/modifier/view/recuperation_plusieur.php'); 
        }
        else
        {
            echo "verifier le code sources ";  
        }


?>