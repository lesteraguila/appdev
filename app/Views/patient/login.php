<?= $this->include('include/top')?>
<?= $this->include('include/header')?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doccure | Login</title>
</head>
<body>

	<div class="content">
		<div class="container-fluid">		
			<div class="row">
				<div class="col-md-8 offset-md-2">		
					<!-- Login Tab Content -->
					<div class="account-content">
						<div class="row align-items-center justify-content-center">
							<div class="col-md-7 col-lg-6 login-left">
								<img src="<?=base_url()?>/assets/img/login-banner.png" class="img-fluid" alt="Doccure Login">	
							</div>
							<div class="col-md-12 col-lg-6 login-right">
								<div class="login-header">
									<h3>Login <span>Doccure</span></h3>
								</div>

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

									<form action="<?= base_url('auth/login') ?>" method="post">
									<div class="form-group form-focus">
									<input type="email" name="email" class="form-control floating" id="InputForEmail" value="<?= set_value('email') ?>">
				
										<label class="focus-label">Email</label>
									</div>
									<div class="form-group form-focus">
										<input type="password" name="password" class="form-control floating" value="<?= set_value('password') ?>">
										<label class="focus-label">Password</label>
									</div>
									<?= @csrf_field() ?>
									<div class="text-right">
										<a class="forgot-link" href="<?= base_url('/auth/recovery-password') ?>">Forgot Password ?</a>
									</div>
									<button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Login</button>
									<div class="text-center dont-have">Don’t have an account?<a href="<?= base_url('/auth/register') ?>">Register</a></div>
								</form>
							</div>
						</div>
					</div>
					<!-- /Login Tab Content -->				
				</div>
			</div>
		</div>
	</div>	
	<?= $this->include('include/footer')?>	
	<?= $this->include('include/end')?>	
</body>
</html>