<?php 
	
	// if(!isset($_POST['submit']){
	// 	exit('非法访问');
	// }
	$username = $_POST['uname'];
	$useremail = $_POST['uemail'];
	$userpwd = $_POST['upwd'];
	
	//包含数据库连接文件
	include('conn.php');
	//检测用户名是否已经存在
	$check_query = mysql_query("select uid from user_info_t where username='$username' limit 1");
	if(mysql_fetch_array($check_query)){
	    echo '错误：用户名 ',$username,' 已存在。<a href="javascript:history.back(-1);">返回</a>';
	    exit;
	}
	//写入数据
	$password = MD5($userpwd);
	$regdate = time();
	$sql = "INSERT INTO user(uname,uemail,upwd,regdate)VALUES('$username','$password','$useremail',$regdate)";
	if(mysql_query($sql,$conn)){
	    exit('用户注册成功！点击此处 <a href="login.html">登录</a>');
	} else {
	    echo '抱歉！添加数据失败：',mysql_error(),'<br />';
	    echo '点击此处 <a href="javascript:history.back(-1);">返回</a> 重试';
	}	

 ?>