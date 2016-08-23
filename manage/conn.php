<?php 
	
	/*edit by wangdong*/

	$server = "localhost";
	$sqlname = "root";
	$sqlpwd = "root";

	echo "string";
	// 检测连接
	if (mysqli_connect_error()) {
	    die("数据库连接失败: " . mysqli_connect_error());
	}
	// 创建连接
	// $conn = new mysqli($servername, $username, $password);
	// 检测连接
	// if ($conn->connect_error) {
	    // die("连接失败: " . $conn->connect_error);
	// } 
		// echo "连接成功";
 ?>