<?php

$uri =  $authority.'/api/';
   

$result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    
    $apis= $obj->api;

    $code = $obj->code;

    if($code ==200)
        {   
            require_once('composant/api/supprimer/view/recuperation_plusieurs.php'); 
        }
        else
        {
            echo "verifier le code sources ";  
        }


?>