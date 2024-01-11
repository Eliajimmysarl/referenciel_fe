<?php

    $uri =  $authority.'/composant_processus/';

    $processus_id=$_POST['processus_id'];
    
    $data = array(

        'processus_id'=> $processus_id


    
    );

    $result=curl_get_data($uri, $token, $data);

    $obj = json_decode($result);   
       
    $composant_processuss= $obj->composant_processus;
    
    $code = $obj->code;

    if($code ==200)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/composant_processus/recuperation_plusieurs_avec_processus/view/recuperation_plusieurs.php'); 
        }
        else
        {
            echo "verifier le code sources ";  
        }


?>