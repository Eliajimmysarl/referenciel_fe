<?php

$id=$_GET['id'];

//URI
$uri = $authority."/processus/".$id;

$result=curl_delete($uri, $token);

    $obj = json_decode($result);                      
    $processuss= $obj->processus;

    $code =  $obj->code;

    if($code ==200)
        {    
             
            
            require_once('composant/processus/supprimer/view/reponse_positive.php');
        }
        else
        {
            echo  $texts;  
        }





?>