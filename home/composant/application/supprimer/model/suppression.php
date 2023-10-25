<?php

$id=$_GET['id'];

//URI
$uri = $authority."/application/".$id;

$result=curl_delete($uri, $token);

    $obj = json_decode($result);                      
    $applications= $obj->applications;

    $code =  $obj->code;

    if($code ==200)
        {    
             
            
            require_once('composant/application/supprimer/view/reponse_positive.php');
        }
        else
        {
            echo  $texts;  
        }





?>