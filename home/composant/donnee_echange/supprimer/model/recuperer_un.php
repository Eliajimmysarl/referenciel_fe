<?php

<?php

$id=$_GET['id'];

$uri = $authority."/donnee_echange/".$id;

$result=curl_get($uri, $token);

    $obj = json_decode($result);
                      
    $donnee_echanges= $obj->donnee_echanges;

    $code =  $obj->code;

    if($code ==200)
        {   
            $nom=$donnee_echanges[0]->nom; 

            $type=$donnee_echanges[0]->type;

            $application_id=$donnee_echanges[0]->application_id;

            $composant_id=$donnee_echanges[0]->composant_id;
            
            $entite_id=$donnee_echanges[0]->entite_id;
            
            $descriptions=$donnee_echanges[0]->descriptions;
        
            $id=$donnee_echanges[0]->id;

        
            require_once('composant/donnee_echange/supprimer/view/demande_suppression.php'); 
    }
else if ($code ==400)
    {
        echo $result; 
    }




?>