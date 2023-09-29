<?php

    $id=$_POST['id'];

    $uri = $authority."/entites/".$id;

        $texte=$_POST['texte'];

        $selec=$_POST['selec'];

        $dates=$_POST['dates'];

        $email=$_POST['email'];

        $telephone=$_POST['telephone'];

        $optionsRadios=$_POST['optionsRadios'];
        
        $password=password_hash($_POST['password'], PASSWORD_DEFAULT);
        
        $mode="formulaire";


    $data = array(
            
            'texte' => $texte,
            
            'selec' => $selec,

            'dates' => $dates,

            'email'=> $email,

            'telephone'=> $telephone,

            'password'=> $password,

            'optionsRadios'=> $optionsRadios

    );    

    $result=curl_put($uri, $token,$data);
        
        $test=json_decode($result);

        $code =  $test->code;

        if($code ==200)
        
            {   
                require_once('composant/modification_un/view/reponse_positive.php');
            }
    
    
    
?>