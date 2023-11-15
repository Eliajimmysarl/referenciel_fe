<?php

    $uri =  $authority.'/processus/';
   
    $result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    
    $processuss= $obj->processus;


    
    
    $code = $obj->code;

    if($code ==200)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/composant_processus/modifier/model/recuperer_un.php'); 
        }
    else
        {
            echo "verifier le code sources ";  
        }

   


?>