<?= $this->include('include/top')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doccure | Change Password</title>
</head>
<body>
	<!-- Breadcrumb -->
	<div class="breadcrumb-bar">
		<div class="container-fluid">
			<div class="row align-items-center">
				<div class="col-md-12 col-12">
					<nav aria-label="breadcrumb" class="page-breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Change Password</li>
						</ol>
					</nav>
					<h2 class="breadcrumb-title">Change Password</h2>
				</div>
			</div>
		</div>
	</div>
	<!-- /Breadcrumb -->
	<!-- Page Content -->
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<!-- Profile Sidebar -->									
					<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
                        <div class="profile-sidebar">
                            <div class="widget-profile pro-widget-content">
                                <div class="profile-info-widget">
                                    <a href="#" class="booking-doc-img">
                                        <img src="<?=base_url()?>/assets/img/patients/patient4.jpg" alt="User Image">
                                    </a>
                                    <div class="profile-det-info">
                                        <h3>Richard Wilson</h3>
                                        <div class="patient-details">
                                            <h5><i class="fas fa-birthday-cake"></i> 24 Jul 1983, 38 years</h5>
                                            <h5 class="mb-0"><i class="fas fa-map-marker-alt"></i> Newyork, USA</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard-widget">
                                <nav class="dashboard-menu">
                                    <ul>
                                        <li>
                                            <a href="<?= base_url('dashboard') ?>">
                                                <i class="fas fa-columns"></i>
                                                <span>Dashboard</span>
                                            </a>
                                        </li>
										<li>
											<a href="<?= base_url('user/appointment') ?>">
												<i class="fas fa-bookmark"></i>
												<span>Appointment</span>
											</a>
										</li>
                                        <li>
                                            <a href="<?= base_url('dashboard/profile') ?>">
                                                <i class="fas fa-user-cog"></i>
                                                <span>Profile Settings</span>
                                            </a>
                                        </li>
                                        <li class="active">
                                            <a href="<?= base_url('dashboard/change-password') ?>">
                                                <i class="fas fa-lock"></i>
                                                <span>Change Password</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('auth/logout') ?>">
                                                <i class="fas fa-sign-out-alt"></i>
                                                <span>Logout</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
				<!-- /Profile Sidebar -->								
				
				<div class="col-md-7 col-lg-8 col-xl-9">
					<div class="card">
						<div class="card-body">

								<div class="col-md-12 col-lg-6">

								<?php $errors = session()->getFlashdata('errors'); ?>
										<?php if (!empty($errors)) : ?>
											<div class="alert alert-danger">
												<ul class="list-unstyled">
													<?php foreach ($errors as $error) : ?>
														<li><?php echo $error ?></li>
													<?php endforeach ?>
												</ul>
											</div>
										<?php endif ?>

										<?php if (!empty(session()->getFlashdata('error'))) : ?>
											<div class="alert alert-danger">
												<?= session()->getFlashdata('error'); ?>
											</div>
										<?php endif ?>

										<?php if (!empty(session()->getFlashdata('success'))) : ?>
											<div class="alert alert-success">
												<?= session()->getFlashdata('success'); ?>
											</div>
										<?php endif ?>

									<!-- Change Password Form -->
									<form action="<?= base_url('dashboard/change-password') ?>"  method="post" enctype="multipart/form-data">
										<div class="form-group">
											<label>Old Password</label>
											<input type="password" class="form-control" name="password" id="password" value="<?= set_value('password') ?>">
										</div>
										<div class="form-group">
											<label>New Password</label>
											<input type="password" class="form-control" name="newpassword" id="newpassword" value="<?= set_value('newpassword') ?>">
										</div>
										<div class="form-group">
											<label>Confirm Password</label>
											<input type="password" class="form-control" name="renewpassword" id="renewpassword" value="<?= set_value('renewpassword') ?>">
										</div>
										
										<?= @csrf_field() ?>
										<div class="submit-section">
											<button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
										</div>
									</form>					
									<!-- /Change Password Form -->			
								</div>
							</div>
						</div>
					</div>
	   			</div>
			</div>
		</div>
	</div>		
	<!-- /Page Content -->
	<?= $this->include('include/end')?>
	
</body>
</html>
