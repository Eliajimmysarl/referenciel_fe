<?php

    $uri =  $authority.'/application/';
   
    $result=curl_get($uri, $token);

    $obj = json_decode($result);                      

    $applications= $obj->applications;
    
    
    $code = $obj->code;

    if($code ==200)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant\role\recuperation_plusieurs_avec_application\view\demande_recuperation.php'); 
        }
    else
        {
            echo "verifier le code sources ";  
        }

   


?>