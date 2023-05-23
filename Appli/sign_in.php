<!DOCTYPE html>
<html lang="fr">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
        <title>
            Sign in
        </title>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="commStyle.css"/>
        <link rel="icon" type="image/png" sizes="25x25" href="Images/icon.png">
</head>

<body>
    <div class="container col-md-5 col-12 py-5">
        <h2 class="text-center">Sign in</h2>
        <form method="POST" action="sign_in.php" class="text-center">
            <div class="form-group">
                <label for="username"><h4>Username :</h4></label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password"><h4>Password :</h4></label>
                <input type="password" id="password" name="password" required>
            </div>
            <input type="submit" value="Inscription">
        </form>

        <br><br>
        <div>
            <h4 class="text-center">Alerady have an account ? <a href=conn.php>Login here</a></h2>
        </div>
    </div>

    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Récupérer les valeurs saisies dans le formulaire
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Hacher le mot de passe
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // Vérifier si le mot de passe contient au moins une minuscule, une majuscule et un caractère spécial
            if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\W).+$/', $password)) {
                echo "<div><h4 class='text-center'>The password must contain at least one lowercase, one uppercase, and one special character.</h4><div>";
                exit;
            }

            // Établir une connexion à la base de données
            $servername = "mysql-keiden.alwaysdata.net"; // Remplacez par votre nom de serveur
            $username_db = "keiden"; // Remplacez par votre nom d'utilisateur de la base de données
            $password_db = "35383113"; // Remplacez par votre mot de passe de la base de données
            $dbname = "keiden_appli"; // Remplacez par le nom de votre base de données

            $conn = new mysqli($servername, $username_db, $password_db, $dbname);

            // Vérifier si la connexion a échoué
            if ($conn->connect_error) {
                die("La connexion à la base de données a échoué: " . $conn->connect_error);
            }

            // Effectuer la requête pour insérer les informations d'identification dans la base de données
            $sql = "INSERT INTO login (name, mdp) VALUES ('$username', '$hashedPassword')";

            if ($conn->query($sql) === TRUE) {
                echo "<div><h4 class='text-center'>Successful registration. You can now connect.</h4></div>";
            } else {
                echo "Sign-in error: " . $conn->error;
            }

            // Fermer la connexion à la base de données
            $conn->close();
        }
    ?>


</body>
</html>
