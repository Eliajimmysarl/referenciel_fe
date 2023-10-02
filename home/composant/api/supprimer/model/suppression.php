<?php

$id=$_GET['id'];

//URI
$uri = $authority."/api/".$id;

$result=curl_delete($uri, $token);

    $obj = json_decode($result);                      
    $apis= $obj->apis;

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