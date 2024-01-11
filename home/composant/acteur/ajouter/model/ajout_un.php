<?php

    $uri =  $authority.'/acteur/';

    $application_id=$_POST['application_id'];

    $unite_organisation_id=$_POST['unite_organisation_id'];

    $nom=$_POST['nom'];

    $types=$_POST['types'];

    $descriptions=$_POST['descriptions'];


    $data = array(
        
        'application_id' => $application_id,

        'unite_organisation_id'=> $unite_organisation_id,

        'nom'=> $nom,

        'types'=> $types,

        'descriptions'=> $descriptions
    
    );
    $result=curl_post($uri, $token, $data);

    $acteur=json_decode($result);
 
    $code = $acteur->code;
        
    if($code ==201)
            {   
                require_once('composant/acteur/ajouter/view/reponse_positive.php'); 
            }
        else    
            {
                require_once('composant/acteur/ajouter/view/reponse_negative.php');   
            }


?>


