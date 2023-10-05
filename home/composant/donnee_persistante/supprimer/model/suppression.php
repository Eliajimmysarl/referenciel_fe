<?php

$id=$_GET['id'];

$uri = $authority."/donnee_persistante/".$id;

$result=curl_delete($uri, $token);

    $obj = json_decode($result);                      
    $donnee_persistantes= $obj->donnee_persistante;

    $code =  $obj->code;

    if($code ==200)
        {    
             
            
            require_once('composant/donnee_persistante/supprimer/view/reponse_positive.php');
        }
        else
        {
            echo  $texts;  
        }





?>