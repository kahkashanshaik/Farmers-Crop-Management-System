<?php

require_once('conn.php');
session_start();
$err_msg = '';
if(isset($_POST['registration'])){
		$sql_s="SELECT * FROM farmers WHERE u_adhar=".$_POST['u_adhar']."";
		$result = mysqli_query($conn, $sql_s);
		if (mysqli_num_rows($result) > 0) {
		 	echo "<script>alert('User Already Exsists!');location.href= 'index.php';</script>";
		} else {
			if (isset($_POST['u_name'])){
				if(isset($_POST['u_location'])){
					if(isset($_POST['land_size'])){
						if(isset($_POST['u_adhar'])){
							if(isset($_POST['mobile_no'])){
									$date = date('Y-m-d h:m:s');
										$sql = "INSERT INTO farmers(u_name, u_location, land_size, u_adhar, mobile_no,  creation_date) VALUES('".$_POST['u_name']."', '".$_POST['u_location']."', '".$_POST['land_size']."', ".$_POST['u_adhar'].", ".$_POST['mobile_no'].", '".$date."')";
										if (mysqli_query($conn, $sql)) {
										  echo "<script>alert('Registration Successfully!');location.href= 'index.php';</script>";
										} else {
										  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
										}
										mysqli_close($conn);
								
							}else{
									echo "<script>alert('Provide Mobile No!');window.location.reload('index.php');</script>";
							}
						}else{
								echo "<script>alert('Provide  Adhar No!');window.location.reload('index.php');</script>";
						}
					}else{
							echo "<script>alert('Provide Land Size in Acre!');window.location.reload('index.php');</script>";
					}	
				}else{
						echo "<script>alert('Provide Location name!');window.location.reload('index.php');</script>";
				}
			}else{
					echo "<script>alert('Provide User name!');window.location.reload('index.php');</script>";
			}
		}
		
	}

if(isset($_POST['addCropDetails'])){
	if(!empty($_POST['id'])){
		if(!empty($_POST['crop_summer']) && !empty($_POST['crop_rainy']) && !empty($_POST['crop_winter'])){
			    $date = date('Y-m-d h:m:s');
				$sql = "INSERT INTO famers_crop_dtls(farmer_id, crop_summer, crop_winter, crop_rainy, creation_date) 
				VALUES('".$_SESSION['id']."', '".$_POST['crop_summer']."', '".$_POST['crop_rainy']."', '".$_POST['crop_winter']."','".$date."')";
				if (mysqli_query($conn, $sql)) {
				  echo "<script>alert('Details Added Successfully!');location.href= 'home.php';</script>";
				} else {
				  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
				mysqli_close($conn);
		}else{
			echo "<script>alert('Provide Crop Details!');window.location.reload('addCrop.php');</script>";
		}
	}else{
		echo "<script>alert('Provide Crop Details!');window.location.reload('addCrop.php');</script>";
	}
}

if(isset($_POST['editCropDtls'])){
	if(!empty($_POST['id'])){
		if(!empty($_POST['crop_summer']) && !empty($_POST['crop_rainy']) && !empty($_POST['crop_winter'])){
			   $sql = "UPDATE famers_crop_dtls set crop_summer='".$_POST['crop_summer']."', crop_rainy='".$_POST['crop_rainy']."', crop_winter='".$_POST['crop_winter']."' WHERE id='".$_POST['id']."'";								
			   if (mysqli_query($conn, $sql)) {
			     echo "<script>alert('Details Updated Successfully!');location.href= 'home.php';</script>";
			   } else {
			     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			   }
			   mysqli_close($conn);
		}else{
			echo "<script>alert('Provide Crop Details!');window.location.reload('addCrop.php');</script>";
		}
	}else{
		echo "<script>alert('Provide Crop Details!');window.location.reload('addCrop.php');</script>";
	}
}

?>