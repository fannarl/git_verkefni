<?php
include "dbcon.php";
try {
$sql = "SELECT Name, event.ID, Date, Location, Description, Category, users_has_event.id_Users
		FROM event
		INNER JOIN users_has_event
		ON event.ID = users_has_event.id_Event
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

/*for ($i = 0; $i < $ID; i++;){
	$it=$i;
}*/
?>