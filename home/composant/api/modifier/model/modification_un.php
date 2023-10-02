<?php

    $id=$_POST['id'];

    $uri = $authority."/api/".$id;

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

    $result=curl_put($uri, $token,$data);
        
        $apis=json_decode($result);

        $code =  $apis->code;

        if($code ==200)
        
            {   
                require_once('composant/api/modifier/view/reponse_positive.php');
            }
    
    
    
?>