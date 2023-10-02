<?php

$uri =  $authority.'/donnee_pesistante/';
   

$result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    
    $donnee_pesistantes= $obj->donnee_pesistantes;

    $code = $obj->code;

    if($code ==200)
        {   
            require_once('composant/donnee_pesistante/modifier/view/recuperation_plusieur.php'); 
        }
        else
        {
            echo "verifier le code sources ";  
        }


?>