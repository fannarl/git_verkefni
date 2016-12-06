<meta charset="utf-8"/>
<?php
include "dbcon.php";
try {
$sql = "SELECT id, Name, image
		FROM images
		ORDER BY id";
$result = $pdo->query($sql);
} catch (PDOException $ex) {
echo 'Error fetching scores: '.$e->getMassage();
}
while ($row = $result->fetch()) {
	$images[] = array('id' => $row['id'],
						'Name' => $row['Name'],
						'image' => $row['image']
						);
}

if (isset($_GET[$row['id']])) 
{
	$id = mysql_real_escape_string($_GET[$row['id']]);
	$query = mysql_query("SELECT * FORM 'images' WHERE 'id' = '$id'");
	while ($row2 = mysql_fetch_assoc($query)) 
	{
		$imageD = $row2["image"];
		/*$imagear = mysql_real_escape_string($_FILES["image"]["type"]);
		if (substr($imagear, -4) == "image")
		{
			header("content-type: image/$imagear");
		}*/
	}
	header("content-type: image/PNG");
	echo $imageD;
}
else
{
	echo "Error";
}
?
<!--<?php
/*
include "dbcon.php";

$sql = "SELECT image FROM images WHERE id = $id";
$sth = $pdo->query($sql);
$result=mysqli_fetch_array($sth);
echo '<img src="data:image/PNG;base64,'.base64_encode( $result['image'] ).'"/>';
*/
?>-->