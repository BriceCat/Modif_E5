<?php
session_start();

// Vérifier si la variable de session "loggedin" existe et est définie à true
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: conn.php");
    exit();
}
?>



<!DOCTYPE html>
<html lang="fr">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
        <title>
            Commission info
        </title>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="commStyle.css"/>
        <link rel="icon" type="image/png" sizes="25x25" href="Images/icon.png">
</head>
<body>
<br>
<br>

	<div class="container col-md-7 py-5">


        <!--entête-->

        <div class="container incontainer py-5">
        <section class="d-flex w-100 h-100 flex-column justify-content-center align-items-cente">
            <h2 class="text-center">Commissions Info</h2>

            <p>Status :</p>
            <h1 class="text-center"> OPEN !</h1>
        </section>
        </div>

        <!--images-->

        <br>
        <div class="row">
            <div class="col-sm-4">
                <img src="Images/img1.jpg" class="img-fluid">
            </div>
            <div class="col-sm-4">
                <img src="Images/img2.jpg" class="img-fluid">
            </div>
            <div class="col-sm-4">
                <img src="Images/img3.jpg" class="img-fluid">
            </div>
        </div>

        <!--Terms & conditions-->

        <br>
        <h3 class="text-center">Terms & Conditions</h3>
        <br>
        <h4 class="text-center">
            First thing first, keep in mind that i can reject any commissons<br>
            if i feel like they are unsuitable or beyond my skillset<br>
            or cancel it if the commissioner is disrespectful or don't respect the terms and conditions at any time of the project !<br><br>
            <strong style="color: #FFFFFF">Please be patient !</strong><br>
            Keep in mind that i'm not a home durring the week because of my studies which means that i can only draw digital art during week-ends and vacations !<br><br>
            Your commission will be registered to the<a href="https://keiden.alwaysdata.net/WaitList.php" style="color: #EB5E5E">[Wait-List]</a>as soon as the payement is sended.<br><br>
            The commissioner can cancel a commission <strong style="color: #FFFFFF">BEFORE</strong> i start the <em>colors</em><br>
            and won't be refunded after the commissioner aproved the <em>LineArt</em>.<br><br>
            In the event that a commission is canceled, I agree to fully refund the commissioner WIP shots will be sended to the commissioner once a step is done or at the
            commissioner's request
        </h4>
        <br><br>

        <h4>Here's the different steps :</h4><br><br>
        <h5>
            <ul>
                <li><em>Rough sketch (For the poses/ general idea)</em></li>
                <li><em>Clean sketch</em></li>
                <li><em>LineArt (Cleaned piece)</em></li>
                <li><em>Colors and lights (Finished piece)</em></li>
            </ul>
        </h5>

        <br><br>
        <h3 class="text-center">What can i do ?</h3>
        <br>
        <h4 class="text-center">
            Digital / Traditional art<br>
            Character sketch<br>
            Clean Character (Simple background)<br>
            Scenes (Cleaned Character + Background)<br>
            Character sheet<br>
            Social medias icons<br>
            Humans<br>
            Feral animals<br>
            Anthropomorphised animals<br>
            SFW<br>
            NSFW (Characters must be 18+ and no chibi NSFW)<br>
            Soft gore (Blod, scars)<br>
            Chibis
        </h4>


        <br><br>
        <h3 class="text-center">What i WON'T do ?</h3>
        <br>
        <h4 class="text-center">
            Hard gore (organs, death, mutilation,...etc)<br>
            Hard fetishes (Scat, Vomit,...etc)<br>
            Pedo, Zoo, Incest,...etc (Will be blocked and<br>
            the commission will be rejected)
        </h4>

        <br><br>
        <h3 class="text-center">My strengths</h3>
        <br>
        <h4 class="text-center">
            Anthro / Feral animals<br>
            Monsters / Beasts<br>
            Humanoids<br>
            Fantasy<br>
            Strong expressions<br>
            Natural backgrounds<br>
            Cute scenes
        </h4>


        <br><br>
        <h3 class="text-center">My weaknesses</h3>
        <br>
        <h4 class="text-center">
            Complex backgrounds<br>
            Highly detailed characters / clothes<br>
            Realism
        </h4>


        <br><br>
        <h3 class="text-center">Prices $$$</h3>
        <br>
        <h4 class="text-center">
            - <strong>Icon</strong> : 5$<br>
            - <strong>Sketch</strong> : 10$ + 5$ per additional characters<br>
            - <strong>Chibi</strong> : 15$ + 5$ per additional characters<br>
            - <strong>Head shot</strong> : 20$ + 10$ per additional characters<br>
            - <strong>Half body</strong> : 30$ + 15$ per additional characters<br>
            - <strong>Full body</strong> : 50$ + 20$ per additional characters<br>
            <br>
            <strong>Payment via PayPal only</strong>
        </h4>

        <br><br>
        <h2 class="text-center"><a href="https://keiden.alwaysdata.net/WaitList.php" style="color: #EB5E5E">Wait-List</a></h2><br><br>

        <h3 class="text-center">Intrested ?<br>You can send me a drescription of your request here :</h3><br><br>
        

        <!--Formulaire-->


        <div class="col-xs-6">
            <form id="contact_form" action="process_form.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="required" for="name">Name (Your socials ID: @,#,...)</label>
                    <input id="name" class="form-control" name="name" type="text" value="" required />
                    <span id="name_validation" class="error_message"></span>
                </div>
                <div class="form-group">
                    <label class="required" for="email">Email</label>
                    <input id="email" class="form-control" name="email" type="email" value="" required />
                    <span id="email_validation" class="error_message"></span>
                </div>
                <div class="form-group">
                    <label class="required" for="message">Description</label>
                    <textarea id="message" class="form-control" name="message" rows="5" cols="30" required></textarea>
                    <span id="message_validation" class="error_message"></span>
                </div>
                <div class="form-group">
                    <label for="reference">Send a reference of your character if necessary:</label>
                    <input type="file" id="reference" name="reference" accept=".gif,.jpg,.png">
                </div>
                <div class="form-group">
                    <input class="increase" type="checkbox" id="agree" name="agree">
                    <label for="agree">I have read and I accept the Terms & Conditions above</label>
                </div>
                <div class="form-group col-xs-5"></div>
                <div class="form-group col-xs-6">
                    <input id="submit_button" class="btn btn-primary" type="submit" name="submit" value="Submit" />
                    <div id="after_submit"></div>
                </div>
            </form>
            <div class="col-xs-3"></div>
        </div>


        <br><br>

        <h3 class="text-center">And finally, you can send me the payment here on my PayPal to register your command :</h3>

        <div class="row">
            <div class="col-md-1 py-5"></div>
                <div class="col-md-5 py-5">
                <a href="https://paypal.me/bricecathala">
                    <img src="Images/paypal.png" class="reseauLogo">
                </a>
                </div>
                <div class="col-md-5 py-5">
                    <h2 class="display-4 mb-5">PayPal</h2>
                    <p class="lead">Send your payment at this adress to register</p>
                </div>
            </div>

        
        <p class="lead text-center">- <a href="keidensCave.html">Contacts</a> - <a href="mention.php">Privacy policy</a> -</p>
    </div>


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
            $reference = $_FILES['reference']['tmp_name']; // Chemin temporaire du fichier téléchargé

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

            // Définir l'expéditeur et le destinataire pour l'e-mail
            $mail->setFrom($email, $name);
            $mail->addAddress('keidenart@gmail.com');

            // Vérification si un fichier a été envoyé
            if(isset($_FILES['reference']) && $_FILES['reference']['error'] == 0) {
                // Vérification de la taille du fichier
                if($_FILES['reference']['size'] <= 2097152) { // 2 Mo
                    // Vérification du type de fichier
                    $valid_extensions = array('jpg', 'jpeg', 'gif', 'png');
                    $file_extension = strtolower(pathinfo($_FILES['reference']['name'], PATHINFO_EXTENSION));
                    if(in_array($file_extension, $valid_extensions)) {
                        // Déplacement du fichier vers le dossier temporaire
                        $tmp_file = $_FILES['reference']['tmp_name'];

                        // Lecture du fichier en tant que chaîne de caractères
                        $file_content = file_get_contents($tmp_file);

                        // Ajout du fichier en tant que pièce jointe à l'e-mail
                        $mail->addStringAttachment($file_content, 'reference.' . $file_extension);
                    } else {
                        // Type de fichier non valide
                        echo '<script>alert("Type de fichier non valide. Veuillez choisir un fichier jpg, jpeg, gif ou png.");</script>';
                        return;
                    }
                } else {
                    // Fichier trop volumineux
                    echo '<script>alert("Fichier trop volumineux. La taille maximale autorisée est de 2 Mo.");</script>';
                    return;
                }
            }

            // Définir le sujet et le corps du message pour l'e-mail
            $mail->Subject = 'Nouveau message de '.$name;
            $mail->Body = '
                Nouveau message de '.$name.'
                De : '.$name.' ('.$email.')
                Message :
                '.$message.'
            ';

            // Envoi de l'e-mail
            if($mail->send()) {
                // Connexion à la base de données
                $servername = "mysql-keiden.alwaysdata.net";
                $username_db = "keiden";
                $password_db = "35383113";
                $dbname = "keiden_appli";

                $conn = new mysqli($servername, $username_db, $password_db, $dbname);
                if ($conn->connect_error) {
                    die("Échec de la connexion à la base de données: " . $conn->connect_error);
                }

                // Préparer et exécuter la requête SQL pour insérer les données dans la base de données
                $sql = "INSERT INTO request (nameCom, email, `desc`, ref) VALUES ('$name', '$email', '$message', ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("b", $file_content); // Utilisation de la méthode bind_param pour le fichier BLOB
                $stmt->send_long_data(0, $file_content); // Envoi des données du fichier BLOB
                $stmt->execute();

                $stmt->close();
                $conn->close();

                echo '<script>document.getElementById("popup").className = "success";</script>';
            } else {
                echo '<script>document.getElementById("popup").className = "error";</script>';
            }
        }
    ?>


</body>
</html>