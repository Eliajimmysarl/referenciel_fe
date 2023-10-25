<?php

$uri =  $authority.'/application/';
   

$result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    
    $applications= $obj->applications;

    $code = $obj->code;

    if($code ==200)
        {   
            require_once('composant/application/supprimer/view/recuperation_plusieurs.php'); 
        }
        else
        {
            echo "verifier le code sources ";  
        }


?>