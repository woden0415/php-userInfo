<?php 
	
	/*edit by wangdong*/

	$server = "localhost";
	$sqlname = "root";
	$sqlpwd = "root";

	/*创建连接*/
	$conn = mysqli_connect($servername, $username, $password)
	/*检测连接*/
	if ($conn) {
	    die("连接失败: " . mysqli_connect_error());
	}
 ?>