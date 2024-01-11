<?php

    $uri =  $authority.'/processus/';

    $application_id=$_POST['application_id'];

    $nom=$_POST['nom'];

    $descriptions=$_POST['descriptions'];



    $data = array(
        
        'application_id' => $application_id,

        'nom'=> $nom,

        'descriptions'=> $descriptions

      
    
    );
    $result=curl_post($uri, $token, $data);

    $processus=json_decode($result);
 
    $code = $processus->code;
        
    if($code ==201)
            {   
                require_once('composant/processus/ajouter/view/reponse_positive.php'); 
            }
        else    
            {
                require_once('composant/processus/ajouter/view/reponse_negative.php');   
            }


?>


