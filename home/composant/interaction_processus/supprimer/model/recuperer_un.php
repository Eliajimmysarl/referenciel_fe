<?php

$id=$_GET['id'];

$uri = $authority."/interaction_processus/".$id;

$result=curl_get($uri, $token);

    $obj = json_decode($result);
                      
    $interaction_processuss= $obj->interaction_processus;

    $code =  $obj->code;

    if($code ==200)
        {   
            $processus_nom=$interaction_processuss[0]->processus_nom; 

           
            
          

       
            
            $id=$interaction_processuss[0]->id;

            require_once('composant/interaction_processus/supprimer/view/demande_suppression.php'); 
    }
else if ($code ==400)
    {
        echo $result; 
    }




?>