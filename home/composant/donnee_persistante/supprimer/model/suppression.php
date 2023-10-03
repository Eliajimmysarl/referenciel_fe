<?php

$id=$_GET['id'];

//URI
$uri = $authority."/donnee_pesistante/".$id;

$result=curl_delete($uri, $token);

    $obj = json_decode($result);                      
    $donnee_pesistantes= $obj->donnee_pesistantes;

    $code =  $obj->code;

    if($code ==200)
        {    
             
            
            require_once('composant/donnee_pesistante/supprimer/view/reponse_positive.php');
        }
        else
        {
            echo  $texts;  
        }





?>