<?php
$servername = "localhost";
$username = "root";
$password = "";

$connection = new PDO("mysql:host=$servername;dbname=tribalwarsstats", $username, $password);
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $connection->prepare("SELECT id, gebruikersnaam, wachtwoord FROM gebruiker");
$stmt->execute();
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
	if($row['gebruikersnaam'] == $_POST['username'] && $row['wachtwoord'] == $_POST['password'])
	{
		header("Location: http://localhost/tribalwarsstats/pages/speler/speler.php");
	}
	else{
		header("Location: http://localhost/tribalwarsstats/pages/login/login_form.html");
	}
}
?>