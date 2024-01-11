<?php

$id=$_GET['id'];

//URI
$uri = $authority."/interaction_processus/".$id;

$result=curl_delete($uri, $token);

    $obj = json_decode($result);                      
    $interaction_processuss= $obj->interaction_processus;

    $code =  $obj->code;

    if($code ==200)
        {    
             
            
            require_once('composant/interaction_processus/supprimer/view/reponse_positive.php');
        }
        else
        {
            echo  $texts;  
        }





?>