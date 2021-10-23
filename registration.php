
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
		.login-page{
			background-color: #ffffff;
			 background: linear-gradient(rgba(0,255,255,.5), rgba(255,0,255,.5)),url('dist/img/bg.jpeg');
			 -webkit-background-size: cover;
         -moz-background-size: cover;
         -o-background-size: cover;
         background-size: cover;
		}
	</style>
</head>

<body class="hold-transition login-page">
	<div style="border-radius: 20px; background:#ffffff">
		<div class="card elevation-5">
		   <div class="card-body login-card-body opacity-0.6">
		      <p class="login-box-msg text-red font-weight-bolder">REGISTER</p>
		      <hr>
		      <form class="form-horizontal"  autocomplete="off" id="login-form" name="login-form" action="registration_action.php" method="POST">
		         <div class="form-group row">
		         	<div class="col-6">
		         		<div class="input-group mb-3">
		         		   <input type="text" class="form-control" placeholder="Name" name="u_name" autocomplete="off" required="">
		         		   <div class="input-group-append">
		         		      <div class="input-group-text"> <span class="fas fa-user text-danger"></span> </div>
		         		   </div>
		         		</div>
		         	</div>
		         	<div class="col-6">
		         		<div class="input-group mb-3">
		         		   <input type="text" class="form-control" placeholder="Location" name="u_location"  required="">
		         		   <div class="input-group-append">
		         		      <div class="input-group-text"> <span class="fas fa-map-marker-alt text-danger"></span> </div>
		         		   </div>
		         		</div>
		         	</div>
		         </div>
		         <div class="form-group row">
		         	<div class="col-6">
		         		<div class="input-group mb-3">
		         		   <input type="text" class="form-control" placeholder="Land In Acre" name="land_size"  required="">
		         		   <div class="input-group-append">
		         		      <div class="input-group-text"> <span class="fas fa-ruler-horizontal text-danger"></span> </div>
		         		   </div>
		         		</div>
		         	</div>
		         	<div class="col-6">
		         		<div class="input-group mb-3">
		         		   <input type="number" class="form-control" placeholder="Adhar No" name="u_adhar"  required="">
		         		   <div class="input-group-append">
		         		      <div class="input-group-text"> <span class="fas fa-id-card-alt text-danger"></span> </div>
		         		   </div>
		         		</div>
		         	</div>
		         </div>
		          <div class="form-group row">
		         	<div class="col-6">
		         		<div class="input-group mb-3">
		         		   <input type="number" class="form-control" placeholder="Mobile No" name="mobile_no"  required="">
		         		   <div class="input-group-append">
		         		      <div class="input-group-text"> <span class="fas fa-phone text-danger"></span> </div>
		         		   </div>
		         		</div>
		         	</div>
		         </div>
		        
		         <div class="row">
		            <!-- /.col -->
		            <div class="col-12">
		               <a  href="index.php" class="btn btn-primary float-left"  >Login</a>
		               <button  name="registration" class="btn btn-success text-center float-right">Register</button>
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