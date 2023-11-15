<?php

    $uri =  $authority.'/interaction_processus/';

    $processus_id=$_POST['processus_id'];



    $data = array(
        
        'processus_id' => $processus_id

        
    );
    $result=curl_post($uri, $token, $data);

    $interaction_processus=json_decode($result);
 
    $code = $interaction_processus->code;
        
    if($code ==201)
            {   
                require_once('composant/interaction_processus/ajouter/view/reponse_positive.php'); 
            }
        else    
            {
                require_once('composant/composant_processus/ajouter/view/reponse_negative.php');   
            }


?>


