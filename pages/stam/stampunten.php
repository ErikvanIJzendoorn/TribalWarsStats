<?php
$servername = "localhost";
$username = "root";
$password = "";

$connection = new PDO("mysql:host=$servername;dbname=tribalwarsstats", $username, $password);
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $connection->prepare("  SELECT dorp.punten AS punten
                                FROM dorp
                                INNER JOIN stam
                                WHERE dorp.id = stam.gebruiker AND stam.id = 1
                            ");

$stmt->execute();

$punten = [];
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

	$punt = $row['punten'];
    $speler = $punt;

    $punt = array($speler);
    array_push($punten, $punt);
}

?>