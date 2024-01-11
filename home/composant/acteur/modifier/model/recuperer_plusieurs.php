<?php

$uri =  $authority.'/acteur/';
   

$result=curl_get($uri, $token);

    $obj = json_decode($result);                      
  
    $acteurs= $obj->acteur;

    $code = $obj->code;

    if($code ==200)
        {   
            require_once('composant/acteur/modifier/view/recuperation_plusieur.php'); 
        }
        else
        {
            echo "verifier le code sources ";  
        }


?>