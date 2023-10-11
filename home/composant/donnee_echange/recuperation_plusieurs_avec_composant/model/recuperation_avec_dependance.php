<?php

    $composant_id=$_POST['composant_id'];

    $uri = $authority."/donnee_echange/".$composant_id;

  
    $data = array(

      

        'composant_id'=> $composant_id,

     
    
    );

    $result=curl_get_data($uri, $token, $data);

    $obj = json_decode($result);   
       
    $donnee_echanges= $obj->donnee_echange;

    $code = $obj->code;

    if($code ==200)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/donnee_echange/recuperation_plusieurs_avec_composant/view/recuperation_plusieurs.php'); 
        }
        else
        {
            echo "verifier le code sources ";  
        }


?>