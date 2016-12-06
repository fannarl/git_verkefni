<!DOCTYPE>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/<!DOCTYPE html; Charset=utf-8"/>
		<title>prufa</title>
	</head>
	<Body>
	
	<form action="index.html.php" method="POST" enctype="multipart/form-data">
		<input type="file" name="image"><input type="submit" name="submit" value="Upload"> 
	</form>
	<?php

	if (isset($_POST['submit'])) 
	{
		include "dbcon.php";
		//include "showimage.php";
		$imageName = mysql_real_escape_string($_FILES["image"]["name"]);
		$imageData = mysql_real_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));
		$imageType = mysql_real_escape_string($_FILES["image"]["type"]);

		if (substr($imageType,0,5) == "image") 
		{
			//echo "INSERT INTO images(name, image) VALUES (:name, :image)";

			$sql = "INSERT INTO images(name, image) VALUES (:name, :image)";
			$q = $pdo->prepare($sql);
			try {
			       
			        $q->bindValue(':name', $imageName);
			        $q->bindValue(':image', $imageData);
			        $q->execute();
			        $lastid = $pdo->lastInsertId();
			        echo $lastid;

			} catch (Exception $ex) {
			        echo 'Error fetching score: ' .$ex->getMessage();
			}
		}
		else
		{
			echo "This isn't an image!";
		}
	}
	?>
	<!--<img src="showimage.php?id=imageD">-->
	</Body>
</html>