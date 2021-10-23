<?php
	require('conn.php');
	session_start();
	if(isset($_SESSION['id'])){
		$sql = "SELECT * FROM famers_crop_dtls WHERE id='".$_GET['id']."'";
		$result = mysqli_query($conn, $sql);
		$row = $result->fetch_assoc();
		if($row){
		?>
<!DOCTYPE html>
		<html>
		<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<title>Farmers Management System</title>
			<link rel="stylesheet" type="text/css" href="dist/css/adminlte.css">
			<link rel="stylesheet" type="text/css" href="dist/fontawesome-free/css/all.min.css">
			<link rel="icon" type="image/png" href="dist/img/farmers_logo.png">
			<style type="text/css">
			</style>
		</head>
		<body>
			<div class="contrainer-fluid">
				<div class="row mt-5">
					<div class="col-2">
						<div class="login-box" style="border-radius: 20px; background:#ffffff">
							<div class="login-logo p-0 mt-2">
								<a href="#">
									<img src="dist/img/farmers_logo.png" style="widows: 100px; height: 100px; padding: 0px; margin: 0px; " class="brand-image center img-fluid">
								</a>
							</div>		
						</div>
					</div>
					<div class="col-8">
						<h3 class="text-center">Welcome, <?php echo $_SESSION['u_name']?></h3>

					</div>
					<div class="col-2">
						<a href="logout.php" class="btn btn-secondary btn-md ml-5">Logout</a>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="card card-outline card-danger">
					<div class="card-header">
					</div>
					<div class="card-body">
						<div style="border-radius: 20px; background:#ffffff">
							<div class="card elevation-5">
							   <div class="card-body login-card-body opacity-0.6">
							      <p class="login-box-msg text-red font-weight-bolder">ADD CROP DETAILS</p>
							      <hr>
							      <form class="form-horizontal"  autocomplete="off" id="login-form" name="login-form" action="registration_action.php" method="POST">
							      	<input type="hidden" name="id" value="<?php echo $row['id']?>">
							      	<p class="text-center text-danger font-weight-bolder">CROP</p>
							      	<div class="form-group row">
							      		<div class="col-6">
							      			<div class="input-group mb-3">
							      				<input type="text" class="form-control" value="<?php echo $row['crop_summer']?>"  name="crop_summer"  required="">
							      				<div class="input-group-append">
							      					<div class="input-group-text">  </div>
							      				</div>
							      			</div>
							      		</div>
							      		<div class="col-6">
							      			<div class="input-group mb-3">
							      				<input type="text" class="form-control" value="<?php echo $row['crop_rainy']?>" name="crop_rainy"  required="">
							      				<div class="input-group-append">
							      					<div class="input-group-text">  </div>
							      				</div>
							      			</div> 
							      		</div>
							      	</div>
							      	<div class="form-group row">
							      		<div class="col-6">
							      			<div class="input-group mb-3">
							      				<input type="text" class="form-control" value="<?php echo $row['crop_winter']?>" name="crop_winter"  required="">
							      				<div class="input-group-append">
							      					<div class="input-group-text">  </div>
							      				</div>
							      			</div>
							      		</div>
							      	</div>
							      	<div class="row">
							      	   <!-- /.col -->
							      	   <div class="col-12">
							      	   	<button  name="editCropDtls" class="btn btn-success text-center float-right">UPDATE</button>
							      	   </div>
							      	   <div class="form-group row">
							      	      <div class="col-sm-12">
							      	         <div class="error-message" style="color:red"></div>
							      	      </div>
							      	   </div>
							      	   <!-- /.col -->
							      	</div>
							     </form>
					</div>
				</div>
			</div>
			</div>
	</div>
</div>

</div>



		</body>
		</html>
<?php
	}else{
		header('location:home.php');
	}	
	}else{
		header('location:home.php');
	}
?>