<?php

    $uri =  $authority.'/planification/';

    $user_id=$_POST['user_id'];

    $composant_id=$_POST['composant_id'];

    $remarque=$_POST['remarque'];

    $statut=$_POST['statut'];

    $date_debut=$_POST['date_debut'];

    $date_fin=$_POST['date_fin'];


    $data = array(
        
        'user_id' => $user_id,

        'composant_id' => $composant_id,

        'remarque'=> $remarque,

        'statut'=> $statut,

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