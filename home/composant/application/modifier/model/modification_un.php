<?php

    $id=$_POST['id'];

    $uri = $authority."/application/".$id;

        $nom=$_POST['nom'];

        $descriptions=$_POST['description'];

        $lien_web=$_POST['lien_web'];

        $lien_android=$_POST['lien_android'];

        $lien_ios=$_POST['lien_ios'];

        $ussd_vodacom=$_POST['ussd_vodacom'];
        
        $ussd_africell=$_POST['ussd_africell'];

        $ussd_orange=$_POST['ussd_orange'];


    $data = array(
            
            'nom' => $nom,
            
            'descriptions' => $descriptions,

            'lien_web' => $lien_web,

            'lien_android'=> $lien_android,

            'lien_ios'=> $lien_ios,

            'ussd_vodacom'=> $ussd_vodacom,

            'ussd_africell'=> $ussd_africell,

            'ussd_orange'=> $ussd_orange

    );    

    $result=curl_put($uri, $token,$data);
        
        $applications=json_decode($result);

        $code =  $applications->code;

        if($code ==200)
        
            {   
                require_once('composant/application/modifier/view/reponse_positive.php');
            }
    
    
    
?>