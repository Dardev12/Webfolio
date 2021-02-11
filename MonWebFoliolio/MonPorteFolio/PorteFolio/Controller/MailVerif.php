
<?php
ini_set('session.use_only_cookies', "1");
ini_set("SMTP","ssl://smtp.gmail.com");
ini_set("smtp_port","465");

if(isset($_POST['email'])&&isset($_POST['message'])){

    $email=htmlentities($_POST['email']);
    $message=htmlentities($_POST['message']);


//Pour définir chaque input du formulaire, ajouter le signe de dollar devant

    $msg = "E-Mail:\t$email\n";
    $msg .= "Message:\t$message\n\n";
//Pourait continuer ainsi jusqu'à la fin du formulaire

    $recipient = "Dardevpro@outlook.com";
    $subject = "Question Site PorteFolio";

    $additional_params = "From: Mon test de formulaire<> \n";
    $additional_params .= "Reply-To: $email\n\n";

    mail($recipient, $subject, $msg, $additional_params);



}else{
    require('view/viewApropos.php');
}


?>