<?php

    $uri =  $authority.'/application/';
   
    $result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    
    $applications= $obj->applications;

    
    $code = $obj->code;

    if($code ==200)
        {   
         
            require_once('composant/entite/recuperation_plusieurs_avec_application/view/demande_recuperation.php'); 
        }
    else
        {
            echo "verifier le code sources ";  
        }

   


?>