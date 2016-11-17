<?php
	
try {
	$dbh = new PDO("mysql:host=mysql.hostinger.com.br;dbname=u844436518_cadas", 'u844436518_root', 'dwigorpedro');
}
catch(PDOException $e) {
	echo $e->getMessage();
}