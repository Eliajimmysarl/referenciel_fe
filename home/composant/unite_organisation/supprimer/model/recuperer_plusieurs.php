<?php

$uri =  $authority.'/unite_oganisation/';
   

$result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    
    $unite_oganisations= $obj->unite_oganisation;

    $code = $obj->code;

    if($code ==200)
        {   
            require_once('composant/unite_oganisation/supprimer/view/recuperation_plusieurs.php'); 
        }
        else
        {
            echo "verifier le code sources ";  
        }


?>