<?php
	
try {
	$dbh = new PDO("mysql:host=localhost;dbname=cadastro", 'root', '');
}
catch(PDOException $e) {
	echo $e->getMessage();
}