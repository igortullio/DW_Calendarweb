<?php

// Require DB Connection
require_once('conecao.php');
	
// Inicia sessões 
session_start(); 		

// Add Event
$sth = $dbh->prepare("INSERT INTO eventos (title, start, end, id_Usua) VALUES (?,?,?,?)"); //Colocar id_Usua como quarto parâmetro
$sth->execute(array($_POST['title'], $_POST['start'], $_POST['end'], $_SESSION["id_Usua"]));
	
