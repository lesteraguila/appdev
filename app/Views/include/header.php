<div class="main-wrapper">
    <header class="header">
		<nav class="navbar navbar-expand-lg header-nav">
			<div class="navbar-header">
				<a id="mobile_btn" href="javascript:void(0);">
					<span class="bar-icon">
						<span></span>
						<span></span>
						<span></span>
					</span>
				</a>
				<a href="<?=base_url('/')?>" class="navbar-brand logo">
					<img src="<?=base_url()?>/assets/img/logo.png" class="img-fluid" alt="Logo">
				</a>
			</div>
			<div class="main-menu-wrapper">
				<div class="menu-header">
					<a href="<<?=base_url('/')?>" class="menu-logo">
						<img src="assets/img/logo.png" class="img-fluid" alt="Logo">
					</a>
					<a id="menu_close" class="menu-close" href="javascript:void(0);">
						<i class="fas fa-times"></i>
					</a>
				</div>
				<ul class="main-nav">
					<li>
					<a href="<?= base_url('/') ?>">Home</a>
					</li>
					<li>
						<a href="/auth/login">Login</a>
					</li>
					<li>
						<a href="/user/appointment">Appointment</a>
					</li>
					<li>
						<a href="/dashboard">Patient Dashboard</a>
					</li>
					<li>
						<a href="/privacy">Privacy</a>
					</li>
					<li>
						<a href="/about">About</a>
					</li>
					<li class="login-link">
						<a href="login.html">Login / Signup</a>
					</li>
				</ul>		 
			</div>		 
			<ul class="nav header-navbar-rht">
				<li class="nav-item contact-item">
					<div class="header-contact-img">
						<i class="far fa-hospital"></i>							
					</div>
					<div class="header-contact-detail">
						<p class="contact-header">Contact</p>
						<p class="contact-info-header">+1 315 369 5943</p>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link header-login" href="/admin/login" target="_blank">admin</a>
				</li>
			</ul>
		</nav>
	</header> 
</div>
