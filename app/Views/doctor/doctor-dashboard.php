
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<?= $this->include('doctor/include/top')?>
	<title>Admin - Dashboard</title>
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
						<div class="col-sm-12">
							<h3 class="page-title">Welcome Admin!</h3>
							<ul class="breadcrumb">
								<li class="breadcrumb-item active">Dashboard</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /Page Header -->

				<div class="row">
					<div class="col-xl-3 col-sm-6 col-12">
						<div class="card">
							<div class="card-body">
								<div class="dash-widget-header">
									<span class="dash-widget-icon text-primary border-primary">
										<i class="fe fe-users"></i>
									</span>
									<div class="dash-count">
										<h3>168</h3>
									</div>
								</div>
								<div class="dash-widget-info">
									<h6 class="text-muted">Doctors</h6>
									<div class="progress progress-sm">
										<div class="progress-bar bg-primary w-50"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 col-12">
						<div class="card">
							<div class="card-body">
								<div class="dash-widget-header">
									<span class="dash-widget-icon text-success">
										<i class="fe fe-credit-card"></i>
									</span>
									<div class="dash-count">
										<h3>487</h3>
									</div>
								</div>
								<div class="dash-widget-info">
									
									<h6 class="text-muted">Patients</h6>
									<div class="progress progress-sm">
										<div class="progress-bar bg-success w-50"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 col-12">
						<div class="card">
							<div class="card-body">
								<div class="dash-widget-header">
									<span class="dash-widget-icon text-danger border-danger">
										<i class="fe fe-money"></i>
									</span>
									<div class="dash-count">
										<h3>485</h3>
									</div>
								</div>
								<div class="dash-widget-info">
									
									<h6 class="text-muted">Appointment</h6>
									<div class="progress progress-sm">
										<div class="progress-bar bg-danger w-50"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 col-12">
						<div class="card">
							<div class="card-body">
								<div class="dash-widget-header">
									<span class="dash-widget-icon text-warning border-warning">
										<i class="fe fe-folder"></i>
									</span>
									<div class="dash-count">
										<h3>$62523</h3>
									</div>
								</div>
								<div class="dash-widget-info">
									
									<h6 class="text-muted">Revenue</h6>
									<div class="progress progress-sm">
										<div class="progress-bar bg-warning w-50"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-lg-6">
					
						<!-- Sales Chart -->
						<div class="card card-chart">
							<div class="card-header">
								<h4 class="card-title">Revenue</h4>
							</div>
							<div class="card-body">
								<div id="morrisArea"></div>
							</div>
						</div>
						<!-- /Sales Chart -->
						
					</div>
					<div class="col-md-12 col-lg-6">
					
						<!-- Invoice Chart -->
						<div class="card card-chart">
							<div class="card-header">
								<h4 class="card-title">Status</h4>
							</div>
							<div class="card-body">
								<div id="morrisLine"></div>
							</div>
						</div>
						<!-- /Invoice Chart -->		
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