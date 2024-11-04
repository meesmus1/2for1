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

    <!-- Custom Style -->
    <link rel="stylesheet" href="css/style.css">

    <style>
        .btn-back {
            background-color: #0d6efd;
            color: #fff;
            padding: 0.5rem 1rem;
            margin-top: 2rem;
            text-transform: uppercase;
            font-weight: bold;
            border-radius: 5px;
        }
        
        .date-header {
            font-size: 1.5rem;
            margin: 2rem 0 1rem;
            color: #343a40;
            text-transform: uppercase;
            font-weight: bold;
        }
        
        .card {
            border: 1px solid #ddd;
            border-radius: 10px;
            margin-bottom: 1rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        .card-body {
            padding: 1.5rem;
        }
        
        .container {
            max-width: 800px;
            margin-top: 5rem;
        }
        
        .order-time {
            color: #6c757d;
            font-size: 0.9rem;
        }
    </style>
</head>

<body>
    <div class="container text-center">
        <a href="index.php" class="btn btn-back">Terug naar Home</a>
    </div>

    <?php
    include './include/includes_gip/dtb.php'; // Verbind met de database

    // SQL-query om bestellingen op te halen en te sorteren op datum
    $sql = "SELECT * FROM `bestellingen` ORDER BY DATE(`createdAt`) DESC, `createdAt` ASC";
    $statement = $con->prepare($sql);
    $statement->execute();
    $result = $statement->get_result();

    echo '<div class="container">';
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
            echo '<div class="date-header">Bestellingen voor: ' . date('d M Y', strtotime($currentDate)) . '</div>';
            echo '<div class="row">';
        }

        // Toon de details van de bestelling
        echo '<div class="col-md-6">';
        echo '<div class="card">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title mb-3">Naam: ' . htmlspecialchars($row['naam']) . '</h5>';
        echo '<p class="card-text">Smos Kaas: ' . htmlspecialchars($row['smosKaas']) . '</p>';
        echo '<p class="card-text">Smos Ham: ' . htmlspecialchars($row['smosHam']) . '</p>';
        echo '<p class="card-text">Smos Martino: ' . htmlspecialchars($row['smosMartino']) . '</p>';
        echo '<p class="order-time">Besteld om: ' . date('H:i', strtotime($row['createdAt'])) . '</p>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }

    echo '</div>'; // Sluit de laatste datumgroep
    echo '</div>'; // Sluit de container
    ?>
</body>

</html>
