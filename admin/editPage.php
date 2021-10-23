<?php
	require('../conn.php');
	session_start();
	if(isset($_SESSION['id'])){
		$sql = "SELECT * FROM farmers WHERE id='".$_GET['id']."'";
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
	<link rel="stylesheet" type="text/css" href="../dist/css/adminlte.css">
	<link rel="stylesheet" type="text/css" href="../dist/fontawesome-free/css/all.min.css">
	<link rel="icon" type="../image/png" href="../dist/img/farmers_logo.png">
	<style type="text/css">
		
	</style>
</head>

<body class="hold-transition login-page">
	<div style="border-radius: 20px; background:#ffffff">
		<div class="card elevation-5">
		   <div class="card-body login-card-body opacity-0.6">
		      <p class="login-box-msg text-red font-weight-bolder">EDIT FARMER DETAILS</p>
		      <hr>
		      <form class="form-horizontal"  autocomplete="off" id="login-form" name="login-form" action="home_action.php" method="POST">
		      	<input type="hidden" name="id" value="<?php echo $row['id']?>"> 
		         <div class="form-group row">
		         	<div class="col-6">
		         		<div class="input-group mb-3">
		         		   <input type="text" class="form-control" value="<?php echo $row['u_name']?>" name="u_name" autocomplete="off" required="">
		         		   <div class="input-group-append">
		         		      <div class="input-group-text"> <span class="fas fa-user text-danger"></span> </div>
		         		   </div>
		         		</div>
		         	</div>
		         	<div class="col-6">
		         		<div class="input-group mb-3">
		         		   <input type="text" class="form-control" value="<?php echo $row['u_location']?>" name="u_location"  required="">
		         		   <div class="input-group-append">
		         		      <div class="input-group-text"> <span class="fas fa-map-marker-alt text-danger"></span> </div>
		         		   </div>
		         		</div>
		         	</div>
		         </div>
		         <div class="form-group row">
		         	<div class="col-6">
		         		<div class="input-group mb-3">
		         		   <input type="text" class="form-control" value="<?php echo $row['land_size']?>" name="land_size"  required="">
		         		   <div class="input-group-append">
		         		      <div class="input-group-text"> <span class="fas fa-ruler-horizontal text-danger"></span> </div>
		         		   </div>
		         		</div>
		         	</div>
		         	<div class="col-6">
		         		<div class="input-group mb-3">
		         		   <input type="number" class="form-control" value="<?php echo $row['u_adhar']?>" name="u_adhar"  required="">
		         		   <div class="input-group-append">
		         		      <div class="input-group-text"> <span class="fas fa-id-card-alt text-danger"></span> </div>
		         		   </div>
		         		</div>
		         	</div>
		         </div>
		          <div class="form-group row">
		         	<div class="col-6">
		         		<div class="input-group mb-3">
		         		   <input type="number" class="form-control" value="<?php echo $row['mobile_no']?>" name="mobile_no"  required="">
		         		   <div class="input-group-append">
		         		      <div class="input-group-text"> <span class="fas fa-phone text-danger"></span> </div>
		         		   </div>
		         		</div>
		         	</div>
		         </div>

		         <div class="row">
		            <!-- /.col -->
		            <div class="col-12 text-center">
		               <button  name="editPage" class="btn btn-danger" >Update</button>

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
		   <!-- /.login-card-body -->
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