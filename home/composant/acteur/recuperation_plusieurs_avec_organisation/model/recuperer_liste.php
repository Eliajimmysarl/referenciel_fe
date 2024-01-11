<?php

$uri =  $authority.'/unite_organisation/';
   
$result=curl_get($uri, $token);

$obj = json_decode($result);                      

$unite_organisations= $obj->unite_organisation;


    
    
    $code = $obj->code;

    if($code ==200)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/acteur/recuperation_plusieurs_avec_organisation/view/demande_recuperation.php'); 
        }
    else
        {
            echo "verifier le code sources ";  
        }

   


?>