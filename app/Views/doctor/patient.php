<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/patient-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:51 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Doccure - Patient List Page</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="<?= base_url()?>/admin-assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?= base_url()?>/admin-assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="<?= base_url()?>/admin-assets/css/font-awesome.min.css">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="<?= base_url()?>/admin-assets/css/feathericon.min.css">
		
		<!-- Datatables CSS -->
		<link rel="stylesheet" href="<?= base_url()?>/admin-assets/plugins/datatables/datatables.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="<?= base_url()?>/admin-assets/css/style.css">
		
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
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
								<h3 class="page-title">List of Patient</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
									<li class="breadcrumb-item"><a href="javascript:(0);">Users</a></li>
									<li class="breadcrumb-item active">Patient</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<div class="table-responsive">
										<table class="datatable table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>Patient ID</th>
													<th>Patient Name</th>
													<th>Email</th>													
												</tr>
											</thead>
											<tbody>
												<?php foreach($users as $user):?>
												<tr>
													<td><?php echo $user->id;?></td>
													<td>
														<h2 class="table-avatar">
															<?php if($user->photo == ''):?>
																<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="<?= base_url('uploads/user-default.png') ?>" alt="User Image"></a>
															<?php else:?>
																<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="<?= base_url() .'/'.  $user->photo;?>" alt="User Image"></a>
															<?php endif?>
															<a href="profile.html"><?php echo $user->name;?></a>
														</h2>
													</td>
													<td><?php echo $user->email;?></td>										
												</tr>	
												<?php endforeach;?>
											</tbody>
										</table>
									</div>
									</div>
								</div>
							</div>
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
		
		<!-- Datatables JS -->
		<script src="<?= base_url()?>/admin-assets/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="<?= base_url()?>/admin-assets/plugins/datatables/datatables.min.js"></script>
		
		<!-- Custom JS -->
		<script  src="<?= base_url()?>/admin-assets/js/script.js"></script>
		
    </body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/patient-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:52 GMT -->
</html>