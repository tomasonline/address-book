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
	// $name = $_POST['name'];
	// $last_name = $_POST['last_name'];
	// $phone_number = $_POST['phone_number'];
	// $address = $_POST['address'];
	// $birthday = $_POST['birthday'];
	// $e_mail = $_POST['e_mail'];
	// $stmt->bindParam(':name', $name);
	// $stmt->bindParam(':last_name', $last_name);
	// $stmt->bindParam(':phone_number', $phone_number);
	// $stmt->bindParam(':address', $address);
	// $stmt->bindParam(':birthday', $birthday);
	// $stmt->bindParam(':e_mail', $e_mail);aaaaa