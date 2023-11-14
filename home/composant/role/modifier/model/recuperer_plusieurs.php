<?php

$uri =  $authority.'/role/';
   

$result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    
    $roles= $obj->roles;

    $code = $obj->code;

    if($code ==200)
        {   
            require_once('composant/role/modifier/view/recuperation_plusieur.php'); 
        }
        else
        {
            echo "verifier le code sources ";  
        }


?>