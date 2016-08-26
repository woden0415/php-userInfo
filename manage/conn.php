<?php 
	
	/*edit by wangdong*/

	$server = "localhost";
	$sqlname = "root";
	$sqlpwd = "root";
	$db = "userInfo";

	$conn = mysqli_connect($server,$sqlname,$sqlpwd,$db);
	if(!$conn){
		die("连接错误：". mysqli_connect_errno().mysqli_connect_error());
	}else{
		echo "连接成功";
	}
	
 ?>