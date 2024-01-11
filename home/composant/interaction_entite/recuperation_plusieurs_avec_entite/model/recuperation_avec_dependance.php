<?php


    $uri = $authority."/interaction_entite/";
   
    $entite_id=$_POST['entite_id'];
    
    $data = array(

        'entite_id'=> $entite_id,

    );

    $result=curl_get_data($uri, $token, $data);

    $obj = json_decode($result);   
       
    $interaction_entites= $obj->interaction_entite;
    $code = $obj->code;

    if($code ==200)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/interaction_entite/recuperation_plusieurs_avec_entite/view/recuperation_plusieurs.php'); 
        }
        else
        {
            echo "verifier le code sources ";  
        }


?>