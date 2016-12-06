<?php
try{
	$source = 'mysql:host=tsuts.tskoli.is;dbname=0905953189_gru8_test';
	$user = '0905953189';
	$password = 'bagg3rb3st';

	$pdo = new PDO($source, $user, $password);

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$pdo->exec('SET NAMES "utf8"'); 
}
catch (PDOException $e){
	echo "Server connection failed". "<br>" . $e->getMessage();
}
?>

