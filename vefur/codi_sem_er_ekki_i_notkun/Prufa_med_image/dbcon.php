<?php 
	try {
		$source = 'mysql:host=tsuts.tskoli.is;dbname=0905953189_gru8_test';
		$user = '0905953189';
		$password = 'bagg3rb3st';

		# tegund og nafn á server, nafn á db og PHP aðgangur
		$pdo = new PDO($source, $user, $password);

		# stillum hann af hvernig hann með höndlar villur
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		# Við getum notað exec fyrir INSERT; UPDATE og DELETE
		#  notum utf-8 og gerum það með SQL fyrirspurn exec sendir sql fyrirspurnir til 
		#database
		$pdo->exec('SET NAMES "utf8"');
	} 
	catch (Exception $e) {
		#skemmtilegri skilaboð til notanda sjá kóða t.d. bls. 99
		echo "tenging tókst ekki". "<br>" . $e->getMessage();
	}
 ?>