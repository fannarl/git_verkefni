<?php
include "dbcon.php";

$name = $_POST['name'];
$ssn = $_POST['social_security_number'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$username = $_POST['username'];
$password = $_POST['password'];
    
$sql = 'INSERT INTO `users`(`Name`, `Social_security_number`, `Email`, `Phone`, `Username`, `Password`) 
		VALUES (:Name, :Social_security_number, :Email, :Phone, :Username, :Password)'; 
$q = $pdo->prepare($sql);
try{
	$q->bindValue(':Name',$name);
	$q->bindValue(':Social_security_number',$ssn);
	$q->bindValue(':Email',$email);
	$q->bindValue(':Phone',$phone);
	$q->bindValue(':Username',$username);
	$q->bindValue(':Password',$password);
	$q->execute();
	$lastid = $pdo->lastInsertId();
} catch (PDOException $ex) {
echo 'Error fetching scores: '.$ex->getMessage();
}
/*$username = htmlspecialchars($username);
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
		$_SESSION['Username'] = $username;
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
		header("Location: error.html.php");
	}*/
header('Location: index.html.php');#atuga með fannari
exit;
?>
