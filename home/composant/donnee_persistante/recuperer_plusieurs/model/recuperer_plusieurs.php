<?php

    $uri =  $authority.'/donnee_persistante/';

    $result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    
    $donnee_persistantes= $obj->donnee_persistante;

    $code = $obj->code;

    if($code ==200)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/donnee_persistante/recuperer_plusieurs/view/recuperation_plusieurs.php'); 
        }
        else
        {
            echo "verifier le code sources ";  
        }


?>