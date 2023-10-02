<?php
    
    $uri =$authority.'/composant/image/';

    $imageId=$_POST['id'];

    if (isset($_FILES['image']) && is_uploaded_file($_FILES['image']['tmp_name']))
        {
            $origine = $_FILES['image']['tmp_name']; 
        
            $nomphoto = $_FILES['image']['name'];
        
            $destination = './'.$_FILES['image']['name'];
        
            move_uploaded_file($origine,$destination);

            if (function_exists('curl_file_create')) 
                { // php 5.5+
                    $cFile = curl_file_create($destination);
                } 
            else 
                {
                    $cFile = '@' . realpath($destination);
                }

            $data = array(
                
                'fichier' => "image",
                
                'image_id' =>$imageId,
    
                'image'=> $cFile   

                );

            $result=curl_import($uri, $token,$data);

            unlink($destination);

            $obj = json_decode($result);  

            $message= $obj->message;

            $code =  $obj->code;

            if($code ==201)
                {   
                    require_once('composant/composant/import_image/view/reponse.php'); 

                }
            else
                {
                    echo " $message : $code";
                }
        }
    else
        {
            echo"Erreur importation : Verifiez qu'un fichier est importé ou le fichier importé ne dépasse pas 2Mo)";
        }

?>