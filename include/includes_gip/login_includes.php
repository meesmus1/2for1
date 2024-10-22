<?php
session_start();
include './dtb.php';

$response = array();


$username = $_POST['email'];
$password = $_POST['password'];
$userexist = false;





$sql = "SELECT * FROM `users` WHERE `email`=?";

$statement = $con->prepare($sql);
$statement->bind_param('s', $username);
$statement->execute();
$result = $statement->get_result();
$row = $result->fetch_assoc();


if ($row && password_verify($password,$row['password'])) {
    $userexist = true;
    $_SESSION['email'] = $row['email'];
    $_SESSION['password'] = $row['password'];
}

$response['error'] = $userexist;
echo json_encode($response);
?>


