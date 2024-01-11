<?php


    $uri =  $authority.'/acteur/';
   
    $result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    
    $acteurs= $obj->acteur;
    
    
    $code = $obj->code;

    if($code ==200)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant\acteur\recuperation_plusieurs_avec_acteur\view\demande_recuperation.php'); 
        }
    else
        {
            echo "verifier le code sources ";  
        }

   


?>