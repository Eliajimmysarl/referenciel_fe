<?php

$uri =  $authority.'/planification/';
   

$result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    
    $planifications= $obj->planification;

    $code = $obj->code;

    if($code ==200)
        {   
            require_once('composant/planification/modifier/view/recuperation_plusieur.php'); 
        }
        else
        {
            echo "verifier le code sources ";  
        }


?>