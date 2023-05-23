<?php
// Récupérer les valeurs saisies dans le formulaire
$username = $_POST['username'];
$password = $_POST['password'];

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

// Effectuer la requête pour vérifier les informations d'identification
$sql = "SELECT * FROM login WHERE name = '$username'";
$result = $conn->query($sql);

// Vérifier si la requête a retourné un résultat
if ($result->num_rows == 1) {
    // Récupérer le mot de passe stocké dans la base de données
    $row = $result->fetch_assoc();
    $hashedPassword = $row['mdp'];
    
    // Vérifier si le mot de passe saisi correspond au mot de passe stocké (avec vérification de hachage)
    if (password_verify($password, $hashedPassword)) {
        // Informations d'identification valides, l'utilisateur est connecté
        session_start();
        $_SESSION['loggedin'] = true;
        header("Location: Commission_info.php");
        exit();
    } else {
        // Informations d'identification invalides, afficher un message d'erreur
        echo "Nom d'utilisateur ou mot de passe incorrect.";
    }
} 
else {
    // Informations d'identification invalides, afficher un message d'erreur
    echo "Nom d'utilisateur ou mot de passe incorrect.";
}


// Fermer la connexion à la base de données
$conn->close();
?>