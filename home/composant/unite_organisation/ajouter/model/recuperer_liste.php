<?php

    $uri =  $authority.'/application/';
   
    $result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    
    $applications= $obj->applications;



    
    
    $code = $obj->code;

    if($code ==200)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/unite_organisation/ajouter/view/demande_ajout.php'); 
        }
    else
        {
            echo "verifier le code sources ";  
        }

   


?>