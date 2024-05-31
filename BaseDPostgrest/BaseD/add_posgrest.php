<?php

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	$postgrest = pg_connect ("host=127.0.0.1 port=5432 dbname=tallerbd user=developer password=t0ps3cr3t");
	$sql = "SELECT * FROM student";

	$rows = pg_exec($postgrest, $sql);

	$tableHtml = "<table border='1'>";

	while ($rows=pg_fetch_assoc( $rows)) {
		$tableHtml = $tableHtml . "<tr>";

		foreach ($rows as $k=>$v){
			$tableHtml = $tableHtml . "<td>" . $v . "</td>"; 
		}
		$tableHtml = $tableHtml . "</tr>";
	}
	$tableHtml = $tableHtml . "</table>";
	echo $tableHtml;
?>