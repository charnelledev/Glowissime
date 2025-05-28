<?php
session_start();
require_once 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'] ?? '';
    $email = $_POST['email'] ?? '';
    $date = $_POST['date'] ?? '';
    $service = $_POST['service'] ?? '';

    if ($nom && $email && $date && $service) {
        $stmt = $pdo->prepare("INSERT INTO reservations (nom, email, date_reservation, service, date_enregistrement) VALUES (?, ?, ?, ?, NOW())");
        $stmt->execute([$nom, $email, $date, $service]);

        $_SESSION['message'] = "✅ Réservation enregistrée avec succès.";
        $_SESSION['success'] = true;
    } else {
        $_SESSION['message'] = "❌ Veuillez remplir tous les champs.";
        $_SESSION['success'] = false;
    }

    header('Location: index.php');
    exit();
}
?>

