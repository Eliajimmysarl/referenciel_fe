<?php

    $uri =  $authority.'/composant/';

    $application_id=$_POST['application_id'];

    $couche=$_POST['couche'];

    $plateforme=$_POST['plateforme'];

    $entite_id=$_POST['entite_id'];

    $nom=$_POST['nom'];

    $descriptions=$_POST['descriptions'];

    $url_code=$_POST['url_code'];

    $data = array(
        
        'application_id' => $application_id,

        'couche'=> $couche,

        'plateforme'=> $plateforme,

        'entite_id'=> $entite_id,

        'nom'=> $nom,

        'descriptions'=> $descriptions,

        'url_code'=> $url_code
    
    );

    $result=curl_post($uri, $token, $data);
 
    $composant=json_decode($result);

    $code = $composant->code;
        
    if($code ==201)
            {   
                require_once('composant/composant/ajouter/view/reponse_positive.php'); 
            }
        else    
            {
                require_once('composant/composant/ajouter/view/reponse_negative.php');   
            }


?>