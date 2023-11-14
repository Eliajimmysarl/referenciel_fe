<?php

$id=$_GET['id'];

//URI
$uri = $authority."/acteur/".$id;

$result=curl_delete($uri, $token);

    $obj = json_decode($result);                      
    $acteurs= $obj->acteur;

    $code =  $obj->code;

    if($code ==200)
        {    
             
            
            require_once('composant/acteur/supprimer/view/reponse_positive.php');
        }
        else
        {
            echo  $texts;  
        }





?>