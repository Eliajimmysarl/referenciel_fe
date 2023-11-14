<?php

$id=$_GET['id'];

$uri = $authority."/api/".$id;

$result=curl_get($uri, $token);

    $obj = json_decode($result);
                      
    $apis= $obj->api;

    $code =  $obj->code;

    if($code ==200)
        {   
            $application_nom=$apis[0]->application_nom; 

            $entite_nom=$apis[0]->entite_nom;

            $compsant_nom=$apis[0]->composant_nom;
            
            $methode=$apis[0]->methode;
            
            $uri=$apis[0]->uri;
            

            $id=$apis[0]->id;
        
            require_once('composant/api/supprimer/view/demande_suppression.php'); 
    }
else if ($code ==400)
    {
        echo $result; 
    }




?>