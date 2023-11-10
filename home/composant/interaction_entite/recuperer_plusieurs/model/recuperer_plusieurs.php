<?php

    $uri =  $authority.'/api/';

    $result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    
    $apis= $obj->api;

    $code = $obj->code;

    if($code ==200)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant\api\recuperer_plusieurs\view\recuperation_plusieurs.php'); 
        }
        else
        {
            echo "verifier le code sources ";  
        }


?>