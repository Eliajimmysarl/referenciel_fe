<?php

$id=$_GET['id'];

$uri = $authority."/unite_organisation/".$id;

$result=curl_get($uri, $token);

    $obj = json_decode($result);
                      
    $unite_oganisations= $obj->unite_organisation;

    $code =  $obj->code;

    if($code ==200)
        {   
         
            $application_nom=$unite_oganisations[0]->applications_nom;

            $description=$unite_oganisations[0]->descriptions;
            
          
            $id=$unite_oganisations[0]->id;
        
            require_once('composant/unite_organisation/supprimer/view/demande_suppression.php'); 
    }
else if ($code ==400)
    {
        echo $result; 
    }




?>