<?php

$uri =  $authority.'/composant_processus/';
   

$result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    
    $composant_processuss= $obj->composant_processus;
 
    $code = $obj->code;

    if($code ==200)
        {   
            require_once('composant/composant_processus/modifier/view/recuperation_plusieur.php'); 
        }
        else
        {
            echo "verifier le code sources ";  
        }


?>