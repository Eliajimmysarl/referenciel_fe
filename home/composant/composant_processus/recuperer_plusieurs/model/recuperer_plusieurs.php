<?php

$uri =  $authority.'/composant_processus/';
   

$result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    
    $composant_processuss= $obj->composant_processus;
 
    $code = $obj->code;

    if($code ==200)
        {  
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant\composant_processus\recuperer_plusieurs\view\recuperation_plusieurs.php'); 
        }
        else
        {
            echo "verifier le code sources ";  
        }


?>