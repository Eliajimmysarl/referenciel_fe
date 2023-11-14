<?php

    $id=$_POST['id'];

    $uri = $authority."/role/".$id;

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

    $result=curl_put($uri, $token,$data);
        
    $role=json_decode($result);

    $code =  $role->code;

    if($code ==200)
        
            {   
                require_once('composant/role/modifier/view/reponse_positive.php');
            }
    
    
    
?>