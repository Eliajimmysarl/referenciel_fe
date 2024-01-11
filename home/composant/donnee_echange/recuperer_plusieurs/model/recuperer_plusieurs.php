<?php

    $uri =  $authority.'/donnee_echange/';

    $result=curl_get($uri, $token);

    $obj = json_decode($result);                      

    $donnee_echanges= $obj->donnee_echange;

    $code = $obj->code;

    if($code ==200)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/donnee_echange/recuperer_plusieurs/view/recuperation_plusieurs.php'); 
        }
        else
        {
            echo "verifier le code sources ";  
        }


?>