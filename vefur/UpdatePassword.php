<meta charset="utf-8">
<?php
include "dbcon.php";

$email = $_POST['gEmail'];

try {
$sql = "SELECT Name,Email,Password
			FROM users
			WHERE Email =".$email."";

$result = $pdo->query($sql);
} catch (PDOException $ex) {
echo 'Error fetching scores: '.$ex->getMessage();
}
while ($row = $result->fetch()) {
$UpdateP[] = array('Name' => $row['Name'],
						'gEmail' => $row['gEmail'],
						'Password' => $row['Password']
						);
};
/*
$to = $email;
$subject = "forgoten Password";

$message = "Hallo ".$row['Name'].", we have received a request to resend you your password. So here it is: ".$row['Password']."";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <andri.lorenz@gmail.com>' . "\r\n";

mail($to,$subject,$message,$headers);*/

$to = $email;
$subject = "forgoten Password";
$txt = "Hallo ".$row['Name'].", we have received a request to resend you your password. So here it is: ".$row['Password'];
$headers = "From: andri.lorenz@gmail.com" . "\r\n" .
"CC: andri.lorenz@gmail.com";

mail($to,$subject,$txt,$headers);
?>