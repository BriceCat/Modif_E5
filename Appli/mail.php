<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/Exception.php';
require './PHPMailer/src/SMTP.php';

if(isset($_POST['submit'])) {
    // Vérifier si l'utilisateur a coché la case "agree"
    if(!isset($_POST['agree'])) {
        echo '<script>alert("Veuillez accepter les conditions d\'utilisation.");</script>';
        return;
    }

    // Récupération des données du formulaire
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Créer un objet PHPMailer
    $mail = new PHPMailer();
    $mail->CharSet = 'UTF-8';

    // Configurer le serveur SMTP d'Alwaysdata
    $mail->isSMTP();
    $mail->Host = 'smtp-keiden.alwaysdata.net';
    $mail->SMTPAuth = true;
    $mail->Username = 'keiden@alwaysdata.net';
    $mail->Password = '35383113';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Définir l'expéditeur et le destinataire
    $mail->setFrom($email, $name);
    $mail->addAddress('keidenart@gmail.com');

    // Définir le sujet et le corps du message
    $mail->Subject = 'Nouveau message de '.$name;
    $mail->Body = '
        <h3>Nouveau message de '.$name.'</h3>
        <p><strong>De :</strong> '.$name.' ('.$email.')</p>
        <p><strong>Message :</strong></p>
        <p>'.$message.'</p>
    ';

    // Envoi du message
    if($mail->send()) {
        echo '<script>document.getElementById("popup").className = "success";</script>';
    } else {
        echo '<script>document.getElementById("popup").className = "error";</script>';
    }
}
?>