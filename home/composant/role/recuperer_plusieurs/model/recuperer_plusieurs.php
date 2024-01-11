<?php

$uri =  $authority.'/role/';
   

$result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    
    $roles= $obj->roles;

    $code = $obj->code;

    if($code ==200)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/role/recuperer_plusieurs/view/recuperation_plusieurs.php'); 
        }
        else
        {
            echo "verifier le code sources ";  
        }


?>