<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/form-vertical.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:55 GMT -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Doccure - Social Media</title>
	<?= $this->include('doctor/include/top')?>
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
           <!-- Page Wrapper -->
           <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">Social Media</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
									<li class="breadcrumb-item active">Social Media</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-lg-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Social Media Configurations</h4>
								</div>
								<div class="card-body">
									<form action="#">
										<div class="form-group row">
											<label class="col-form-label col-md-2">Facebook URL</label>
											<div class="col-md-10">
												<input type="text" class="form-control">
											</div>
										</div>	
                                        <div class="form-group row">
											<label class="col-form-label col-md-2">Twitter URL</label>
											<div class="col-md-10">
												<input type="text" class="form-control">
											</div>
										</div>
                                        <div class="form-group row">
											<label class="col-form-label col-md-2">Instagram URL</label>
											<div class="col-md-10">
												<input type="text" class="form-control">
											</div>
										</div>
                                        <div class="form-group row">
											<label class="col-form-label col-md-2">Linkedin URL</label>
											<div class="col-md-10">
												<input type="text" class="form-control">
											</div>
										</div>
                                        <div class="form-group row">
											<label class="col-form-label col-md-2">Youtube URL</label>
											<div class="col-md-10">
												<input type="text" class="form-control">
											</div>
										</div>
                                        <div class="text-right">
                                            <button class="btn btn-primary" type="button">Update</button>
										</div>																																	
										</div>
									</form>
								</div>
							</div>			
						</div>
					</div>
				
				</div>			
			</div>
			<!-- /Main Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="<?= base_url()?>/admin-assets/js/jquery-3.2.1.min.js"></script>	
		<!-- Bootstrap Core JS -->
        <script src="<?= base_url()?>/admin-assets/js/popper.min.js"></script>
        <script src="<?= base_url()?>/admin-assets/js/bootstrap.min.js"></script>	
		<!-- Slimscroll JS -->
        <script src="<?= base_url()?>/admin-assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>	
		<!-- Select2 JS -->
		<script src="<?= base_url()?>/admin-assets/js/select2.min.js"></script>
		<!-- Custom JS -->
		<script  src="<?= base_url()?>/admin-assets/js/script.js"></script>
    </body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/form-vertical.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:55 GMT -->
</html>