<?php

    $uri =  $authority.'/unite_organisation/';

    $result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    
    $apis= $obj->api;

    $code = $obj->code;

    if($code ==200)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant\unite_organisation\recuperer_plusieurs\view\recuperation_plusieurs.php'); 
        }
        else
        {
            echo "verifier le code sources ";  
        }


?>