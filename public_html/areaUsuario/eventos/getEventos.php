<?php
	
// Require DB Connection
require_once('conecao.php');

// Inicia sessões 
session_start(); 	

// Get ALl Event
$sth = $dbh->prepare("SELECT * FROM eventos WHERE id_Usua = ?");
$sth->execute(array($_SESSION["id_Usua"]));
$result = $sth->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($result);
