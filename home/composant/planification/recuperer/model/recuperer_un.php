<?php

$id=$_GET['id'];

$uri = $authority."/planification/".$id;

$result=curl_get($uri, $token);

    $obj = json_decode($result);
    echo"$result";
    $planifications= $obj->planification;

    $code =  $obj->code;

    if($code ==200)
        {   
            $user_id=$planifications[0]->user_id; 

            $composant_id=$planifications[0]->composant_id;

            $remarque=$planifications[0]->remarque;

            $statut=$planifications[0]->statut;

            $date_debut=$planifications[0]->date_debut;
            
            $date_fin=$planifications[0]->date_fin;

            $id=$planifications[0]->id;
          
            require_once('composant/planification/recuperer/view/recuperation_un.php'); 
        }
    else
        {
            echo  $textes;  
        }




?>