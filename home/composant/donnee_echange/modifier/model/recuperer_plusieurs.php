<?php

$uri =  $authority.'/donnee_echange/';
   

$result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    
    $donnee_echanges= $obj->donnee_echanges;

    $code = $obj->code;

    if($code ==200)
        {   
            require_once('composant/donnee_echange/modifier/view/recuperation_plusieur.php'); 
        }
        else
        {
            echo "verifier le code sources ";  
        }


?>