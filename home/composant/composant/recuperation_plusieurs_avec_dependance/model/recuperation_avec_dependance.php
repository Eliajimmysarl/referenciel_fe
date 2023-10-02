<?php

    $uri =  $authority.'/composant/';

    $couche=$_POST['couche'];
    $plateforme=$_POST['plateforme'];

    $entite_id=$_POST['entite_id'];
    
    $data = array(

        'couche'=> $couche,

        'plateforme'=> $plateforme,

        'entite_id'=> $entite_id
    
    );

    $result=curl_get_data($uri, $token, $data);

    $obj = json_decode($result);   
       
    $composants= $obj->composants;

    $code = $obj->code;

    if($code ==200)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/composant/recuperation_plusieurs_avec_dependance/view/recuperation_plusieurs.php'); 
        }
        else
        {
            echo "verifier le code sources ";  
        }


?>