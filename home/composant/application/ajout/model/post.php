<?php

    $uri =  $authority.'/application/';

    $nom=$_POST['nom'];

    $description=$_POST['description'];

    
    $data = array(
        
        'nom' => $nom,

        'description'=> $description
    
    );

    $result=curl_post($uri, $token, $data);
  
    $entites=json_decode($result);

    $code = $entites->code;
        
    if($code ==201)
            {   
                require_once('composant/application/view/reponse_positive.php'); 
            }
        else    
            {
                require_once('composant/application/view/reponse_negative.php');   
            }


?>