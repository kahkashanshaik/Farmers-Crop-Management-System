<?php
	session_start();
	require('conn.php');
	if(isset($_SESSION['id'])){?>
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
						<a href="addCrop.php" class="btn btn-success btn-md">ADD CROP</a>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>SI NO.</th>
										<th>CROP SUMMER</th>
										<th>CROP WINTER</th>
										<th>CROP RAINY</th>
										<th>DATE & TIME</th>
										<th>ACTION</th>
									</tr>
								</thead>
								<tbody>
									<?php
												$sql_s="SELECT * FROM famers_crop_dtls where farmer_id='".$_SESSION['id']."'";
												$result = mysqli_query($conn, $sql_s);
												if (mysqli_num_rows($result) > 0) {
													$num = 0;
													while($row = $result->fetch_assoc()){
														$num++;?>
													<tr>
													<td><?php echo $num?></td>
													<td><?php echo $row['crop_summer']?></td>
													<td><?php echo $row['crop_winter']?></td>
													<td><?php echo $row['crop_rainy']?></td>
													<td><?php echo $row['creation_date']?></td>
													<th><div class="row">
														<div class="col-3">
															<a href='editCrop.php?id=<?php echo $row['id']?>' class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
														</div>
													</div>
													</th>
												</tr>
												<?php
											}
											}
											?>
									
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			


		</body>
		</html>
	<?php
	}else{
		header('location:index');
	}
?>
