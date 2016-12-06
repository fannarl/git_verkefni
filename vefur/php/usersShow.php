<?php
include "dbcon.php";
try {
$sql = "SELECT ID, Username, Name, Email, Phone
		FROM users
		ORDER BY ID";
$result = $pdo->query($sql);
} catch (PDOException $ex) {
echo 'Error fetching scores: '.$ex->getMassage();
}
while ($row = $result->fetch()) {
	$users[] = array('ID' => $row['ID'],
						'Username' => $row['Username'],
						'Name' => $row['Name'],
						'Email' => $row['Email'],
						'Phone' => $row['Phone']
						);
}

/*for ($i = 0; $i < $ID; i++;){
	$it=$i;
}*/
?>