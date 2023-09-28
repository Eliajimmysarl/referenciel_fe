<?php

    $uri =  $authority.'/categorie1/';
   
    $result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    
    $selections= $obj->selections;


    $uri =  $authority.'/categorie2/';
   
    $result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    
    $options= $obj->options;
    
    
    $code = $obj->code;

    if($code ==200)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/ajout_un_avec_dependance/view/demande_ajout.php'); 
        }
    else
        {
            echo "verifier le code sources ";  
        }

   


?>