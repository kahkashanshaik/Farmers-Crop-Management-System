<?php
	require('../conn.php');
	session_start();
	if(isset($_SESSION['id'])){?>
		<!DOCTYPE html>
		<html>
		<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<title>Farmers Management System</title>
			<link rel="stylesheet" type="text/css" href="../dist/css/adminlte.css">
			<link rel="stylesheet" type="text/css" href="../dist/fontawesome-free/css/all.min.css">
			<link rel="icon" type="image/png" href="../dist/img/farmers_logo.png">
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
									<img src="../dist/img/farmers_logo.png" style="widows: 100px; height: 100px; padding: 0px; margin: 0px; " class="brand-image center img-fluid">
								</a>
							</div>		
						</div>
					</div>
					<div class="col-8 text-center">
						<h3 class="text-center">Welcome, <?php echo $_SESSION['u_name']?></h3>

					</div>
					<div class="col-2">
						<a href="logout.php" class="btn btn-secondary btn-md ml-5">Logout</a>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h4 class="text-center text-success "><u>FARMERS LISTS</u></h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-bordered table-hover table-striped table-sm">
											
											<thead>
												<tr>
													<th>ID</th>
													<th>Name</th>
													<th>Location</th>
													<th>Land Size</th>
													<th>Adhar</th>
													<th>Mobile No</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<?php
												$sql_s="SELECT * FROM farmers";
												$result = mysqli_query($conn, $sql_s);
												if (mysqli_num_rows($result) > 0) {
													$num = 0;
													while($row = $result->fetch_assoc()){
														$num++;?>

														<tr>
															<th><?php echo $num?></th>
															<th><?php echo $row['u_name']?></th>
															<th><?php echo $row['u_location']?></th>
															<th><?php echo $row['land_size']?></th>
															<th><?php echo $row['u_adhar']?></th>
															<th><?php echo $row['mobile_no']?></th>
															<th><div class="row">
																<div class="col-3">
																	<a href='editpage.php?id=<?php echo $row['id']?>' class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
															
																</div>
																<div class="col-3">
																	<form action="home_action.php" method="POST">
																		<input type="hidden" name="id" value="<?php echo $row['id']?>">
																		<button  name="deleteRecord" class="btn btn-danger btn-sm float-right"><i class="fas fa-trash"></i>
																		</button>
																	</form>
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
					</div>
				</div>

				

			</div>
			

			<script src="../dist/jquery/jquery.min.js"></script>
			<script src="../dist/js/adminlte.js"></script>

		</body>
		</html>
	<?php
	}else{
		header('location:index.php');
	}
?>
