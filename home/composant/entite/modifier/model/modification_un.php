<?php

    $id=$_POST['id'];

    $uri = $authority."/entite/".$id;

        $application_id=$_POST['application_id'];

        $nom=$_POST['nom'];

        $descriptions=$_POST['description'];

      

    $data = array(
            
            'application_id' => $application_id,
            
            'nom' => $nom,

            'descriptions' => $descriptions


    );    

    $result=curl_put($uri, $token,$data);
        
        $entite=json_decode($result);

        $code =  $entite->code;

        if($code ==200)
        
            {   
                require_once('composant/entite/modifier/view/reponse_positive.php');
            }
    
    
    
?>