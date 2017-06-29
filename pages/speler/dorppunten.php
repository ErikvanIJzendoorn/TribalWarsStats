<?php
$servername = "localhost";
$username = "root";
$password = "";

$connection = new PDO("mysql:host=$servername;dbname=tribalwarsstats", $username, $password);
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $connection->prepare("SELECT  (
    SELECT COUNT(dorp.id)
    FROM   dorp
    WHERE dorp.punten < 1000
    ) AS level1,
    (
    SELECT COUNT(dorp.id)
    FROM   dorp
    WHERE dorp.punten < 2000
    AND dorp.punten > 1000
    ) AS level2,
    (  
    SELECT COUNT(dorp.id)
    FROM   dorp
    WHERE dorp.punten < 3000
    AND dorp.punten > 2000
    ) AS level3,
    (
    SELECT COUNT(dorp.id)
    FROM   dorp
    WHERE dorp.punten < 4000
    AND dorp.punten > 3000
    ) AS level4,
    (
    SELECT COUNT(dorp.id)
    FROM   dorp
    WHERE dorp.punten < 5000
    AND dorp.punten > 4000
    ) AS level5,
    (
    SELECT COUNT(dorp.id)
    FROM   dorp
    WHERE dorp.punten < 6000
    AND dorp.punten > 5000
    ) AS level6,
    (
    SELECT COUNT(dorp.id)
    FROM   dorp
    WHERE dorp.punten < 7000
    AND dorp.punten > 6000
    ) AS level7,
    (
    SELECT COUNT(dorp.id)
    FROM   dorp
    WHERE dorp.punten < 8000
    AND dorp.punten > 7000
    ) AS level8");

$stmt->execute();

while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
	$level1 = $row['level1'];
	$level2 = $row['level2'];
	$level3 = $row['level3'];
	$level4 = $row['level4'];
	$level5 = $row['level5'];
	$level6 = $row['level6'];
	$level7 = $row['level7'];
	$level8 = $row['level8'];
}

?>