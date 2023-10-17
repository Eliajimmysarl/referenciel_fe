<?php

    $uri =  $authority.'/api/';

    $composant_id=$_POST['composant_id'];

 
    $data = array(


        'composant_id'=> $composant_id

    
    );

    $result=curl_get_data($uri, $token, $data);

    $obj = json_decode($result);   
       
    $apis= $obj->api;

    $code = $obj->code;

    if($code ==200)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant\api\recuperation_plusieurs_avec_composant\view\recuperation_plusieurs.php'); 
        }
        else
        {
            echo "verifier le code sources ";  
        }


?>