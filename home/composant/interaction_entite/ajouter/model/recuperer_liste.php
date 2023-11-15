<?php

    $uri =  $authority.'/entite/';
   
    $result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    
    $entites= $obj->entite;




    $uri =  $authority.'/composant/';
   
    $result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    
    $composant_entites= $obj->composant;
    
    
    
    $code = $obj->code;

    if($code ==200)
        {    
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/interaction_entite/ajouter/view/demande_ajout.php'); 
        }
    else
        {
            echo "verifier le code sources ";  
        }

   


?>