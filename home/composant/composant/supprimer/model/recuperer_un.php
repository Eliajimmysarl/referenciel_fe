<?php

$id=$_GET['id'];

$uri = $authority."/composant/".$id;

$result=curl_get($uri, $token);

    $obj = json_decode($result);
                      
    $composants= $obj->composants;

    $code =  $obj->code;

    if($code ==200)
        {   
            $application_id=$composants[0]->application_id; 

            $couche=$composants[0]->couche;

            $plate_forme=$composants[0]->plate_forme;
            
            $entite_id=$composants[0]->entite_id;
            
            $nom=$composants[0]->nom;
            
            $descriptions=$composants[0]->descriptions;

            $url_code=$composants[0]->url_code; 

            $id=$composants[0]->id;
        
            require_once('composant/composant/supprimer/view/demande_suppression.php'); 
    }
else if ($code ==400)
    {
        echo $result; 
    }




?>