<?php

$id=$_GET['id'];

$uri = $authority."/api/".$id;

$result=curl_get($uri, $token);

    $obj = json_decode($result);
                      
    $apis= $obj->apis;

    $code =  $obj->code;

    if($code ==200)
        {   
            $application_id=$apis[0]->application_id; 

            $couche=$apis[0]->couche;

            $compsant_id=$apis[0]->composant_id;
            
            $methode=$apis[0]->methode;
            
            $uri=$apis[0]->uri;
            

            $id=$apis[0]->id;
        
            require_once('composant/composant/supprimer/view/demande_suppression.php'); 
    }
else if ($code ==400)
    {
        echo $result; 
    }




?>