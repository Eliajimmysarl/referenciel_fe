<?php

$id=$_GET['id'];

$uri = $authority."/application/".$id;

$result=curl_get($uri, $token);

    $obj = json_decode($result);
                      
    $applications= $obj->applications;

    $code =  $obj->code;

    if($code ==200)
        {   
            $nom=$applications[0]->nom; 

            $descriptions=$applications[0]->descriptions;

            $lien_web=$applications[0]->lien_web;
            
            $lien_android=$applications[0]->lien_android;
            
            $lien_ios=$applications[0]->lien_ios;
            
            $ussd_vodacom=$applications[0]->ussd_vodacom;

             $ussd_africell=$applications[0]->ussd_africell;

             $ussd_orange=$applications[0]->ussd_orange;
            

            $id=$applications[0]->id;
        
            require_once('composant/application/supprimer/view/demande_suppression.php'); 
    }
else if ($code ==400)
    {
        echo $result; 
    }




?>