<?php
    
    $uri =  $authority.'/entites/plusieurs/';

    $nombreLigne=$_POST['nombre_ligne'];

    $text=array();

    $data = array();

    for($i=0; $i < $nombreLigne; ++$i )
        {
            $text[$i][]= $_POST['text_'.$i];

            $text[$i][]= $_POST['select_'.$i];           
        }

    $data['text']= $text;

    $result=curl_post($uri, $token, $data);
  
    $entites=json_decode($result);

    $code = $entites->code;
        
    if($code ==201)
        {   
                require_once('composant/ajout_plusieurs/view/reponse_positive.php'); 
        }
    else    
        {
                require_once('composant/ajout_plusieurs/view/reponse_negative.php');   
        }
   
?>