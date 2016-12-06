<?php
include "dbcon.php";
include "login.php";

$name = $_POST['name'];
$ssn = $_POST['social_security_number'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];

    
$sql = 'UPDATE `users` SET `Name` = :Name, `Social_security_number` = :Social_security_number, `Email` = :Email, `Phone` = :Phone, `Password` = :Password
		WHERE '.$_SESSION['ID'].' = ID'; 
$q = $pdo->prepare($sql);
try{
	$q->bindValue(':Name',$name);
	$q->bindValue(':Social_security_number',$ssn);
	$q->bindValue(':Email',$email);
	$q->bindValue(':Phone',$phone);
	$q->bindValue(':Password',$password);
	$q->execute();
	$lastid = $pdo->lastInsertId();
} catch (PDOException $ex) {
echo 'Error fetching scores: '.$ex->getMessage();
}
      $Uname = $_SESSION['Username'];
      $password = $_SESSION['Password'];
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
      session_destroy();
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
        header("Location: Settings.html.php");
      }
      else
      {
        $errorMessage ="Invalid Login";
        session_start();
        $_SESSION['login'] = '';
        header("Location: Settings.html.php");
      }  
header('Location:Settings.html.php');#atuga með fannari
exit;
?>
