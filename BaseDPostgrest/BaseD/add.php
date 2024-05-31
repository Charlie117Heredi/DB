<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	$nocontrol  = $_POST['nocontrol'];
	$fullname  = $_POST['fullname'];
	$career  = $_POST['career'];
	$curp  = $_POST['curp'];
	$currentgrade  = intval($_POST['currentgrade']);


	$mysqli = new mysqli("127.0.0.1", "developer",
		"t0ps3cr3t", "tallerbd");
	$sql = "INSERT INTO student (nocontrol, fullname, career, curp, currentgrade) " .
	        " VALUES(?,?,?,?,?)";

	$statement = $mysqli->prepare($sql);
	if($statement === false) {
		trigger_error('ERROR: ' . $mysqli->errno .
			' ' . $mysqli->error,	E_USER_ERROR);
	}
	//--- establecer los parametros
	$statement->bind_param('ssssi', $nocontrol,$fullname,$career,$curp,$currentgrade);
	$statement->execute();
    $mysqli->close();
    echo "save successfull";

    echo "<a href='list.php'>List students</a>";
?>
