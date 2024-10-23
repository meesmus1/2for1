<?php

session_start(); 

if (!isset($_SESSION['email']) || $_SESSION['user_id'] !== '370e4ec5-1589-4413-b0bd-9a710cf6777a') {
    header('Location: ./index.php');
    exit(); 
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bestellingen per Dag</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Style sheet -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
    include './include/includes_gip/dtb.php'; // Verbind met de database

    // SQL-query om bestellingen op te halen en te sorteren op datum
    $sql = "SELECT * FROM `bestellingen` ORDER BY DATE(`createdAt`) DESC, `createdAt` ASC";
    $statement = $con->prepare($sql);
    $statement->execute();
    $result = $statement->get_result();

    echo '<div class="container" style="margin-top: 5rem;">';
    
    $currentDate = null;

    // Doorloop alle bestellingen
    while ($row = $result->fetch_assoc()) {
        $orderDate = date('Y-m-d', strtotime($row['createdAt']));

        // Als de datum van de bestelling verandert, toon een nieuwe datumkop
        if ($currentDate !== $orderDate) {
            if ($currentDate !== null) {
                echo '</div><br>'; // Sluit de vorige datumgroep
            }
            $currentDate = $orderDate;
            echo '<h3>Bestellingen voor: ' . $currentDate . '</h3>';
            echo '<div class="vakjesUsers">';
        }

        // Toon de details van de bestelling
        echo '<div class="card mb-3">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">Naam: ' . $row['naam'] . '</h5>';
        echo '<p class="card-text">Smos Kaas: ' . $row['smosKaas'] . '</p>';
        echo '<p class="card-text">Smos Ham: ' . $row['smosHam'] . '</p>';
        echo '<p class="card-text">Smos Martino: ' . $row['smosMartino'] . '</p>';
        echo '<p class="card-text"><small class="text-muted">Besteld om: ' . date('H:i:s', strtotime($row['createdAt'])) . '</small></p>';
        echo '</div>';
        echo '</div>';
    }

    echo '</div>'; // Sluit de laatste datumgroep
    echo '</div>'; // Sluit de container
    ?>
</body>

</html>
