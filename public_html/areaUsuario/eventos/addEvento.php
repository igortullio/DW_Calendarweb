<?php
	
// Require DB Connection
require_once('conecao.php');

// Add Event
$sth = $dbh->prepare("INSERT INTO eventos (title, start, end) VALUES (?,?,?)"); //Colocar id_Usua como quarto parâmetro
$sth->execute(array($_POST['title'], $_POST['start'], $_POST['end']));
	
