<?php
$servername = "localhost";
$username = "root";
$password = "";

$connection = new PDO("mysql:host=$servername;dbname=tribalwarsstats", $username, $password);
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $connection->prepare("SELECT * FROM troepen WHERE id = 8");
$stmt->execute();
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
	$speer = $row['speer'];
	$zwaard = $row['zwaard'];
	$bijl = $row['bijl'];
	$verkenner = $row['verkenner'];
	$lichteCav = $row['lichtecavalerie'];
	$katapult = $row['katapult'];
}

?>