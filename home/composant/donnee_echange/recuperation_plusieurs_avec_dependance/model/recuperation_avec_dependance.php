<?php

    $uri =  $authority.'/donnee_echange/';

    $application_id=$_POST['application_id'];

    $composant_id=$_POST['composant_id'];

    $entite_id=$_POST['entite_id'];
    
    $data = array(

        'application_id'=> $application_id,

        'composant_id'=> $composant_id,

        'entite_id'=> $entite_id
    
    );

    $result=curl_get_data($uri, $token, $data);

    $obj = json_decode($result);   
       
    $donnee_echanges= $obj->donnee_echanges;

    $code = $obj->code;

    if($code ==200)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/donnee_echange/recuperation_plusieurs_avec_dependance/view/recuperation_plusieurs.php'); 
        }
        else
        {
            echo "verifier le code sources ";  
        }


?>