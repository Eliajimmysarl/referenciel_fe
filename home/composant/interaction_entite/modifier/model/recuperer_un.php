<?php

$id=$_GET['id'];

$uri = $authority."/interaction_entite/".$id;

$result=curl_get($uri, $token);

    $obj = json_decode($result);
                      
    $interaction_entites= $obj->interaction_entite;

    $code =  $obj->code;

    if($code ==200)
        {   
            $entite_nom=$interaction_entites[0]->entite_nom; 

            $composant_nom=$interaction_entites[0]->composant_nom;
      

            $id=$interaction_entites[0]->id;

        
        
        
        require_once('composant/interaction_entite/modifier/view/demande_modification.php'); 
    }
else if ($code ==400)
    {
        echo $result; 
    }




?>