<?php

$uri =  $authority.'/entite/';
   

$result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    
    $entites= $obj->entite;

    $code = $obj->code;

    if($code ==200)
        {   
            require_once('composant/entite/supprimer/view/recuperation_plusieurs.php'); 
        }
        else
        {
            echo "verifier le code sources ";  
        }


?>