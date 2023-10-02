<?php

$uri =  $authority.'/api/';
   

$result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    
    $apis= $obj->apis;

    $code = $obj->code;

    if($code ==200)
        {   
            require_once('composant/composant/modifier/view/recuperation_plusieur.php'); 
        }
        else
        {
            echo "verifier le code sources ";  
        }


?>