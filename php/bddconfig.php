<?php
// Connexion à la base de données
$server = "127.0.0.1:3306"; // nom du serveur
$user = "u355010381_user"; // nom d'utilisateur
$passe = "xg@%rxTHSfJmqWtb0dOiTI%dqIyxpo"; // mot de passe
$base = "u355010381_pagecss_form"; // nom de la base de données

$con = new mysqli($server, $user, $passe, $base);

// Vérification de la connexion
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>
