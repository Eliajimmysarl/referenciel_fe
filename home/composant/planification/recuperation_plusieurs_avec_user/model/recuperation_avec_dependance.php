<?php

$user_id=$_POST['user_id'];

$uri = $authority."/planification/".$user_id;

    
    $data = array(

        'user_id'=> $user_id

    
    );

    $result=curl_get_data($uri, $token, $data);

    $obj = json_decode($result);   
       
    $planifications= $obj->planification;

    $code = $obj->code;

    if($code ==200)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/planification/recuperation_plusieurs_avec_user/view/recuperation_plusieurs.php'); 
        }
        else
        {
            echo "verifier le code sources ";  
        }


?>