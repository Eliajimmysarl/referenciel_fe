<?php

    $uri =  $authority.'/donnee_echange/';

    $application_id=$_POST['application_id'];

   
    
    $data = array(

        'application_id'=> $application_id

       
    );

    $result=curl_get_data($uri, $token, $data);

    $obj = json_decode($result);   
       
    $donnee_echange= $obj->donnee_echange;

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