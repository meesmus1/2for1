<?php
include './includes_gip/dtb.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $naam = $_POST['naam'];
    $smosKaas = intval($_POST['smosKaas']);
    $smosHam = intval($_POST['smosHam']);
    $smosMartino = intval($_POST['smosMartino']);

    // Generate a unique ID for the order
    $id = generate_uuid_v4();

    // Insert the order into the database
    $sql = "INSERT INTO bestellingen (id, naam, smosKaas, smosHam, smosMartino, createdAt, updatedAt) VALUES (?, ?, ?, ?, ?, NOW(), NOW())";
    
    if ($stmt = mysqli_prepare($con, $sql)) {
        mysqli_stmt_bind_param($stmt, "ssiii", $id, $naam, $smosKaas, $smosHam, $smosMartino);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    } else {
        echo json_encode(["status" => "error", "message" => "Failed to prepare the statement."]);
        exit;
    }

    echo json_encode(["status" => "success", "message" => "Order placed successfully!"]);
}
?>
