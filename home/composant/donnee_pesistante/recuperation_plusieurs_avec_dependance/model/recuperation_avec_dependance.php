<?php

    $uri =  $authority.'/entites/';

    $selec=$_POST['selec'];

    $optionsRadios=$_POST['optionsRadios'];
    
    $data = array(

        'selec'=> $selec,

        'optionsRadios'=> $optionsRadios
    
    );

    $result=curl_get_data($uri, $token, $data);

    $obj = json_decode($result);   
       
    $entites= $obj->entite;

    $code = $obj->code;

    if($code ==200)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/recuperation_plusieurs_avec_dependance/view/recuperation_plusieurs.php'); 
        }
        else
        {
            echo "verifier le code sources ";  
        }


?>