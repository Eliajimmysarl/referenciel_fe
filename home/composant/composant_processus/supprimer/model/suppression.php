<?php

$id=$_GET['id'];

//URI
$uri = $authority."/composant_processus/".$id;

$result=curl_delete($uri, $token);

    $obj = json_decode($result);                      
    $composant_processuss= $obj->composant_processus;

    $code =  $obj->code;

    if($code ==200)
        {    
             
            
            require_once('composant/composant_processus/supprimer/view/reponse_positive.php');
        }
        else
        {
            echo  $texts;  
        }





?>