<?php

    $uri =  $authority.'/composant/';

    $result=curl_get($uri, $token);

    $obj = json_decode($result);                      
  
    $composants= $obj->composant;
   
    $code = $obj->code;

    if($code ==200)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/composant/recuperer_plusieurs/view/recuperation_plusieurs.php'); 
        }
        else
        {
            echo "verifier le code sources ";  
        }


?>