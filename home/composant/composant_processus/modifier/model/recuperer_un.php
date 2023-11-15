<?php

$id=$_GET['id'];

$uri = $authority."/composant_processus/".$id;

$result=curl_get($uri, $token);

    $obj = json_decode($result);
                      
    $composant_processuss= $obj->composant_processus;

    $code =  $obj->code;

    if($code ==200)
        {   
            $processus_nom=$composant_processuss[0]->processus_nom; 

            $activite=$composant_processuss[0]->activite;

            $descriptions=$composant_processuss[0]->descriptions;
            
            $lien_code=$composant_processuss[0]->lien_code;    

            $id=$composant_processuss[0]->id;

        
        
        
        require_once('composant/composant_processus/modifier/view/demande_modification.php'); 
    }
else if ($code ==400)
    {
        echo $result; 
    }




?>