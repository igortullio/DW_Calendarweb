<?php
	// Require DB Connection
	require_once('connect.php');
    // Add Event
	$sth = $dbh->prepare("INSERT INTO eventos (title, start, end) VALUES (?,?,?)");
	$sth->execute(array($_POST['title'], $_POST['start'], $_POST['end']));
	
