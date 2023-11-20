<?php

    $id=$_POST['id'];

    $uri = $authority."/interaction_entite/".$id;

    $entite_id=$_POST['entite_id'];

    $composant_id=$_POST['composant_entite_id'];

    $model=$_POST['model'];

    $view=$_POST['view'];

    $interface=$_POST['interface'];

    $service=$_POST['service'];

    $descriptions=$_POST['descriptions'];
 


    $data = array(
        
        'entite_id' => $entite_id,

        'composant_id'=> $composant_id,

        'model'=> $model,
        'view'=> $view,
        'interface'=> $interface,
        'services'=> $service,

        'descriptions'=> $descriptions
    
    );
   
    $result=curl_put($uri, $token,$data);
        
    $api=json_decode($result);

    $code =  $api->code;

    if($code ==200)
        
            {   
                require_once('composant/interaction_entite/modifier/view/reponse_positive.php');
            }
    
    
    
?>