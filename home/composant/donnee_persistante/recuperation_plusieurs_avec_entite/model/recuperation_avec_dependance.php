<?php

    $entite_id=$_POST['entite_id'];


    $uri = $authority."/donnee_persistante/";
    
    $data = array(

        'entite_id'=> $entite_id

   
    
    );

    $result=curl_get_data($uri, $token, $data);

    $obj = json_decode($result);   
 
    $donnee_persistantes= $obj->donnee_persistante;

    $code = $obj->code;

    if($code ==200)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/donnee_persistante/recuperation_plusieurs_avec_entite/view/recuperation_plusieurs.php'); 
        }
        else
        {
            echo "verifier le code sources ";  
        }


?>