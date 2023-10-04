<?php

$id=$_GET['id'];

//URI
$uri = $authority."/entite/".$id;

$result=curl_delete($uri, $token);

    $obj = json_decode($result);                      
    $entites= $obj->entite;

    $code =  $obj->code;

    if($code ==200)
        {    
             
            
            require_once('composant/entite/supprimer/view/reponse_positive.php');
        }
        else
        {
            echo  $texts;  
        }





?>