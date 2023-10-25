<?php

$id=$_GET['id'];

$uri = $authority."/donnee_echange/".$id;

$result=curl_delete($uri, $token);

    $obj = json_decode($result);                      
    $donnee_echanges= $obj->donnee_echange;

    $code =  $obj->code;

    if($code ==200)
        {    
             
            
            require_once('composant/donnee_echange/supprimer/view/reponse_positive.php');
        }
        else
        {
            echo  $texts;  
        }





?>