<?php
include "dbcon.php";
session_start();

$fname = $_POST['name'];
$date = $_POST['date'];
$location = $_POST['location'];
$Category = $_POST['Category'];
$Description = $_POST['Description'];
    
$sql = 'INSERT INTO `event`(`Name`, `Date`, `Location`, `Description`, `Category`) 
		VALUES (:Name, :Date, :Location, :Description, :Category)'; 
$q = $pdo->prepare($sql);
try{
	$q->bindValue(':Name',$fname);
	$q->bindValue(':Date',$date);
	$q->bindValue(':Location',$location);
	$q->bindValue(':Category',$Category);
	$q->bindValue(':Description',$Description);
	$q->execute();
	$lastid = $pdo->lastInsertId();
} catch (PDOException $ex) {
echo 'Error fetching scores: '.$ex->getMessage();
}

try {
$sql = 'SELECT ID FROM event ORDER BY ID desc LIMIT 1';
$result = $pdo->query($sql);
} catch (PDOException $ex) {
echo 'Error fetching scores: '.$ex->getMassage();
}
while ($row = $result->fetch()) {
	$eventID[] = array('ID' => $row['ID']
						);
}

$sql = 'INSERT INTO `users_has_event`(`id_Users`, `id_Event`) 
		VALUES (:id_Users, :id_Event)'; 
$q = $pdo->prepare($sql);
try{
	$q->bindValue(':id_Users',$_SESSION['ID']);
	$q->bindValue(':id_Event',$eventID[0]['ID']);
	$q->execute();
	$lastid = $pdo->lastInsertId();
} catch (PDOException $ex) {
echo 'Error fetching scores: '.$ex->getMessage();
}

header('Location: index2.php');
exit;
?>