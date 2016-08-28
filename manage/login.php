<?php 
	
	/*eidt by woden*/
	session_start();
	//注销登录
	if($_GET['action'] == "logout"){
		unset($_SESSION['userid']);
	    unset($_SESSION['uname']);
	    echo '注销登录成功！点击此处 <a href="../tpl/login.html">登录</a>';
	    exit;
	}

	//登录
	$username = $_POST['uname'];		//用户名
	$password = MD5($_POST['upwd']);	//MD5密码
	echo "$username"."<br>";
	echo "$password"."<br>";

	//包含数据库文件
	include('conn.php');
	$sql = "SELECT * FROM user WHERE uname = '$username' AND upwd ='$password' LIMIT 1";
	$check_query = mysqli_query($conn,$sql);
	
	// mysqli_query()参数必须加上数据库conn	
	/*if($check_query){
		echo 'mysqli_query()函数正确';
	}else{
		echo 'mysqli_query()函数不正确';		
	}*/


	if($result = mysqli_fetch_array($check_query)){
		//登录成功
		$_SESSION['username'] = $username;
		$_SESSION['upwd'] = $password;
		echo $username,' 欢迎你！进入 <a href="my.php">用户中心</a><br />';
		echo '点击此处 <a href="login.php?action=logout">注销</a> 登录！<br />';
		exit;
	}else{
		exit("登录失败：". mysqli_connect_errno().mysqli_connect_error());
		exit('登录失败！点击此处 <a href="javascript:history.back(-1);">返回</a> 重试<br>');
		
	}

 ?>