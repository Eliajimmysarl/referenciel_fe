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

    $result=curl_put($uri, $token,$data);
        
    $composant_processus=json_decode($result);

    $code =  $composant_processus->code;

    if($code ==200)
        
            {   
                require_once('composant/composant_processus/modifier/view/reponse_positive.php');
            }
    
    
    
?>