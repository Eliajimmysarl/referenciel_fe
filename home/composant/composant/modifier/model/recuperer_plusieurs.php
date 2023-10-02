<?php

$uri =  $authority.'/composant/';
   

$result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    
    $composants= $obj->composant;

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