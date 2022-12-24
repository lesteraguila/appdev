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

	<div class="col-md-7 col-lg-8 col-xl-9">
	 	<div class="card">
			<div class="card-body">
				<div class="row">
				<?= $this->include('patient/profile-slider')?>
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
	<?= $this->include('include/end')?>
	
</body>
</html>