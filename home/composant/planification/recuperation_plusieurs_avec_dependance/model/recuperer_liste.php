<?php

    $uri =  $authority.'/planification/';
   
    $result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    
    $planifications= $obj->planifications;
  
    
    $code = $obj->code;

    if($code ==200)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/planification/recuperation_plusieurs_avec_dependance/view/demande_recuperation.php'); 
        }
    else
        {
            echo "verifier le code sources ";  
        }

   


?>