<?php 
	
	/*eidt by woden*/
	// session_start();
	//注销登录
	// if($_GET['action'] == "logout"){
	// 	unset($_SESSION['userid']);
	//     unset($_SESSION['uname']);
	//     echo '注销登录成功！点击此处 <a href="../tpl/login.html">登录</a>';
	//     exit;
	// }

	//登录
	$username = $_POST['uname'];
	$userpwd = $_POST['upwd'];	

	/*转换密码为MD5*/
	$password = MD5($userpwd);
	//包含数据库文件
	include('conn.php');
	//检测用户名密码是否正确
	$sql = "select uname from user where uname = '$username' and upwd = '$password' limit 1";
	$check_query = mysqli_query($sql);

	if($result = mysqli_fetch_array($check_query)){
		//登录成功
		$_SESSION['username'] = $username;
		$_SESSION['userid'] = $result['uid'];
		echo $username.'欢迎你!进入<a href="my.php">用户中心</a><br>';
		echo '点击此处<a href="login.php?action=logout">注销</a>登录!<br>';
		exit;
	}else{
		exit('登录失败！点击此处<a href="javascript: history.go(-1)">返回</a>重试')
	}


	


 ?>