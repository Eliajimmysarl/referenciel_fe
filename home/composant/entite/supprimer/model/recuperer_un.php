<?php

$id=$_GET['id'];

$uri = $authority."/entite/".$id;

$result=curl_get($uri, $token);

    $obj = json_decode($result);
                      
    $entites= $obj->entites;

    $code =  $obj->code;

    if($code ==200)
        {   
            $application_id=$entites[0]->application_id; 

            $nom=$entites[0]->nom;

            $descriptions=$entites[0]->descriptions;
            

            $id=$entites[0]->id;

            require_once('composant/entite/supprimer/view/demande_suppression.php'); 
    }
else if ($code ==400)
    {
        echo $result; 
    }




?>