<?php

$uri =  $authority.'/donnee_persistante/';
   

$result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    
    $donnee_persistantes= $obj->donnee_persistante;

    $code = $obj->code;

    if($code ==200)
        {   
            require_once('composant/donnee_persistante/supprimer/view/recuperation_plusieurs.php'); 
        }
        else
        {
            echo "verifier le code sources ";  
        }


?>