<?php 

session_start();

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "PWS_project";

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

<nav>
    <a href='index.php'><img src='img/MAINTENANCE_MEISTER_Icon.png'></a>
    <?php if (isset($_SESSION["userid"])) { echo"
          <container>
            <a class='titel' id='machinebeheer' href='machinebeheer.php'>Machinebeheer</a>
            <a class='titel' id='new_machine' href='newmachine.php'>Nieuwe machine?</a>
          </container>
            <a class='titel' id='logout' href='includes/logout.inc.php'>Uitloggen?</a>
            <a class='titel' id='profile' href='profile.php'><img src='img/profile.png'></a>";
        } else { echo"
          <div style='display:grid; align-items: center; grid-template-columns: repeat(2, auto);'>
            <a class='titel' id='signup' href='signup.php'>Ook Meister worden?</a>
            <a class='titel login_button' id='login' href='login.php'>Inloggen</a>
          </div>";
        }
    ?>
</nav>

<main>