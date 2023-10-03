<?php

$uri =  $authority.'/entite/';
   

$result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    
    $entites= $obj->entites;

    $code = $obj->code;

    if($code ==200)
        {   
            require_once('composant/supprimer/view/recuperation_plusieurs.php'); 
        }
        else
        {
            echo "verifier le code sources ";  
        }


?>