<?php

    $id=$_POST['id'];

    $uri = $authority."/planification/".$id;

    $user_id=$_POST['user_id'];

    $composant_id=$_POST['composant_id'];

    $application_id=$_POST['application_id'];

    $remarque=$_POST['remarque'];

    $status=$_POST['status'];

    $date_debut=$_POST['date_debut'];

    $date_fin=$_POST['date_fin'];


    $data = array(
        
        'user_id' => $user_id,

        'composant_id' => $composant_id,

        'application_id' => $application_id,

        'remarque'=> $remarque,

        'status'=> $status,

        'date_debut'=> $date_debut,

        'date_fin'=> $date_fin


    );    

    $result=curl_put($uri, $token,$data);
        echo json_encode($data);
        $planifications=json_decode($result);

        $code =  $planifications->code;

        if($code ==200)
        
            {   
                require_once('composant/planification/modifier/view/reponse_positive.php');
            }
    
    
    
?>