<?php

    $uri =  $authority.'/donnee_echange/';

    $nom=$_POST['nom'];

    $types=$_POST['types'];

    $application_id=$_POST['application_id'];

    $composant_id=$_POST['composant_id'];

    $entite_id=$_POST['entite_id'];

    $descriptions=$_POST['descriptions'];


    $data = array(
        
        'nom' => $nom,

        'types'=> $types,

        'application_id'=> $application_id,

        'composant_id'=> $composant_id,

        'entite_id'=> $entite_id,

        'descriptions'=> $descriptions

    
    );

    $result=curl_post($uri, $token, $data);
  
    $donnee_echanges=json_decode($result);

    $code = $donnee_echanges->code;
        
    if($code ==201)
            {   
                require_once('composant/donnee_echange/ajouter/view/reponse_positive.php'); 
            }
        else    
            {
                require_once('composant/donnee_echange/ajouter/view/reponse_negative.php');   
            }


?>