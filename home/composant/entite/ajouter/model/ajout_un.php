<?php

    $uri =  $authority.'/entite/';

    $application_id=$_POST['application_id'];

    $nom=$_POST['nom'];

    $descriptions=$_POST['descriptions'];


    $data = array(
        
        'application_id' => $application_id,

        'nom'=> $nom,

        'descriptions'=> $descriptions

    );

    $result=curl_post($uri, $token, $data);
  
    $entite=json_decode($result);

    $code = $entite->code;
        
    if($code ==201)
            {   
                require_once('composant/entite/ajouter/view/reponse_positive.php'); 
            }
        else    
            {
                require_once('composant/entite/ajouter/view/reponse_negative.php');   
            }


?>