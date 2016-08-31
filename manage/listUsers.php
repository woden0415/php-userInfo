<?php 

	echo "显示所有用户";
	include 'conn.php';
	$sql = "SELECT * FROM user";
	$check_query = mysqli_query($conn,$sql);
	while ($rows = mysqli_fetch_array($check_query)) {
		echo $rows["uid"],'<br>';
		echo $rows["uname"],'<br>';
		echo $rows["uemail"],'<br>';
		echo $rows["upwd"],'<br>';		
		echo $rows["regdate"],'<br>';
		echo '<a href="delete.php?action=delete&uname='.$rows["uname"].'"><button>删除</button></a>';
		echo "<br><br><br><br><br>";
	}

 ?>