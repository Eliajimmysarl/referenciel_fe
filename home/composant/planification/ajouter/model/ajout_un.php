<?php

    $uri =  $authority.'/planification/';

    $user_id=$_POST['user_id'];

    $composant_id=$_POST['composant_id'];

    $application_id=$_POST['application_id'];

    $remarque=$_POST['remarque'];


    $date_debut=$_POST['date_debut'];

    $date_fin=$_POST['date_fin'];


    $data = array(
        
        'user_id' => $user_id,

        'composant_id' => $composant_id,

        'application_id'=> $application_id,

        'remarque'=> $remarque,

       
        'date_debut'=> $date_debut,

        'date_fin'=> $date_fin

    );

    $result=curl_post($uri, $token, $data);
    
    $planification=json_decode($result);

    $code = $planification->code;

    if($code ==201)
            {   
                require_once('composant/planification/ajouter/view/reponse_positive.php'); 
            }
        else    
            {
                require_once('composant/planification/ajouter/view/reponse_negative.php');   
            }


?>