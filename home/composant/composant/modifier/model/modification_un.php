<?php

    $id=$_POST['id'];

    $uri = $authority."/composant/".$id;

    $application_id=$_POST['application_id'];

    $couche=$_POST['couche'];

    $plateforme=$_POST['plateforme'];

    $entite_id=$_POST['entite_id'];

    $nom=$_POST['nom'];

    $descriptions=$_POST['description'];

    $url_code=$_POST['url_code'];


    $data = array(
            
            'application_id' => $application_id,
            
            'couche' => $couche,

            'plateforme' => $plateforme,

            'entite_id'=> $entite_id,

            'nom'=> $nom,

            'descriptions'=> $descriptions,

            'url_code'=> $url_code

    );    

    $result=curl_put($uri, $token,$data);
        
        $composant=json_decode($result);

        $code =  $composant->code;

        if($code ==200)
        
            {   
                require_once('composant/composant/modifier/view/reponse_positive.php');
            }
    
    
    
?>