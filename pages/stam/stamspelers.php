<?php
$servername = "localhost";
$username = "root";
$password = "";

$connection = new PDO("mysql:host=$servername;dbname=tribalwarsstats", $username, $password);
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

for ($x = 1; $x <= 50; $x++) {
	$stmt = $connection->prepare("SELECT count(stam.gebruiker) as stam FROM stam WHERE id = :id");
	$stmt->bindValue("id", $x);
	$stmt->execute();
	$stam = [];
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
		$stamspelers = $row['stam'];
		$stamspeler = array($x, $stamspelers);
		array_push($stam, $stamspeler);
	}
}
foreach($stam as $value)
    {
        print $value[1] . " ";
    }


?>