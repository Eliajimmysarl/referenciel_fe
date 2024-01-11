<?php

    $uri =  $authority.'/role/';

    $acteur_id=$_POST['acteur_id'];
    
    $data = array(

        'acteur_id'=> $acteur_id


    
    );

    $result=curl_get_data($uri, $token, $data);

    $obj = json_decode($result);   
      
    $roles= $obj->roles;
    
    $code = $obj->code;

    if($code ==200)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/role/recuperation_plusieurs_avec_acteur/view/recuperation_plusieurs.php'); 
        }
        else
        {
            echo "verifier le code sources ";  
        }


?>