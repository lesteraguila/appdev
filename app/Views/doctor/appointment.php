<?= $this->include('include/top')?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Doccure - Settings</title>
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="<?= base_url()?>/admin-assets/img/favicon.png">
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?= base_url()?>/admin-assets/css/bootstrap.min.css">	
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="<?= base_url()?>/admin-assets/css/font-awesome.min.css">	
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="<?= base_url()?>/admin-assets/css/feathericon.min.css">	
		<!-- Select2 CSS -->
		<link rel="stylesheet" href="<?= base_url()?>/admin-assets/css/select2.min.css">	
		<!-- Main CSS -->
        <link rel="stylesheet" href="<?= base_url()?>/admin-assets/css/style.css">>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
		<!-- Datatables CSS -->
		<link rel="stylesheet" href="<?= base_url()?>/admin-assets/plugins/datatables/datatables.min.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url()?>/jquery-datetimepicker/jquery.datetimepicker.css"/ >
    	<script src="<?= base_url()?>/jquery-datetimepicker/jquery.js"></script>
    	<script src="<?= base_url()?>/jquery-datetimepicker/build/jquery.datetimepicker.full.min.js"></script>
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
								<h3 class="page-title">Appointment</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Appoinment</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
                    <div class="row">
						<div class="col-md-12">
							<h4 class="mb-4">Patient Appoinment</h4>
							<div class="appointment-tab">
							
								<!-- Appointment Tab -->
								<ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded">
									<li class="nav-item">
										<a class="nav-link active" href="#upcoming-appointments" data-toggle="tab">All</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#today-appointments" data-toggle="tab">Today</a>
									</li> 
								</ul>
								<!-- /Appointment Tab -->	
								<div class="tab-content">
								
									<!-- Upcoming Appointment Tab -->
									<div class="tab-pane show active" id="upcoming-appointments">
									<div class="card card-table mb-0">
											<div class="card-body">
												<div class="table-responsive">
													<table class="table table-hover table-center mb-0" id="table_id">	
														<thead>
															<tr>
																<th>Appt ID</th>
																<th>First Name</th>
																<th>Last Name</th>
																<th>Number</th>
																<th>Appt Date</th>
																<th>Purpose</th>
																<th>Status</th>																			
																<th></th>
															</tr>
														</thead>
														<tbody>
															<?php foreach($users as $user):?>
															<tr>
																<td><?php echo $user->id;?></td>
																<td><?php echo $user->firstname;?></td>
																<td><?php echo $user->lastname;?></td>
																<td><?php echo $user->number;?></td>
																<td><?php echo $user->datetime;?></td>
																<td><?php echo $user->treatment;?></td>
																<td>
																	<?php if($user->status == 'PENDING'):?>	
																		<span class="badge badge-pill bg-warning-light"><?php echo $user->status;?></span>
																	<?php else: ?>
																		<span class="badge badge-pill bg-success-light"><?php echo $user->status;?></span>
																	<?php endif?>
																<td>
																<a data-toggle="modal" href="#edit_invoice_report" class="btn btn-sm bg-info-light md" data-number="<?php echo $user->datetime;?>">
																			<i class="far fa-eye"></i> View
																		</a>
																<?php if($user->status == 'PENDING'):?>
																	<a href="<?php echo base_url('DoctorDashboard/changestatus/'.$user->id);?>" class="btn btn-sm bg-success-light">
																		<i class="fas fa-check"></i> Accept
																	</a>
																<?php else:?>
																	<a href="<?php echo base_url('DoctorDashboard/changestatus/'.$user->id);?>" class="btn btn-sm bg-danger-light">
																		<i class="fas fa-times"></i> Cancel
																	</a>
																<?php endif?>           
																</td>	
															</tr>
															<?php endforeach;?>
														</tbody>
													</table>		
												</div>	
											</div>	
										</div>	
									</div>
									<!-- /Upcoming Appointment Tab -->
								
									<!-- Today Appointment Tab -->
									<div class="tab-pane" id="today-appointments">
										<div class="card card-table mb-0">
											<div class="card-body">
												<div class="table-responsive">
													<table class="table table-hover table-center mb-0" >
														<thead>
															<tr>
																<th>Appt ID</th>
																<th>First Name</th>
																<th>Last Name</th>
																<th>Number</th>
																<th>Appt Date</th>
																<th>Purpose</th>																		
																<th></th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>Fever</td>
																<td>14 Nov 2019 <span class="d-block text-info">6.00 PM</span></td>
																<td>Fever</td>
																<td>Old Patient</td>
																<td class="text-center">$300</td>
																<td class="text-right">
																	<div class="table-action">
																		<a href="#edit_invoice_report" class="btn btn-sm bg-info-light">
																			<i class="far fa-eye"></i> View
																		</a>
																		
																		<a href="javascript:void(0);" class="btn btn-sm bg-success-light">
																			<i class="fas fa-check"></i> Accept
																		</a>
																		<a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
																			<i class="fas fa-times"></i> Cancel
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
									<!-- /Today Appointment Tab -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Page Wrapper -->
        </div>
		<!-- /Main Wrapper -->
		<div>
						<!-- Edit Details Modal -->
			<div class="modal fade" id="edit_invoice_report" aria-hidden="true" role="dialog">
				<div class="modal-dialog modal-dialog-centered" role="document" >
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Edit Invoice Report</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form action="<?php echo base_url('DoctorDashboard/changedate/'.$user->id);?>" method="post">
								<div class="row form-row">
									<div class="col-12 col-sm-6">
										<div class="form-group">
											<label>Invoice Number</label>
											<input type="text" class="form-control" value="#INV-0001">
										</div>
									</div>
									<div class="col-12 col-sm-6">
										<div class="form-group">
											<label>date</label>
											<input type="text" class="form-control test_data" id="datetimepicker" name="datetime">
										</div>
									</div>
									<div class="col-12 col-sm-6">
										<div class="form-group">
											<label>Patient Name</label>
											<input type="text" class="form-control" value="R Amer">
										</div>
									</div>
									<div class="col-12 col-sm-6">
										<div class="form-group">
											<label>Patient Image</label>
											<input type="file"  class="form-control">
										</div>
									</div>
									<div class="col-12 col-sm-6">
										<div class="form-group">
											<label>Total Amount</label>
											<input type="text"  class="form-control" value="$200.00">
										</div>
									</div>
									<div class="col-12 col-sm-6">
										<div class="form-group">
											<label>Created Date</label>
											<input type="text"  class="form-control" value="29th Oct 2019">
										</div>
									</div>
									
								</div>
								<button type="submit" class="btn btn-primary btn-block">Save Changes</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- /Edit Details Modal -->
		</div>
	
		<!-- jQuery -->
		<script>
			$(document).ready(function(){
				$(".md").click(function(){
					var price = $(this).attr("data-number");
					console.log(price);
					$(".test_data").val(price);
				})
			})
		</script>
		<script>
            jQuery('#datetimepicker').datetimepicker({
            onGenerate:function( ct ){
                jQuery(this).find('.xdsoft_date.xdsoft_weekend')
                .addClass('xdsoft_disabled');
            },
            weekends:['01.01.2014','02.01.2014','03.01.2014','04.01.2014','05.01.2014','06.01.2014'],
            allowTimes:['10:00', '11:30', '12:30','13:00', '14:00', '14:30'],
			minDate:'-1970/01/01',
            todayButton:true,
            });
        </script>

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
				<!-- Datatables JS -->
		<script src="<?= base_url()?>/admin-assets/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="<?= base_url()?>/admin-assets/plugins/datatables/datatables.min.js"></script>
		
		<!-- Datatables JS -->
		<script src="<?= base_url()?>/admin-assets/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="<?= base_url()?>/admin-assets/plugins/datatables/datatables.min.js"></script>
	
        <?= $this->include('include/end')?>

    </body>
</html>