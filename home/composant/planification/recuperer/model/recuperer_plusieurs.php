<?php

$uri =  $authority.'/planification/';
   

$result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    
    $planifications= $obj->planifications;

    $code = $obj->code;

    if($code ==200)
        {   
            require_once('composant/planification/recuperer/view/recuperation_plusieurs.php'); 
        }
        else
        {
            echo "verifier le code sources ";  
        }


?>