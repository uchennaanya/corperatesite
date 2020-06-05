<?php 

	require_once('server.php');
	$id = $_GET['id'];
	$sql = $conn->query("DELETE FROM tbl_pin3 WHERE id = $id");
	header("location:view.php");

?>