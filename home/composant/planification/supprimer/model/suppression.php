<?php

$id=$_GET['id'];

//URI
$uri = $authority."/planification/".$id;

$result=curl_delete($uri, $token);

    $obj = json_decode($result);                      
    $planifications= $obj->planifications;

    $code =  $obj->code;

    if($code ==200)
        {    
             
            
            require_once('composant/planification/supprimer/view/reponse_positive.php');
        }
        else
        {
            echo  $texts;  
        }





?>