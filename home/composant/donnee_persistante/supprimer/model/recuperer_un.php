<?php
$id=$_GET['id'];

$uri = $authority."/donnee_persistante/".$id;

$result=curl_get($uri, $token);

    $obj = json_decode($result);
                      
    $donnee_persistantes= $obj->donnee_persistante;

    $code =  $obj->code;

    if($code ==200)
        {   
            $application_id=$donnee_persistantes[0]->application_id; 

            $entite_id=$donnee_persistantes[0]->entite_id;

            $nom=$donnee_persistantes[0]->nom;

            $indexe=$donnee_persistantes[0]->indexe;

            $cle_primaire=$donnee_persistantes[0]->cle_primaire;
            
            $descriptions=$donnee_persistantes[0]->descriptions;
            
            $id=$donnee_persistantes[0]->id; 
            
            
            require_once('composant/donnee_persistante/supprimer/view/demande_suppression.php'); 
    }
else if ($code ==400)
    {
        echo $result; 
    }




?>