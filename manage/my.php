<?php 
	session_start();

	//检测是否登录，是否有session，若没有跳入登录页面
	if (!isset($_SESSION['username'])) {
		header("Location: ../tpl/login.html");
		exit();
	}
	echo '进入个人中心';
	include 'conn.php';
	$username = $_SESSION['username'];
	$sql = "SELECT * FROM user WHERE uname='$username'";
	$user_query = mysqli_query($conn,$sql);
	$rows = mysqli_fetch_array($user_query);
	echo '用户信息：<br />';
	echo '用户ID：',$rows['uid'],'<br />';
	echo '用户名：',$_SESSION['username'],'<br />';
	echo '邮箱：',$rows['uemail'],'<br />';
	echo '注册日期：',$rows['regdate'],'<br />';
	echo '<a href="login.php?action=logout">注销</a> 登录<br />';

 ?>