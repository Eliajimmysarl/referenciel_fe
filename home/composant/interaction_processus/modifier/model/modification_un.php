<?php

    $uri =  $authority.'/composant_processus/';

    $processus_id=$_POST['processus_id'];

 


    $data = array(
        
        'processus_id' => $processus_id

       
 

    );    

    $result=curl_put($uri, $token,$data);
        
    $interaction_processus=json_decode($result);

    $code =  $interaction_processus->code;

    if($code ==200)
        
            {   
                require_once('composant/interaction_processus/modifier/view/reponse_positive.php');
            }
    
    
    
?>