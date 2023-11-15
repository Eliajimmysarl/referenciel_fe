<?php

    $uri =  $authority.'/composant_processus/';

    $processus_id=$_POST['processus_id'];

    $activite=$_POST['activite'];

    $lien_cod=$_POST['lien_code'];

    $descriptions=$_POST['descriptions'];


    $data = array(
        
        'processus_id' => $processus_id,

        'activite'=> $activite,

        'lien_code'=> $lien_code,

        'descriptions'=> $descriptions
 
    );
    $result=curl_post($uri, $token, $data);

    $composant_processus=json_decode($result);
 
    $code = $composant_processus->code;
        
    if($code ==201)
            {   
                require_once('composant/composant_processus/ajouter/view/reponse_positive.php'); 
            }
        else    
            {
                require_once('composant/composant_processus/ajouter/view/reponse_negative.php');   
            }


?>


