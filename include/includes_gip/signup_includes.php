<?php

include './dtb.php';

$response =array();

$voornaam = $_POST['voornaam'];
$achternaam = $_POST['achternaam'];
$emailadres = $_POST['emailadres'];
$gebruikersnaam = $_POST['gebruikersnaam'];
$wachtwoord = $_POST['wachtwoord'];

$wachtwoord=password_hash($wachtwoord,PASSWORD_DEFAULT);

$id= generate_uuid_v4();
$SQL= 'INSERT INTO `users`(`id`,`firstname`, `lastname`, `username`, `email`, `password`) VALUES (?,?,?,?,?,?)';
$statement=$con->prepare($SQL);
$statement->bind_param('ssssss',$id,$voornaam,$achternaam,$gebruikersnaam,$emailadres,$wachtwoord);
$statement->execute();



echo json_encode($response);
?>