<?php
include "dbcon.php";
//include "eventShow.php";
$Uname = $_POST['Uname'];
$Password = $_POST['password'];

try {
	$sql = "SELECT Name,Email,Phone,ID,Password,Username
			FROM users
			WHERE Username ='" .$_SESSION['Uname']. "' AND Password = '" .$_SESSION['Password'] . "'";

	$result = $pdo->query($sql);

	} catch (PDOException $ex) {
	echo 'Error fetching scores: '.$e->getMessage();
	}
	while ($row = $result->fetch()) {
	//$vidburdur[] = $row['heiti'];
		//nýtt

		$User[] = array('Name' => $row['Name'],
							 'Password' => $row['Password'],
							 'Username' => $row['Username'],
							 'Name' => $row['Name'],
							 'Email' => $row['Email'],
							 'Phone' => $row['Phone']
							 );

}
?>