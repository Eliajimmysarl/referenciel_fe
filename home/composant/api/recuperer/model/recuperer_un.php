<?php

$id=$_GET['id'];

$uri = $authority."/api/".$id;

$result=curl_get($uri, $token);

    $obj = json_decode($result);
                      
    $apis= $obj->api;

    $code =  $obj->code;

    if($code ==200)
        {   
            $application_id=$apis[0]->application_id; 

            $composant_id=$apis[0]->composant_id;

            $entite_id=$apis[0]->entite_id;
            
            $methode=$apis[0]->methode;
            
            $uri=$apis[0]->uri;

       
            
            $id=$apis[0]->id;

          
            require_once('composant/api/recuperer/view/recuperation_un.php'); 
        }
    else
        {
            echo  $textes;  
        }




?>