<?php
$servername = "localhost";
$username = "root";
$password = "";

$connection = new PDO("mysql:host=$servername;dbname=tribalwarsstats", $username, $password);
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $connection->prepare("SELECT count(gebruiker.id) as actief FROM gebruiker WHERE gebruiker.actief = 1");
$stmt->execute();
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
	$actief = $row['actief'];
	$inactief = 100 - $actief;
}

?>