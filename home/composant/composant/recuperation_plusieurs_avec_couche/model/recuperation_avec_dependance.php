<?php

    $uri =  $authority.'/composant/';

    $couche=$_POST['couche'];
   
    
    $data = array(

        'couche'=> $couche,

    );

    $result=curl_get_data($uri, $token, $data);

    $obj = json_decode($result);   
       
    $composants= $obj->composant;

    $code = $obj->code;

    if($code ==200)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/composant/recuperation_plusieurs_avec_couche/view/recuperation_plusieurs.php'); 
        }
        else
        {
            echo "verifier le code sources ";  
        }


?>