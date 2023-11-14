<?php

$uri =  $authority.'/processus/';
   

$result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    
    $processuss= $obj->processus;

    $code = $obj->code;

    if($code ==200)
        {   
            require_once('composant\processus\modifier\view\recuperation_plusieur.php'); 
        }
        else
        {
            echo "verifier le code sources ";  
        }


?>