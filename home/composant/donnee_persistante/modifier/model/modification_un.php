<?php

    $id=$_POST['id'];

    $uri = $authority."/donnee_pesistante/".$id;

    $application_id=$_POST['application_id'];

    $entite_id=$_POST['entite_id'];

    $nom=$_POST['nom'];

    $types=$_POST['types'];

    $taille=$_POST['taille'];

    $defaut=$_POST['defaut'];

    $valeur=$_POST['valeur'];

    $indexe=$_POST['indexe'];

    $cle_primaire=$_POST['cle_primaire'];

    $descriptions=$_POST['descriptions'];


    $data = array(
            
        'application_id' => $application_id,

        'entite_id' => $entite_id,

        'nom' => $nom,

        'types' => $types,

        'taille'=> $taille,

        'defaut'=> $defaut,

        'valeur'=> $valeur,

        'indexe'=> $indexe,

        'cle_primaire'=> $cle_primaire,

        'descriptions'=> $descriptions

    );    

    $result=curl_put($uri, $token,$data);
        
        $donnee_pesistantes=json_decode($result);

        $code =  $donnee_pesistantes->code;

        if($code ==200)
        
            {   
                require_once('composant/donnee_pesistante/modifier/view/reponse_positive.php');
            }
    
    
    
?>