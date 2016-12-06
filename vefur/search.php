<?php
include "dbcon.php";
$search = $_POST['search'];
/*
try {
$sql = "SELECT Name
		FROM event
		WHERE Name LIKE '%$search%'";
$result = $pdo->query($sql);
} catch (PDOException $ex) {
echo 'Error fetching scores: '.$ex->getMassage();
}
while ($row = $result->fetch()) {
	$search[] = array('eventName' => $row['Name']
						);
}

try {
$sql = "SELECT Name
		FROM users
		WHERE Name LIKE '%$search%'";
$result = $pdo->query($sql);
} catch (PDOException $ex) {
echo 'Error fetching scores: '.$ex->getMassage();
}
while ($row = $result->fetch()) {
	$search[] = array('userName' => $row['Name']
						);
}
echo "this shit works boyo";
*/
/*
try {
$sql = "SELECT event.Name, event.ID, Date, Location, Description, Category, users_has_event.id_Users
		FROM event
		INNER JOIN users_has_event
		ON event.ID = users_has_event.id_Event
		INNER JOIN users
		ON users_has_event.id_Users = users.ID
		WHERE event.name LIKE '%$search%' AND users.name LIKE '%$search%'
		ORDER BY Date";
$result = $pdo->query($sql);
} catch (PDOException $ex) {
echo 'Error fetching scores: '.$ex->getMassage();
}
while ($row = $result->fetch()) {
	$vidburdur[] = array('ID' => $row['ID'],
						'Name' => $row['Name'],
						'Date' => $row['Date'],
						'Location' => $row['Location'],
						'Description' => $row['Description'],
						'Category' => $row['Category'],
						'ID_users' => $row['id_Users']
						);
}
*/
if (empty($search)) {
    header("Location: index2.php");
}else{
header("Location: indexsearch.html.php?search=".$search);
}
/*for ($i = 0; $i < $ID; i++;){
	$it=$i;
}*/
?>