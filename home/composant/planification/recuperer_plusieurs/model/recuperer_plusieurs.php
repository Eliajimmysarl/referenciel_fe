<?php

    $uri =  $authority.'/planification/';

    $result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    echo"$result";
    $planifications= $obj->planification;

    $code = $obj->code;

    if($code ==200)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/planification/recuperer_plusieurs/view/recuperation_plusieurs.php'); 
        }
        else
        {
            echo "verifier le code sources ";  
        }


?>