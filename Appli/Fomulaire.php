<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact Form</title>
	<!-- Lien vers Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style>
		/* Styles personnalisés pour le formulaire */
		#contact_form label {
			font-weight: bold;
            font-family: "Helta Slab";
		}
		.error_message {
			color: red;
        
		}
        .increase {
            width:30px;
            height:30px;
        }
	</style>
</head>
<body>
    <!--Formulaire-->
	<div class="container">
        <div class="row">
            <div class="col-xs-3"></div>
            <div class="col-xs-6">
                <form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="required" for="name">Name (Your socials ID : @,#,...)</label>
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
                    <div>
                        <input class="increase" type="checkbox" id="agree" name="agree">
                        <label for="agree">I have read and i accept the Therms & Conditions above</label>
                    </div>
                    <div class="col-xs-5"></div>
                    <div class="col-xs-6">
                    <input id="submit_button" class="btn btn-primary" type="submit" value="Submit" />
                    <div id="after_submit"></div>
                    </div>
                </form>
            </div>
            <div class="col-xs-3"></div>
        </div>
    </div>
	<!-- Lien vers la bibliothèque jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<!-- Lien vers le script JavaScript personnalisé -->
	<script src="js/contact_form.js"></script>

    <?php
    if(isset($_POST['submit'])) {
        // Récupération des données du formulaire
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // Formatage du message
        $to = 'keidenart@gmail.com';
        $subject = 'Nouveau message de '.$name;
        $headers = 'From: '.$email."\r\n".
                'Reply-To: '.$email."\r\n".
                'Content-Type: text/html; charset=UTF-8'."\r\n";
        $message = '<html><body>';
        $message .= '<h3>Nouveau message de '.$name.'</h3>';
        $message .= '<p><strong>De :</strong> '.$name.' ('.$email.')</p>';
        $message .= '<p><strong>Message :</strong></p>';
        $message .= '<p>'.$message.'</p>';
        $message .= '</body></html>';

        // Envoi du message
        if(mail($to, $subject, $message, $headers)) {
            echo '<p>Votre message a bien été envoyé.</p>';
        } else {
            echo '<p>Une erreur est survenue lors de l\'envoi de votre message.</p>';
        }
    }
    ?>
</body>
</html>