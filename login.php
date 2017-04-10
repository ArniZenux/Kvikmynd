<?php
	include('connectionDB.php');
	session_start();

	if(isset($_POST["submit"])){
			$sqlString = "SELECT id FROM tblUser WHERE username = '$username' AND password = '$password';";
			$result = mysql_query($sqlString); 
			$row = mysqli_fetch_array($result); 
			
			$active = $row['active'];
		    $count = mysqli_num_rows($result);
			
			if($row == 1){
				session_register('login_user') = $myusername; 
				$_SESSION['login_user'] = $myusername; 
				header("location : uploader.php");
			}
			else
				$error_msg = "Þitt lyklaorð eða notandi er ógildi";
			}
	}
?>