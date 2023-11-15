<?php

$id=$_GET['id'];

//URI
$uri = $authority."/interaction_entite/".$id;

$result=curl_delete($uri, $token);

    $obj = json_decode($result);                      
    $interaction_entites= $obj->interaction_entite;

    $code =  $obj->code;

    if($code ==200)
        {    
             
            
            require_once('composant/interaction_entite/supprimer/view/reponse_positive.php');
        }
        else
        {
            echo  $texts;  
        }





?>