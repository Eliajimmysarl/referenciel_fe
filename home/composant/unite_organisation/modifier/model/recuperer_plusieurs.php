<?php

$uri =  $authority.'/unite_organisation/';
   

$result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    
    $unite_organisations= $obj->unite_organisation;

    $code = $obj->code;

    if($code ==200)
        {   
            require_once('composant/unite_organisation/modifier/view/recuperation_plusieur.php'); 
        }
        else
        {
            echo "verifier le code sources ";  
        }


?>