<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<?= $this->include('include/top')?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doccure | Dashboard</title>
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
									<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Dashboard</h2>
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
											<li class="active">
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
											<li>
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
						<!-- / Profile Sidebar -->
						
						<div class="col-md-7 col-lg-8 col-xl-9">
							<div class="card">

								<div class="card-body pt-0">
									<!-- Tab Menu -->
									<nav class="user-tabs mb-4">
										<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
											<li class="nav-item">
												<a class="nav-link active" href="#pat_appointments" data-toggle="tab">Appointments</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#pat_medical_records" data-toggle="tab"><span class="med-records">Medical Records</span></a>
											</li>

										</ul>
									</nav>
									<!-- /Tab Menu -->
									<!-- Tab Content -->
									<div class="tab-content pt-0">
										
										<!-- Appointment Tab -->
										<div id="pat_appointments" class="tab-pane fade show active">
											<div class="card card-table mb-0">
												<div class="card-body">
													<div class="table-responsive">
														<table class="table table-hover table-center mb-0">
															<thead>
																
																<tr>
																	<th>Appointment ID</th>
																	<th>Appt Date</th>
																	<th>treatment</th>	
																	<th>Status</th>
																	<th></th>
																</tr>
															</thead>
															<tbody class="booking">
																<?php foreach($users as $user):?>
																<tr>
																	<td><?php echo $user->id;?>	</td>
																	<td><?php echo $user->datetime;?></td>		
																	<td><?php echo $user->treatment;?></td>
																	<td>
																	<?php if($user->status == 'PENDING'):?>
																		<span class="badge badge-pill bg-warning-light">Pending</span>
																	<?php elseif($user->status =='ACCEPTED'):?>
																		<span class="badge badge-pill bg-success-light">Accepted</span>
																	<?php else:?>
																		<span class="badge badge-pill bg-success-light">cancelled</span>
																	<?php endif?>
																	</td>	
																	<td>
																	<a href="" class="btn btn-sm bg-warning light" disabled>
																		<i class="fas fa-times"></i> Cancel
																	</a>
																	</td>																	
																</tr>
																<?php endforeach?>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
										<!-- /Appointment Tab -->
											
										<!-- Medical Records Tab -->
										<div id="pat_medical_records" class="tab-pane fade">
											<div class="card card-table mb-0">
												<div class="card-body">
													<div class="table-responsive">
														<table class="table table-hover table-center mb-0">
															<thead>
																<tr>
																	<th>ID</th>
																	<th>Date </th>
																	<th>Description</th>
																	<th>Attachment</th>
																	<th>Created</th>
																	<th></th>
																</tr>     
															</thead>
															<tbody>	
																<tr>
																	<td><a href="javascript:void(0);">#MR-0009</a></td>
																	<td>13 Nov 2019</td>
																	<td>Teeth Cleaning</td>
																	<td><a href="#">dental-test.pdf</a></td>
																	<td>
																		<h2 class="table-avatar">
																			<a href="doctor-profile.html" class="avatar avatar-sm mr-2">
																				<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-02.jpg" alt="User Image">
																			</a>
																			<a href="doctor-profile.html">Dr. Darren Elder <span>Dental</span></a>
																		</h2>
																	</td>
																	<td class="text-right">
																		<div class="table-action">
																			<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
																				<i class="far fa-eye"></i> View
																			</a>
																			<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
																				<i class="fas fa-print"></i> Print
																			</a>
																		</div>
																	</td>
																</tr>																														
															</tbody>  	
														</table>
													</div>
												</div>
											</div>
										</div>
										<!-- /Medical Records Tab -->
										
									</div>
									<!-- Tab Content -->					
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>		
			<!-- /Page Content -->
	<?= $this->include('include/end')?>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script>
		$(document).ready(function(){
			<?php if(session()->getFlashdata('status')):?>
			swal({
				title: "<?= session()->getFlashdata('status')?>",
				text: "<?= session()->getFlashdata('status2')?>",
				icon: "success",
				timer:1500,
				button:false,
				});
			<?php endif;?>
		});

		$(document).ready(function(){
			loaduser();
		});

		function loaduser(){
			$.ajax({
				method:"GET",
				url:"/try",
				success: function(response){
					$.each(response.user, function(key, value){
						//console.log(value['firstname']);
						$('.bookingdata').append(
							'<tr>\
								<td>' +value['id']+'</td>\
								<td>' +value['firstname']+'</td>\
								<td>' +value['lastname']+'</td>\
								<td>' +value['treatment']+'</td>\
							</td>'
						);
					});
				}
			});
		}
	</script>
</body>
</html>