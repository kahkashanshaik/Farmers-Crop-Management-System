<?php
session_start();
require_once('../conn.php');
$err_msg = '';
if(isset($_POST['login'])){
			if (isset($_POST['u_name'])){
				if(isset($_POST['u_pass'])){
						if($_POST['u_name'] == 'admin' &&  $_POST['u_pass'] == 'admin@123'){
							$_SESSION['id'] = 9999;
							$_SESSION['u_name'] = 'admin';
							echo "<script>alert('Login Successfull');location.href='home.php'</script>";
						}else{
							echo "<script>alert('Invalid username/password1');location.href='index.php'</script>";
						}
				}else{
					echo "<script>alert('Invalid username/password2!');location.href='index.php'</script>";
				}
			}else{
					echo "<script>alert('Provide User name!');location.href='index.php'</script>";
			}
		
		
	}


?>

?>