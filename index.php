<?php 

session_start();

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "database";

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
    	<nav>
    	    <a href='index.php'>HOME</a>
    	    <div>
    	      <a href="">Registreren</a>
    	      <a href="">Inloggen</a>
    	    </div>
    	</nav>
<main>
    <a href="">HOI</a>
<h1>Welkom</h1>
HHTEEEE
<!-- In dit document staat de footer die op elke pagina wordt weergegeven -->
</main>

</body>

</html>

<?php $conn->close(); ?>