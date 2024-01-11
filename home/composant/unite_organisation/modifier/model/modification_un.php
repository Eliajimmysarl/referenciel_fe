<?php

    $id=$_POST['id'];

    $uri = $authority."/unite_organisation/".$id;

    $application_id=$_POST['application_id'];

    $nom=$_POST['nom'];

    $description=$_POST['descriptions'];

   

    $data = array(
        
        'application_id' => $application_id,

        'nom'=> $nom,

        'descriptions'=> $description

    );    

    $result=curl_put($uri, $token,$data);
        
    $unite_organisation=json_decode($result);

    $code =  $unite_organisation->code;

    if($code ==200)
        
            {   
                require_once('composant/api/modifier/view/reponse_positive.php');
            }
    
    
    
?>