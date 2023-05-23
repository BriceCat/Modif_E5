<?php
session_start();

// Vérifier si la variable de session "loggedin" existe et est définie à true
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: conn.php");
    exit();
}

// Connexion à la base de données
$servername = "mysql-keiden.alwaysdata.net";
$username_db = "keiden";
$password_db = "35383113";
$dbname = "keiden_appli";

$conn = new mysqli($servername, $username_db, $password_db, $dbname);
if ($conn->connect_error) {
    die("Échec de la connexion à la base de données: " . $conn->connect_error);
}

// Récupérer les demandes des clients depuis la table "request"
$sql = "SELECT * FROM request";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
    <title>WaitList</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="commStyle.css"/>
    <link rel="icon" type="image/png" sizes="25x25" href="Images/icon.png">
</head>
<body>
    <div class="container">
        <h1>Liste d'attente des demandes</h1>

        <div class="requests">
            <?php
            // Vérifier s'il y a des résultats
            if ($result->num_rows > 0) {
                // Afficher les demandes en colonnes
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='request'>";
                    echo "<h3>Nom : " . $row['nameCom'] . "</h3>";
                    echo "<h4>Email : " . $row['email'] . "</h4>";
                    echo "<h4>Description : " . $row['desc'] . "</h4>";
                    // Afficher l'image de référence si elle existe
                    if (!empty($row['ref'])) {
                        echo "<img src='chemin_vers_le_dossier_images/" . $row['ref'] . "' alt='Image de référence'>";
                    }
                    echo "</div>";
                }
            } else {
                echo "Aucune demande trouvée.";
            }

            // Fermer la connexion à la base de données
            $conn->close();
            ?>
        </div>
    </div>
</body>
</html>
