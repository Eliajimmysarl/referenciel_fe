<?php

$id=$_GET['id'];

$uri = $authority."/entites/".$id;

$result=curl_get($uri, $token);

    $obj = json_decode($result);
                      
    $entites= $obj->test;

    $code =  $obj->code;

    if($code ==200)
        {   
            $texte=$entites[0]->texte; 

            $selec=$entites[0]->selec;

            $dates=$entites[0]->dates;
            
            $telephone=$entites[0]->telephone;
            
            $email=$entites[0]->email;
            
            $optionsRadios=$entites[0]->optionsRadios;
            

            $id=$entites[0]->id;

        
        
        
        require_once('composant/modification_un/view/demande_modification.php'); 
    }
else if ($code ==400)
    {
        echo $result; 
    }




?>