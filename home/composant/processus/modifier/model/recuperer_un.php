<?php

$id=$_GET['id'];

$uri = $authority."/processus/".$id;

$result=curl_get($uri, $token);

    $obj = json_decode($result);
                      
    $processuss= $obj->processus;

    $code =  $obj->code;

    if($code ==200)
        {   
            $applications_nom=$processuss[0]->applications_nom; 

            $processus_nom=$processuss[0]->processus_nom;

            $id=$processuss[0]->id;

        
        
        
        require_once('composant/processus/modifier/view/demande_modification.php'); 
    }
else if ($code ==400)
    {
        echo $result; 
    }




?>