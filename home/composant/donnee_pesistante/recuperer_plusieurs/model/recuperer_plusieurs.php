<?php

    $uri =  $authority.'/donnee_pesistante/';

    $result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    
    $donnee_pesistantes= $obj->donnee_pesistantes;

    $code = $obj->code;

    if($code ==200)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/donnee_pesistante/recuperation_plusieurs/view/recuperation_plusieurs.php'); 
        }
        else
        {
            echo "verifier le code sources ";  
        }


?>