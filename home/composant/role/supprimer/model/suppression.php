<?php

$id=$_GET['id'];

//URI
$uri = $authority."/role/".$id;

$result=curl_delete($uri, $token);

    $obj = json_decode($result);                      
    $roles= $obj->roles;

    $code =  $obj->code;

    if($code ==200)
        {    
             
            
            require_once('composant/role/supprimer/view/reponse_positive.php');
        }
        else
        {
            echo  $texts;  
        }





?>