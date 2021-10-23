<?php
session_start();
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

	<div class="login-box" style="border-radius: 20px; background:#ffffff">
		<div class="login-logo p-0 mt-2">
			<a href="#">
				<img src="dist/img/farmers_logo.png" style="widows: 200px; height: 150px; padding: 0px; margin: 0px; " class="brand-image center img-fluid">
			</a>
		</div>		
		<div class="card elevation-5">
		   <div class="card-body login-card-body opacity-0.6">
		      <p class="login-box-msg text-red font-weight-bolder">Login</p>
		      <form class="form-horizontal"   id="login-form" name="login-form" action="login_action.php" method="POST">
		         <input type="hidden" name="action" value="systemin">
		         <div class="input-group mb-3">
		            <input type="number" class="form-control" placeholder="Adhar No" name="u_adhar" required="">
		            <div class="input-group-append">
		               <div class="input-group-text"> <span class="fas fa-envelope text-danger"></span> </div>
		            </div>
		         </div>
		         <div class="input-group mb-3">
		            <input type="password" class="form-control" placeholder="Password" name="mobile_no" required="">
		            <div class="input-group-append">
		               <div class="input-group-text"> <span class="fas fa-lock text-danger"></span> </div>
		            </div>
		         </div>
		         <div class="row">
		            <!-- /.col -->
		            <div class="col-12">
		               <button  class="btn btn-success float-right" name="login">Login</button>
		               <a href="registration.php" type="submit" class="btn btn-primary float-left">Register</a>
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