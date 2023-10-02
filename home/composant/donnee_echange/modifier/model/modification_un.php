<?php

    $id=$_POST['id'];

    $uri = $authority."/donnee_echange/".$id;

    $nom=$_POST['nom'];

    $type=$_POST['type'];

    $application_id=$_POST['application_id'];

    $composant_id=$_POST['composant_id'];

    $entite_id=$_POST['entite_id'];

    $descriptions=$_POST['descriptions'];



    $data = array(
            
            'nom' => $nom,
            
            'type' => $type,

            'application_id' => $application_id,

            'composant_id'=> $composant_id,

            'entite_id'=> $entite_id,

            'descriptions'=> $descriptions


    );    

    $result=curl_put($uri, $token,$data);
        
        $donnee_echanges=json_decode($result);

        $code =  $donnee_echanges->code;

        if($code ==200)
        
            {   
                require_once('composant/donnee_echange/modifier/view/reponse_positive.php');
            }
    
    
    
?>