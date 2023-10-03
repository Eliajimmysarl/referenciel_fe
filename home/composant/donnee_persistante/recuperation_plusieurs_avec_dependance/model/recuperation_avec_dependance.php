<?php

    $uri =  $authority.'/donnee_pesistante/';

    $application_id=$_POST['application_id'];

    $composant_id=$_POST['composant_id'];
    
    $data = array(

        'composant_id'=> $composant_id,

        'application_id'=> $application_id
    
    );

    $result=curl_get_data($uri, $token, $data);

    $obj = json_decode($result);   
       
    $donnee_pesistantes= $obj->donnee_pesistantes;

    $code = $obj->code;

    if($code ==200)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/donnee_pesistante/recuperation_plusieurs_avec_dependance/view/recuperation_plusieurs.php'); 
        }
        else
        {
            echo "verifier le code sources ";  
        }


?>