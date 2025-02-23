<?php
session_start();

if (!isset($_SESSION['userid'])) {
    header('Location: login.php');
    exit();
}

$selected_vehicle = isset($_GET['vehicle']) ? $_GET['vehicle'] : '';

if (empty($selected_vehicle)) {
    header('Location: vehicules.php');
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cars";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}

$user_id = $_SESSION['userid'];
$sql = "SELECT * FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the selected vehicle and other form data
    $name = isset($_POST['nom_complet']) ? $_POST['nom_complet'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $vehicle = isset($_POST['vehicule']) ? $_POST['vehicule'] : '';
    $date_debut = isset($_POST['date-debut']) ? $_POST['date-debut'] : '';
    $quantity = isset($_POST['quantite']) ? (int)$_POST['quantite'] : 1;

    // Fetch vehicle details to get the price and current stock
    $stmt = $conn->prepare("SELECT * FROM vehicles WHERE name = ?");
    $stmt->bind_param("s", $vehicle);
    $stmt->execute();
    $vehicle_result = $stmt->get_result()->fetch_assoc();

    if ($vehicle_result) {
        $stock = $vehicle_result['stock'];
        $price = $vehicle_result['price'];

        // Check if there is enough stock
        if ($stock >= $quantity) {
            $new_stock = $stock - $quantity;
            $update_sql = "UPDATE vehicles SET stock = ? WHERE name = ?";
            $update_stmt = $conn->prepare($update_sql);
            $update_stmt->bind_param("is", $new_stock, $vehicle);
            $update_stmt->execute();
        } else {
            echo "Stock insuffisant pour la quantité demandée.";
            exit();
        }
    }

    // Generate PDF with the reservation details
    require_once('tcpdf/tcpdf.php');
    $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
    $pdf->SetCreator('Groupe');
    $pdf->SetAuthor('ESEFO');
    $pdf->SetTitle('Homies Cars - Réservation');
    $pdf->SetSubject('Location de voiture');
    $pdf->SetKeywords('vehicules, Cars, Modeles, reservation');

    $pdf->SetMargins(10, 10, 10);
    $pdf->SetAutoPageBreak(TRUE, 10);
    $pdf->SetFont('helvetica', '', 12);
    $pdf->AddPage();

    $html = '
    <h1 style="text-align: center;">Confirmation de achat</h1>
    <p style="text-align: center;">Merci d\'avoir choisi Homies Cars pour votre agence de véhicule.</p>
    <h2>Détails de Achat</h2>
    <table border="1" cellpadding="5">
        <tr>
            <td><strong>Nom complet :</strong></td>
            <td>' . htmlspecialchars($name) . '</td>
        </tr>
        <tr>
            <td><strong>Email :</strong></td>
            <td>' . htmlspecialchars($email) . '</td>
        </tr>
        <tr>
            <td><strong>Véhicule :</strong></td>
            <td>' . htmlspecialchars($vehicle) . '</td>
        </tr>
        <tr>
            <td><strong>Date de achat :</strong></td>
            <td>' . htmlspecialchars($date_debut) . '</td>
        </tr>
        <tr>
            <td><strong>Quantité :</strong></td>
            <td>' . htmlspecialchars($quantity) . '</td>
        </tr>
        <tr>
            <td><strong>Prix total :</strong></td>
            <td>' . number_format($price * $quantity, 2) . ' DH</td>
        </tr>
    </table>
    <p style="text-align: center;">Nous vous souhaitons un excellent voyage avec votre véhicule.</p>
    ';

    $pdf->writeHTML($html, true, false, true, false, '');
    ob_end_clean(); // Make sure no previous output is sent before the PDF
    $pdf->Output('reservation.pdf', 'I');
}

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<style>
input {
    height: 40px;
    border-radius: 5px;
}
select {
    border-radius: 5px;
}

@keyframes colorChange {
    0% {
        color: white;
    }
    50% {
        color: gold;
    }
    100% {
        color: white;
    }
}

.animated-text {
    animation: colorChange 3s infinite;
}

.set {
    color: gray;
}
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de réservation</title>
    <link rel="stylesheet" href="css/reservation2.css">
</head>
<body>
    <video class="video-background" autoplay muted loop>
        <source src="ANA.mov" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    
    <div class="booking-form">
        <h2 class="animated-text">Achat</h2>
        <form action="" method="post">
            <label for="nom_complet">Nom complet :</label>
            <input type="text" name="nom_complet" id="nom_complet" value="<?php echo htmlspecialchars($user['firstname'] . ' ' . $user['lastname']); ?>" required>
 
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="<?php echo htmlspecialchars($user['email']); ?>" required>
            
            <label for="vehicule">Type de véhicule :</label>
            <select name="vehicule" id="vehicule" required>
                <option class="set" value="" <?php echo $selected_vehicle == '' ? 'selected' : ''; ?>>Sélectionnez votre voiture</option>
                <option class="set" value="Golf 7" <?php echo $selected_vehicle == 'Golf 7' ? 'selected' : ''; ?>>Golf 7</option>
                <option class="set" value="Peugeot 208" <?php echo $selected_vehicle == 'Peugeot 208' ? 'selected' : ''; ?>>Peugeot 208</option>
                <option class="set" value="Clio 4" <?php echo $selected_vehicle == 'Clio 4' ? 'selected' : ''; ?>>Clio 4</option>
                <option class="set" value="Mercedes" <?php echo $selected_vehicle == 'Mercedes' ? 'selected' : ''; ?>>Mercedes</option>
                <option class="set" value="Citroen C3" <?php echo $selected_vehicle == 'Citroen C3' ? 'selected' : ''; ?>>Citroen C3</option>
                <option class="set" value="Audi Q8" <?php echo $selected_vehicle == 'Audi Q8' ? 'selected' : ''; ?>>Audi Q8</option>
                <option class="set" value="Ford Fiesta" <?php echo $selected_vehicle == 'Ford Fiesta' ? 'selected' : ''; ?>>Ford Fiesta</option>
                <option class="set" value="Porsche" <?php echo $selected_vehicle == 'Porsche' ? 'selected' : ''; ?>>Porsche</option>
                <option class="set" value="BMW" <?php echo $selected_vehicle == 'BMW' ? 'selected' : ''; ?>>BMW</option>
                <option class="set" value="Range Rover" <?php echo $selected_vehicle == 'Range Rover' ? 'selected' : ''; ?>>Range Rover</option>
            </select>

            <label for="date-debut">Date:</label>
            <input type="date" name="date-debut" id="date-debut" value="<?php echo date('Y-m-d'); ?>" required><br><br>

            <label for="quantite">Quantité :</label>
            <input type="number" name="quantite" id="quantite" min="1" value="1" required><br><br>
            
            <button type="submit">Acheter</button>
        </form>
    </div>
</body>
</html>
