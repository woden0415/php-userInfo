<?php 
	
	/*eidt by woden*/
	
	$username = $_POST['uname'];
	$useremail = $_POST['uemail'];
	$userpwd = $_POST['upwd'];

	//包含数据库连接文件
	include('conn.php');
	//检测用户名是否已经存在
	$check_query = mysqli_query("select uname from userinfo.user where uname=$username");
	if(mysqli_fetch_array($check_query)){
	    echo '错误：用户名 ',$username,' 已存在。<a href="javascript:history.back(-1);">返回</a>';
	    exit;
	}
	//写入数据
	$password = MD5($userpwd);
	$sql = "INSERT INTO user(uname,uemail,upwd)VALUES('$username','$useremail','$password')";
	if(mysqli_query($conn,$sql)){
	    exit('用户注册成功！点击此处 <a href="../tpl/login.html">登录</a>');
	} else {
	    echo '抱歉！添加数据失败：'.mysqli_error(),'<br />';
	    echo '点击此处 <a href="javascript:history.back(-1);">返回</a> 重试';
	}	

 ?>	