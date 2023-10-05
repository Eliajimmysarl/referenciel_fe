<?php

    $uri =  $authority.'/donnee_persistante/';

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

    $result=curl_post($uri, $token, $data);
  
    $donnee_persistante=json_decode($result);

    $code = $donnee_persistante->code;
        
    if($code ==201)
            {   
                require_once('composant/donnee_persistante/ajouter/view/reponse_positive.php'); 
            }
        else    
            {
                require_once('composant/donnee_persistante/ajouter/view/reponse_negative.php');   
            }


?>