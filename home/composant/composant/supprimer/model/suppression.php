<?php

$id=$_GET['id'];

//URI
$uri = $authority."/entites/".$id;

$result=curl_delete($uri, $token);

    $obj = json_decode($result);                      
    $entites= $obj->test;

    $code =  $obj->code;

    if($code ==200)
        {    
             
            
            require_once('composant/suppression_un/view/reponse_positive.php');
        }
        else
        {
            echo  $texts;  
        }





?>