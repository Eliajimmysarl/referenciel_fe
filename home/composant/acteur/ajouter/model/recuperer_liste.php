<?php

    $uri =  $authority.'/application/';
   
    $result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    
    $applications= $obj->applications;


    $uri =  $authority.'/unite_organisation/';
   
    $result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    
    $unite_organisations= $obj->unite_organisation;
    
    
    $code = $obj->code;

    if($code ==200)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/acteur/ajouter/view/demande_ajout.php'); 
        }
    else
        {
            echo "verifier le code sources ";  
        }

   


?>