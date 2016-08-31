<?php 

	/*edit by woden*/
	if($_GET['action'] == "delete"){
		$uname = $_GET["uname"];
	}
	include 'conn.php';
	$sql = "DELETE FROM user WHERE uname = '$uname'";
	$user_query = mysqli_query($conn,$sql);
	header("Location: ../tpl/login.html");
	
 ?>