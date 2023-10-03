<?php

    $uri =  $authority.'/entites/';

    $application_id=$_POST['application_id'];

    $nom=$_POST['nom'];

    $descriptions=$_POST['descriptions'];


    $data = array(
        
        'application_id' => $application_id,

        'nom'=> $nom,

        'descriptions'=> $descriptions

    );

    $result=curl_post($uri, $token, $data);
  
    $entites=json_decode($result);

    $code = $entites->code;
        
    if($code ==201)
            {   
                require_once('composant/entite/ajouter/view/reponse_positive.php'); 
            }
        else    
            {
                require_once('composant/ajout_un/view/reponse_negative.php');   
            }


?>