<?php

$uri =  $authority.'/composant/';
   

$result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    
    $composants= $obj->composants;

    $code = $obj->code;

    if($code ==200)
        {   
            require_once('composant/composant/supprimer/view/recuperation_plusieurs.php'); 
        }
        else
        {
            echo "verifier le code sources ";  
        }


?>