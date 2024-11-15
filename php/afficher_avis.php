<?php
// Connexion à la base de données
include 'bddconfig.php';

// Fonction pour nettoyer et sécuriser les données
function nettoyer($input) {
    if ($input) {
        $input = trim($input);
        $input = stripslashes($input); 
        $input = htmlspecialchars($input); 
    }
    return $input;
}

// Traitement de l'envoi du formulaire
if (isset($_POST["submit"])) {
    $nom = nettoyer($con->real_escape_string($_POST["nom"]));
    $email = nettoyer($con->real_escape_string($_POST["email"]));
    $note = intval($_POST["note"]);
    $commentaire = nettoyer($con->real_escape_string($_POST["commentaire"]));
    $date = date("Y-m-d"); 

    // Validation de l'adresse email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p>Adresse email invalide. Veuillez corriger votre adresse email.</p>";
    } else {
        // Validation que la date est celle du jour
        $currentDate = date("Y-m-d");
        
        if ($date !== $currentDate) {
            echo "<p>La date doit être la date du jour : $currentDate.</p>";
        } else {
            // Correction de la requête SQL
            $sql = "INSERT INTO avis (nom, email, note, commentaire, date) 
                    VALUES ('$nom', '$email', '$note', '$commentaire', '$date')";

            if ($con->query($sql) === TRUE) {
                echo "<p>Votre avis a été pris en compte</p>";
            } else {
                echo "<p>Erreur lors de l'insertion de l'avis: " . $con->error . "</p>";
            }
        }
    }
}

// Affichage des avis
$commande = "SELECT nom, email, note, commentaire, date FROM avis ORDER BY date DESC";
if ($res = $con->query($commande)) {
    if ($res->num_rows > 0) {
        while ($row = $res->fetch_assoc()) {
            $nom = nettoyer($row["nom"]);
            $email = nettoyer($row["email"]);
            $note = nettoyer($row["note"]);
            $commentaire = nettoyer($row["commentaire"]);
            $date = nettoyer($row["date"]);

            echo '<div class="container-fluid mt-2">';
            echo '    <div class="row">';
            echo '        <div class="col mb-4">'; 
            echo '            <div class="border rounded p-3 bg-light comment-box">';
            echo '                <p>' . $nom . ' (' . $email . ')</p>';
            echo '                <p>' . $commentaire . '</p>';
            echo '                <div class="d-flex justify-content-between mt-2">';
            echo '                    <p class="mb-0"><b>Note :</b> ' . $note . '/5</p>';
            echo '                    <p class="mb-0"><b>Date :</b> ' . $date . '</p>'; 
            echo '                </div>';
            echo '            </div>';
            echo '        </div>';
            echo '    </div>';
            echo '</div>';
        }
    } else {
        echo "<p>Aucun avis pour le moment.</p>";
    }
} else {
    echo "<p>Erreur: " . $con->error . "</p>";
}

// Fermer la connexion
$con->close();
?>