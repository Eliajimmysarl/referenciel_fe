<?php

    $uri =  $authority.'/role/';

    $application_id=$_POST['application_id'];

    $acteur_id=$_POST['acteur_id'];

    $unite_organisation_id=$_POST['unite_organisation_id'];

    $nom=$_POST['nom'];

  

    $descriptions=$_POST['descriptions'];


    $data = array(
        
        'acteur_id' => $acteur_id,

        'application_id' => $application_id,

        'unite_organisation_id'=> $unite_organisation_id,

        'nom'=> $nom,

        'descriptions'=> $descriptions
    
    );
    $result=curl_post($uri, $token, $data);

    $acteur=json_decode($result);
 
    $code = $acteur->code;
        
    if($code ==201)
            {   
                require_once('composant/role/ajouter/view/reponse_positive.php'); 
            }
        else    
            {
                require_once('composant/role/ajouter/view/reponse_negative.php');   
            }


?>


