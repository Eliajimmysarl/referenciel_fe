<?php

    $uri =  $authority.'/acteur/';

    $acteur_nom=$_POST['acteur_nom'];

 
    $data = array(


        'acteur_nom'=> $acteur_nom

    
    );

    $result=curl_get_data($uri, $token, $data);

    $obj = json_decode($result);   

    $acteurs= $obj->acteur;

    $code = $obj->code;

    if($code ==200)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant\acteur\recuperation_plusieurs_avec_acteur\view\recuperation_plusieurs.php'); 
        }
        else
        {
            echo "verifier le code sources ";  
        }


?>