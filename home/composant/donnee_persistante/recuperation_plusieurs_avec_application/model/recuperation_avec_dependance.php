<?php


    $application_id=$_POST['application_id'];

    $uri = $authority."/donnee_persistante/";

    
    $data = array(


        'application_id'=> $application_id
    
    );

    $result=curl_get_data($uri, $token, $data);

    $obj = json_decode($result);   
    

    $donnee_persistantes= $obj->donnee_persistante;

    $code = $obj->code;

    if($code ==200)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/donnee_persistante/recuperation_plusieurs_avec_application/view/recuperation_plusieurs.php'); 
        }
        else
        {
            echo "verifier le code sources ";  
        }


?>