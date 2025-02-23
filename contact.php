<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact_form";

// Créez la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifiez la connexion
if ($conn->connect_error) {
    die("La connexion a échoué: " . $conn->connect_error);
}

// Vérifiez si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données soumises
    $prenom = $conn->real_escape_string($_POST['prenom']);
    $nom = $conn->real_escape_string($_POST['nom']);
    $email = $conn->real_escape_string($_POST['email']);
    $probleme = $conn->real_escape_string($_POST['probleme']);

    // Préparer la requête SQL pour insérer les données
    $sql = "INSERT INTO contacts (prenom, nom, email, probleme) VALUES ('$prenom', '$nom', '$email', '$probleme')";

    // Exécution de la requête
    if ($conn->query($sql) === TRUE) {
        echo "Message envoyé avec succès!";
    } else {
        echo "Erreur: " . $sql . "<br>" . $conn->error;
    }
}

// Fermer la connexion à la base de données
$conn->close();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactez Nous</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>
    <div class="main-block">
        <form action="" method="POST">
            <h1>Contactez Nous!</h1>
            <div class="info">
                <input class="fname" type="text" name="prenom" placeholder="Prénom" required>
                <input type="text" name="nom" placeholder="Nom" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="text" name="probleme" placeholder="Type de Problème" required>
            </div>
            <button type="submit">Envoyer</button>
        </form>
        <div class="reclamation-link">
            <a href="reclamations.php">Voir la liste des réclamations</a>
        </div>
    </div>
</body>
</html>
