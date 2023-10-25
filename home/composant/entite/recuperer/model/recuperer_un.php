<?php

$id=$_GET['id'];

$uri = $authority."/entite/".$id;

$result=curl_get($uri, $token);

    $obj = json_decode($result);
                    
    $entites= $obj->entite;

    $code =  $obj->code;

    if($code ==200)
        {   
            $application_nom=$entites[0]->applications_nom; 

            $nom=$entites[0]->entite_nom;

            $descriptions=$entites[0]->descriptions;
            

            $id=$entites[0]->id;
        

          
            require_once('composant\entite\recuperer\view\recuperation_un.php'); 
        }
    else
        {
            echo  $textes;  
        }




?>