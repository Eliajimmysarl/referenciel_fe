<?php

$id=$_GET['id'];

//URI
$uri = $authority."/composant/".$id;

$result=curl_delete($uri, $token);

    $obj = json_decode($result);                      
    $composants= $obj->composants;

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