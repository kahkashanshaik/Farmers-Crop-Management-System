<?php
session_start();
require_once('conn.php');
$err_msg = '';
if(isset($_POST['login'])){
		$sql_s="SELECT * FROM farmers WHERE u_adhar=".$_POST['u_adhar']."";
		$result = mysqli_query($conn, $sql_s);
		if (mysqli_num_rows($result) > 0) {
			if (isset($_POST['u_adhar'])){
				if(isset($_POST['mobile_no'])){
					while($row = $result->fetch_assoc()){
						if($row['u_adhar'] == $_POST['u_adhar'] && $row['mobile_no'] == $_POST['mobile_no']){
							$_SESSION['dummy'] = '123123123';
							$_SESSION['id'] = $row['id'];
							$_SESSION['u_adhar'] = $row['u_adhar'];
							$_SESSION['u_name'] = $row['u_name'];
							echo "<script>alert('Login Successfull');location.href='home.php'</script>";
						}else{
							echo "<script>alert('Invalid username/password1');location.href='index.php'</script>";
						}
					}
				}else{
					echo "<script>alert('Invalid username/password2!');location.href='index.php'</script>";
				}
			}else{
					echo "<script>alert('Provide User name!');location.href='index.php'</script>";
			}
		} else {
		 	echo "<script>alert('User Does not Exsists!');location.href= 'index.php';</script>";
			
		}
		
	}


?>