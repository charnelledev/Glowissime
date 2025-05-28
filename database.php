<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "glowissime";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$database;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Connexion réussie
    // echo "Connexion à la base de donnée réussie";
} catch(PDOException $e) {
    echo "<div style='color:red;'>La connexion à la base de données a échoué :</div> " . $e->getMessage();
    exit();
}
?>
