<?php

    $uri =  $authority.'/application/';

    $result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    
    $applications= $obj->applications;

    $code = $obj->code;

    if($code ==200)
        {   
       
            require_once('composant/application/recuperer_plusieurs/view/recuperation_plusieurs.php'); 
        }
        else
        {
            echo "verifier le code sources ";  
        }


?>