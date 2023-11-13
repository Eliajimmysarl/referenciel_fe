<?php

    $uri =  $authority.'/unite_organisation/';

    $application_id=$_POST['application_id'];

    $nom=$_POST['nom'];

    $description=$_POST['descriptions'];

   


    $data = array(
        
        'application_id' => $application_id,

        'nom'=> $nom,

        'descriptions'=> $description

    
    );
    $result=curl_post($uri, $token, $data);

    $unite_organisation=json_decode($result);
 
    $code = $unite_organisation->code;
        
    if($code ==201)
            {   
                require_once('composant/unite_organisation/ajouter/view/reponse_positive.php'); 
            }
        else    
            {
                require_once('composant/unite_organisation/ajouter/view/reponse_negative.php');   
            }


?>


