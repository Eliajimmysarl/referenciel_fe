<?php

    $uri =  $authority.'/api/';

    $application_id=$_POST['application_id'];

    $composant_id=$_POST['composant_id'];

    $couche=$_POST['couche'];
    
    $data = array(

        'application_id'=> $application_id,

        'composant_id'=> $composant_id,

        'couche'=> $couche
    
    );

    $result=curl_get_data($uri, $token, $data);

    $obj = json_decode($result);   
       
    $apis= $obj->apis;

    $code = $obj->code;

    if($code ==200)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/api/recuperation_plusieurs_avec_dependance/view/recuperation_plusieurs.php'); 
        }
        else
        {
            echo "verifier le code sources ";  
        }


?>