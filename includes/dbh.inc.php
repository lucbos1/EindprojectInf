<?php
# Dit document legt verbinding met de database

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "eindproject_inf";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}

# Veranderd het charset naar utf8
mysqli_set_charset($conn, "utf8");
