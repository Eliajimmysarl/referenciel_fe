<?php

$id=$_GET['id'];

//URI
$uri = $authority."/unite_organisation/".$id;

$result=curl_delete($uri, $token);

    $obj = json_decode($result);                      
    $unite_organisations= $obj->unite_organisation;

    $code =  $obj->code;

    if($code ==200)
        {    
             
            
            require_once('composant/unite_organisation/supprimer/view/reponse_positive.php');
        }
        else
        {
            echo  $texts;  
        }





?>