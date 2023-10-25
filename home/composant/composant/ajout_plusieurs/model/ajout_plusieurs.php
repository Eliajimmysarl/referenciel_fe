<?php
    
    $uri =  $authority.'/composant/plusieurs/';

    $nombreLigne=$_POST['nombre_ligne'];

    $text=array();

    $data = array();

    for($i=0; $i < $nombreLigne; ++$i )
        {
            $aplication_id[$i][]= $_POST['application_'.$i];

            $entite_id[$i][]= $_POST['entite_'.$i];

            $nom[$i][]= $_POST['nom_'.$i];

            $couche[$i][]= $_POST['couche_'.$i];  

            $plateforme[$i][]= $_POST['plateforme_'.$i]; 
        
        }

    $data['text']= $text;

    $result=curl_post($uri, $token, $data);
  
    $composant=json_decode($result);

    $code = $composant->code;
        
    if($code ==201)
        {   
                require_once('composant/composant/ajout_plusieurs/view/reponse_positive.php'); 
        }
    else    
        {
                require_once('composant/composant/ajout_plusieurs/view/reponse_negative.php');   
        }
   
?>