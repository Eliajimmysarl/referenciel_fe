<?php

    $uri =  $authority.'/acteur/';

    $unite_organisation_id=$_POST['unite_organisation_id'];

 
    $data = array(


        'unite_organisation_id'=> $unite_organisation_id

    
    );

    $result=curl_get_data($uri, $token, $data);

    $obj = json_decode($result);   
       
    $acteurs= $obj->acteur;

    $code = $obj->code;

    if($code ==200)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant\acteur\recuperation_plusieurs_avec_organisation\view\recuperation_plusieurs.php'); 
        }
        else
        {
            echo "verifier le code sources ";  
        }


?>