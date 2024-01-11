<?php

    $id=$_POST['id'];

    $uri = $authority."/processus/".$id;

    $application_id=$_POST['application_id'];

    $nom=$_POST['nom'];

    $descriptions=$_POST['descriptions'];



    $data = array(
        
        'application_id' => $application_id,

        'nom'=> $nom,

        'descriptions'=> $descriptions

      
    
    );    

    $result=curl_put($uri, $token,$data);
        
    $rocessus=json_decode($result);

    $code =  $rocessus->code;

    if($code ==200)
        
            {   
                require_once('composant/processus/modifier/view/reponse_positive.php');
            }
    
    
    
?>