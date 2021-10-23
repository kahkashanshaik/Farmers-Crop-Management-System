<?php
session_start();
require_once('../conn.php');
$err_msg = '';
if(isset($_POST['login'])){
		$sql_s="SELECT * FROM farmers WHERE id=".$_POST['id']."";
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

if(isset($_POST['editPage'])){
	if (isset($_POST['u_name'])){
		if(isset($_POST['u_location'])){
			if(isset($_POST['land_size'])){
				if(isset($_POST['u_adhar'])){
					if(isset($_POST['mobile_no'])){
								
								$sql = "UPDATE farmers set u_name='".$_POST['u_name']."', u_location='".$_POST['u_location']."', land_size='".$_POST['land_size']."', u_adhar='".$_POST['u_adhar']."', mobile_no='".$_POST['mobile_no']."' WHERE id='".$_POST['id']."'";								

								if (mysqli_query($conn, $sql)) {
								  echo "<script>alert('Details Updated Successfully!');location.href= 'home.php';</script>";
								} else {
								  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
								}
								mysqli_close($conn);
						
					}else{
							echo "<script>alert('Provide Mobile No!');window.location.reload('editPage.php');</script>";
					}
				}else{
						echo "<script>alert('Provide  Adhar No!');window.location.reload('editPage.php');</script>";
				}
			}else{
					echo "<script>alert('Provide Land Size in Acre!');window.location.reload('editPage.php');</script>";
			}	
		}else{
				echo "<script>alert('Provide Location name!');window.location.reload('editPage.php');</script>";
		}
	}else{
			echo "<script>alert('Provide User name!');window.location.reload('editPage.php');</script>";
	}
}else{
	echo "<script>alert('Problem in Updating Details');location.href='editPage.php'</script>";
}

if(isset($_POST['deleteRecord'])){
	if(!empty($_POST['id'])){
		$sql = "DELETE FROM farmers WHERE id='".$_POST['id']."'";
		mysqli_query($conn, $sql);
			echo "<script>alert('Record Deleted Successfully');location.href='home.php'</script>";
		
		mysqli_close($conn);
	}else{
		echo "<script>alert('Record Deleted Successfully');location.href='home.php'</script>";
	}
}

?>