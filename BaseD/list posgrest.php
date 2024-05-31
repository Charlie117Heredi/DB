<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	$mysqli = new mysqli("127.0.0.1", "developer",
		"t0ps3cr3t", "tallerbd");
	$sql = "SELECT * FROM student";
	$rows = $mysqli->query($sql);
	$tableHtml = "<table border='1'>";
	foreach ($rows as $row) {
		$tableHtml = $tableHtml . "<tr>";
		foreach ($row as $k=>$v){
			$tableHtml = $tableHtml . "<td>" . $v . "</td>"; 
		}
		$tableHtml = $tableHtml . "</tr>";
	}
	$tableHtml = $tableHtml . "</table>";
	echo $tableHtml;
?>