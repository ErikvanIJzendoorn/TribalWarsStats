<?php
$servername = "localhost";
$username = "root";
$password = "";

$connection = new PDO("mysql:host=$servername;dbname=tribalwarsstats", $username, $password);
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $connection->prepare("SELECT * FROM dorp WHERE id = 9");
$stmt->execute();
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
	$hout = $row['hout'];
	$leem = $row['leem'];
	$ijzer = $row['ijzer'];
	$troepen = $row['troepen'];
}

?>