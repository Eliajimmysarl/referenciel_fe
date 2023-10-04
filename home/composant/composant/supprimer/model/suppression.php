<?php

$id=$_GET['id'];

$uri = $authority."/composant/".$id;

$result=curl_delete($uri, $token);

    $obj = json_decode($result);                      
    $composants= $obj->composant;

    $code =  $obj->code;

    if($code ==200)
        {    
             
            
            require_once('composant/composant/supprimer/view/reponse_positive.php');
        }
        else
        {
            echo  $texts;  
        }





?>