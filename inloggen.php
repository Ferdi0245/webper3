<?php
include 'connection.php';

$user= $_POST['gebruikersnaam'];

$stmt= $conn->prepare(
    "SELECT gebruikersnaam, wachtwoord FROM users WHERE gebruikersnaam='$user'");
$stmt->execute();

$result
