<?php

$uri =  $authority.'/donnee_echange/';
   

$result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    
    $donnee_echanges= $obj->donnee_echange;

    $code = $obj->code;

    if($code ==200)
        {   
            require_once('composant/donnee_echange/supprimer/view/recuperation_plusieurs.php'); 
        }
        else
        {
            echo "verifier le code sources ";  
        }


?>