<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/form-vertical.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:55 GMT -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Doccure - Settings</title>
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
            <div class="page-wrapper">
			
				<div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">Settings</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
									<li class="breadcrumb-item active">Settings</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Recovery Email Configuration</h4>
								</div>
								<div class="card-body">
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
									<form action="<?= base_url('admin/change-settings') ?>" method="post" enctype="multipart/form-data">
										<div class="form-group">
											<label>State:</label>
											<select class="select" name="mail_method">
												<option>Select State</option>
												<option value="0" <?php if (Settings('mail_method') == 0) { echo 'selected'; } else { echo ''; } ?>>PHP Mailer</option>
                                            	<option value="1" <?php if (Settings('mail_method') == 1) { echo 'selected'; } else { echo ''; } ?>>SMTP</option>
											</select>
										</div>
										<div class="row">
											<div class="col-md-6">
												<h4 class="card-title">PHP MAILER</h4>
												<div class="form-group">
													<label>Hostname:</label>
													<input type="text" class="form-control" name="phpmailer_host" id="phpmailer_host" value="<?= Settings('phpmailer_host') ?>" placeholder="">
												</div>
												<div class="form-group">
													<label>Email:</label>
													<input type="text" class="form-control" name="phpmailer_username" id="phpmailer_username" value="<?= Settings('phpmailer_username') ?>" placeholder="">
												</div>												
												<div class="form-group">
													<label>Password:</label>
													<input type="password" class="form-control" name="phpmailer_password" id="phpmailer_password" value="<?= Settings('phpmailer_password') ?>" placeholder="">
												</div>
												<div class="form-group">
													<label>Security(TLS/SSl):</label>
													<input type="text" class="form-control" name="phpmailer_secure" id="phpmailer_secure" value="<?= Settings('phpmailer_secure') ?>" placeholder="">
												</div>
												<div class="form-group">
													<label>Port:</label>
													<input type="text" class="form-control" name="phpmailer_port" id="phpmailer_port" value="<?= Settings('phpmailer_port') ?>" placeholder="">
												</div>
												<div class="form-group">
													<label>Charset:</label>
													<input type="text" class="form-control" name="phpmailer_charset" id="phpmailer_charset" value="<?= Settings('phpmailer_charset') ?>" placeholder="">
												</div>
											</div>

											<div class="col-md-6">
												<h4 class="card-title">SMTP</h4>
												<div class="form-group">
													<label>Hostname:</label>
													<input type="text" class="form-control" name="email_host" id="email_host" value="<?= Settings('email_host') ?>" placeholder="">
												</div>
												<div class="form-group">
													<label>Email:</label>
													<input type="text" class="form-control" name="email_username" id="email_username" value="<?= Settings('email_username') ?>" placeholder="">
												</div>												
												<div class="form-group">
													<label>Password:</label>
													<input type="password" class="form-control" name="email_password" id="email_password" value="<?= Settings('email_password') ?>" placeholder="">
												</div>
												<div class="form-group">
													<label>Security(TLS/SSl):</label>
													<input type="text" class="form-control" name="email_secure" id="email_secure" value="<?= Settings('email_secure') ?>" placeholder="">
												</div>
												<div class="form-group">
													<label>Port:</label>
													<input type="text" class="form-control" name="email_port" id="email_port" value="<?= Settings('email_port') ?>" placeholder="">
												</div>
												<div class="form-group">
													<label>Charset:</label>
													<input type="text" class="form-control" name="email_charset" id="email_charset" value="<?= Settings('email_charset') ?>" placeholder="">
												</div>
											</div>
										</div>
										<?= @csrf_field() ?>
										<div class="text-right">
											<button type="submit" class="btn btn-primary">Update</button>
										</div>
									</form>
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
		<!-- Select2 JS -->
		<script src="<?= base_url()?>/admin-assets/js/select2.min.js"></script>
		<!-- Custom JS -->
		<script  src="<?= base_url()?>/admin-assets/js/script.js"></script>
    </body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/form-vertical.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:55 GMT -->
</html>