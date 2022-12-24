<?= $this->include('doctor/include/top')?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Admin | Patients</title>
</head>

<body>
	<!-- Main Wrapper -->
	<div class="main-wrapper">

		<!-- Header -->
		<?= $this->include('doctor/include/header')?>
		<!-- /Header -->	

		<!-- Sidebar -->
		<?= $this->include('doctor/doctor-slider')?>
		<!-- /Sidebar -->

		<!-- Page Wrapper -->
		<div class="page-wrapper">
			<div class="content container-fluid">			
                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col">
                            <h3 class="page-title">User Data</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item active">User Data</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->		
				<div class="row">
					<div class="col-md-12">
					
						<!-- Recent Orders -->
						<div class="card card-table">

							<nav class="navbar navbar-light bg-light justify-content-between">
								<a class="navbar-brand">User list</a>
								<form class="form-inline" method='get' action="patient" id="searchForm">
									<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name='search' value='<?= $search ?>'>
									<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
								</form>
							</nav>`
							
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-hover table-center mb-0">
										<thead>
											<tr>
												<th>Id</th>
												<th>Username</th>
												<th>Email</th>
												<th>Time Created</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach($users as $user):?>
											<tr>
												<td><?=$user['id'];?></td>
												<td><?=$user['name'];?></td>
												<td><?=$user['email'];?></td>
												<td><?=$user['created_at'];?></td>							
											</tr>
											<?php endforeach;?>
										</tbody>
									</table>
								</div>								
							</div>	
						</div>

						<div>
						<ul class="pagination justify-content-end">
							<li class="page-item disabled">
							<a class="page-link" href="#" tabindex="-1">Previous</a>
							</li>
							<li class="page-item"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item">
							<a class="page-link" href="#">Next</a>
							</li>
						</ul>
						</div>
						<!-- /Recent Orders -->
						
					</div>
				</div>
				
			</div>			
		</div>
		<!-- /Page Wrapper -->
	</div>
	<!-- /Main Wrapper -->

		<!-- jQuery -->
        <script src="<?= base_url()?>/admin-assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="<?= base_url()?>/admin-assets/js/popper.min.js"></script>
        <script src="<?= base_url()?>/admin-assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="<?= base_url()?>/admin-assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<script src="<?= base_url()?>/admin-assets/plugins/raphael/raphael.min.js"></script>    
		<script src="<?= base_url()?>/admin-assets/plugins/morris/morris.min.js"></script>  
		<script src="<?= base_url()?>/admin-assets/js/chart.morris.js"></script>
		<!-- Custom JS -->
		<script  src="<?= base_url()?>/admin-assets/js/script.js"></script>
</body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:34 GMT -->
</html>