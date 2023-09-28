<?php

    $uri =  $authority.'/entites/';

    $texte=$_POST['text'];

    $selec=$_POST['selec'];

    $telephone=$_POST['telephone'];

    $email=$_POST['email'];

    $dates=$_POST['date'];

    $passwords=$_POST['password'];

    $optionsRadios=$_POST['optionsRadios'];

    $data = array(
        
        'texte' => $texte,

        'selec'=> $selec,

        'telephone'=> $telephone,

        'email'=> $email,

        'dates'=> $dates,

        'passwords'=> $passwords,

        'optionsRadios'=> $optionsRadios
    
    );

    $result=curl_post($uri, $token, $data);
  
    $entites=json_decode($result);

    $code = $entites->code;
        
    if($code ==201)
            {   
                require_once('composant/ajout_un/view/reponse_positive.php'); 
            }
        else    
            {
                require_once('composant/ajout_un/view/reponse_negative.php');   
            }


?>