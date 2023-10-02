<?php

    $uri =  $authority.'/api/';

    $application_id=$_POST['application_id'];

    $couche=$_POST['couche'];

    $composant_id=$_POST['composant_id'];

    $methode=$_POST['methode'];

    $uri=$_POST['uri'];


    $data = array(
        
        'application_id' => $application_id,

        'couche'=> $couche,

        'composant_id'=> $composant_id,

        'methode'=> $methode,

        'uri'=> $uri
    
    );

    $result=curl_post($uri, $token, $data);
  
    $apis=json_decode($result);

    $code = $entites->code;
        
    if($code ==201)
            {   
                require_once('composant/api/ajouter/view/reponse_positive.php'); 
            }
        else    
            {
                require_once('composant/api/ajouter/view/reponse_negative.php');   
            }


?>


