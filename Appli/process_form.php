<?php
// Connexion à la base de données
$servername = "mysql-keiden.alwaysdata.net";
$username_db = "keiden";
$password_db = "35383113";
$dbname = "keiden_appli";

$conn = new mysqli($servername, $username_db, $password_db, $dbname);
if ($conn->connect_error) {
    die("Échec de la connexion à la base de données: " . $conn->connect_error);
}

// Récupération des données du formulaire
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Préparer et exécuter la requête SQL pour insérer les données dans la base de données
$sql = "INSERT INTO request (nameCom, email, `desc`) VALUES ('$name', '$email', '$message')";
if ($conn->query($sql) === TRUE) {
    echo "Données enregistrées avec succès dans la base de données.";
} else {
    echo "Erreur lors de l'enregistrement des données dans la base de données: " . $conn->error;
}

$conn->close();
?>