<?php

    $uri =  $authority.'/api/';

    $application_id=$_POST['application_id'];

    $entite_id=$_POST['entite_id'];

    $composant_id=$_POST['composant_id'];

    $methode=$_POST['methode'];

    $urir=$_POST['uri'];


    $data = array(
        
        'application_id' => $application_id,

        'entite_id'=> $entite_id,

        'composant_id'=> $composant_id,

        'methode'=> $methode,

        'uri'=> $urir
    
    );
    $result=curl_post($uri, $token, $data);
  
    $api=json_decode($result);
 
    $code = $api->code;
        
    if($code ==201)
            {   
                require_once('composant/api/ajouter/view/reponse_positive.php'); 
            }
        else    
            {
                require_once('composant/api/ajouter/view/reponse_negative.php');   
            }


?>


