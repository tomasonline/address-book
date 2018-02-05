<?php


function getConnection(){
	$user = "root";
	$password = "";
	$con=new PDO("mysql:host=localhost;dbname=contact_bd", $user, $password);
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	return $con;
}

function selectPerson($query){
	$pdo= getConnection();

	$stmt=$pdo->query($query);
	return $stmt->fetchAll();
}