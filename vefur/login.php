<?php
include "dbcon.php";
$Uname = $_POST['Uname'];
$password = $_POST['password'];
$Uname = htmlspecialchars($Uname);
$password = htmlspecialchars($password);
$errorMessage = "";
$sql = "SELECT ID, Username, Password, Social_security_number, Name, Phone, Email FROM users WHERE Username = '$Uname' AND Password = '$password'";
$result = $pdo ->query($sql);
$row = $result -> fetch();
$name = $row['Name'];
$email = $row['Email'];
$SSN = $row['Social_security_number'];
$id = $row['ID'];
$phone = $row['Phone'];
	
	if($row > 0)
	{
		session_start();
		$_SESSION['login'] = "1";
		$_SESSION['ID'] = $id;
		$_SESSION['Username'] = $Uname;
		$_SESSION['Password'] = $password;
		$_SESSION['Name'] = $name;
		$_SESSION['SSN'] = $SSN;
		$_SESSION['Email'] = $email;
		$_SESSION['Phone'] = $phone;
		header("Location: index2.php");
	}
	else
	{
		$errorMessage ="Invalid Login";
		session_start();
		$_SESSION['login'] = '';
		header("Location: index.html.php");
		#header("Location: error.html.php");
	}
?>