
<?php

    $uri =  $authority.'/application/';

    $nom=$_POST['nom'];

    $descriptions=$_POST['description'];

    $lien_web=$_POST['lien_web'];

    $lien_android=$_POST['lien_android'];

    $lien_ios=$_POST['lien_ios'];

    $ussd_vodacom=$_POST['ussd_vodacom'];

    $ussd_orange=$_POST['ussd_orange'];

    $ussd_africell=$_POST['ussd_africell'];

    $data = array(
        
        'nom' => $nom,

        'descriptions'=> $descriptions,

        'lien_web'=> $lien_web,

        'lien_android'=> $lien_android,

        'lien_ios'=> $lien_ios,

        'ussd_vodacom'=> $ussd_vodacom,

        'ussd_africell'=> $ussd_africell,

        'ussd_orange'=> $ussd_orange
    
    );

    $result=curl_post($uri, $token, $data);
  
    $application=json_decode($result);

    $code = $application->code;
        
    if($code ==201)
            {   
                require_once('composant/application/ajouter/view/reponse_positive.php'); 
            }
        else    
            {
                require_once('composant/application/ajouter/view/reponse_negative.php');   
            }


?>