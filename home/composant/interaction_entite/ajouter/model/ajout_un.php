<?php

    $uri =  $authority.'/interaction_entite/';

    $entite_id=$_POST['entite_id'];

    $composant_id=$_POST['composant_entite_id'];

    $view=$_POST['view'];

    $model=$_POST['model'];

    $interface=$_POST['interface'];

    $service=$_POST['service'];

    $descriptions=$_POST['descriptions'];
 


    $data = array(
        
        'entite_id' => $entite_id,

        'composant_id'=> $composant_id,

        'view'=> $view,
        
        'model'=> $model,

        'interface'=> $interface,

        'services'=> $service,

        'descriptions'=> $descriptions
    
    );
    $result=curl_post($uri, $token, $data);

    $interaction_entite=json_decode($result);
 
    $code = $interaction_entite->code;
        
    if($code ==201)
            {   
                require_once('composant/interaction_entite/ajouter/view/reponse_positive.php'); 
            }
        else    
            {
                require_once('composant/api/ajouter/view/reponse_negative.php');   
            }


?>


