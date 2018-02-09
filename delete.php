<?php
header ("Location: index.php");
require_once "config.php";
$pdo= getConnection();
$pdo->exec("DELETE FROM contact_table WHERE id=".$_POST['id']);

?>