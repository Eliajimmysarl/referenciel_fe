<?php
  
  if (isSet($_POST['email']))
    {
        $url = 'http://api.eliajimmy.net/connecter/';

        //Recuperer les variables POST
        $email=$_POST['email'];
        $password=$_POST['password'];
        $type='externe';
        $ch = curl_init();
        // Setup request to send json via POST
        $data = array(
            'user_id'=> $email,
            'user_secret'=> $password,
            'user_type'=> $type
        );
        //Transform row int Json objet
        $payload = json_encode($data);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        // Return response instead of outputting
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result=curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        $client=json_decode($result);
        $code =  $client->code;
        if($code ==201)
            {   
                session_start();
                $token =  $client->token;
                $prenom =  $client->prenom;
                $nom =  $client->nom;
                $client_id =  $client->client_id;
                $telephone =  $client->telephone;
                $email =  $client->email;
                    
                $_SESSION['token'] = $token;
                $_SESSION['prenom'] = $prenom;
                $_SESSION['nom'] = $nom;
                $_SESSION['client_id'] = $client_id;
                $_SESSION['telephone'] = $telephone;
                $_SESSION['email'] = $email;

                header("Location:home/");            

            }
        else    
            {
               $erreur=  $client->message;
                $messageErreur= "<div class='col-md-12'><div class='alert alert-danger'> $code L'identifiant et/ou le mot de passe sont incorrects.</div></div>"; 
            }
    }
else
    {
        $messageErreur="";
        $email=""; 
    }

?>