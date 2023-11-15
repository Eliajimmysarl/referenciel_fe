<?php

$uri =  $authority.'/interaction_entite/';
   

$result=curl_get($uri, $token);

    $obj = json_decode($result);                      
   
    $interaction_entites= $obj->interaction_entite;

    $code = $obj->code;

    if($code ==200)
        {   
            require_once('composant/interaction_entite/modifier/view/recuperation_plusieur.php'); 
        }
        else
        {
            echo "verifier le code sources ";  
        }


?>