<?php 

session_start();

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "eindproject_inf";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="nl">

<!-- In dit document staat de header die op elke pagina wordt weergegeven -->
  <head>
    <title>App</title>
    <link rel="icon" type="image/x-icon" href="img/MM_Logo.ico">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  </head>
  <body>
    	<nav style='width: 100vw; height: 10vh; background-color: red;'>
    	    <a href='index.php'>HOME</a>
    	    <div style='display:grid; align-items: center; grid-template-columns: repeat(2, auto);'>
    	      <a href="">Registreren</a>
    	      <a href="">Inloggen</a>
    	    </div>
    	</nav>
<main>