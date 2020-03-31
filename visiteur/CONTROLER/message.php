<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Envoi d'un email par formulaire</title>
</head>

<body>
    <?php
     if (isset($_POST['message'])) {
        $position_arobase = strpos($_POST['email'], '@');
        if($position_arobase === false)
            {echo '<p>Votre email doit comporter un arobase.</p>';}
        else {
            $message = "Nom:".$_POST['nom']."\r\n".'Prénom:'.$_POST['firstname']."\r\n".'E-mail: '.$_POST['email']."\r\n".$_POST['message'];
         mail('ytranchot@gmail.com','Envoyez depuis le site yoann-tranchot.alwaysdata.net',$message);
                    echo 'Message envoyé';}
            
    }error_get_last();
    ?>
</body>

</html>