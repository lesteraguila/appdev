<?= $this->include('include/top')?>
<?= $this->include('include/header')?>

<!DOCTYPE html> 
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Doccure | Appointment</title>
</head>
	<body>
		<!-- Main Wrapper -->
		<div class="main-wrapper">			
			<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Checkout</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Checkout</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
				<!-- Page Content -->
				<div class="content">
					<div class="container">

						<div class="row">
							<div class="col-md-7 col-lg-8">
								<div class="card">
									<div class="card-body">
									
										<!-- Checkout Form -->
										<form action="<?= base_url('AppointmentController/insertbooking')?>" method="post" autocomplete="off">
											<!-- Personal Information -->
											<div class="info-widget">
												<h4 class="card-title">Personal Information</h4>
												<div class="row">
													<div class="col-md-6 col-sm-12">
														<div class="form-group card-label">
															<label>First Name</label>
															<input class="form-control" type="text" name="firstname">
														</div>
													</div>
													<div class="col-md-6 col-sm-12">
														<div class="form-group card-label">
															<label>Last Name</label>
															<input class="form-control" type="text" name="lastname">
														</div>
													</div>
													<div class="col-md-6 col-sm-12">
														<div class="form-group card-label">
															<label>Phone</label>
															<input class="form-control" type="text" name="number">
														</div>
													</div>
                                                    <div class="col-md-6 col-sm-12">
														<div class="form-group card-label">
															<label>Date and time</label>
															<input class="form-control" type="text" id="datetimepicker" name="datetime">
														</div>
													</div>
													<div class="col-md-6 col-sm-12">
														<div class="form-group card-label">
															<label></label>
														</div>
													</div>
                                                    <div class="col-md-6 col-sm-12">
														<div class="form-group card-label">
															<label>Treatment</label>
															<select class="form-control" type="text" name ="treatment">
																<option>-- Select --</option>
																<option>Cleaning</option>
																<option>Whitening</option>
																<option>Braces</option>
																<option>Extraction</option>
																<option>fillings</option>
																<option>Others</option>
															</select>
														</div>
													</div>
												</div>
											</div>
											<?= @csrf_field() ?>
											<!-- /Personal Information -->
                                            <!-- Submit Section -->
                                            <div class="submit-section mt-4">
                                                <button type="submit" class="btn btn-primary submit-btn">Set an appointment</button>
                                            </div>
                                            <!-- /Submit Section -->
										</form>
										<!-- /Checkout Form -->
										
									</div>
								</div>
								
							</div>
							
							<div class="col-md-5 col-lg-4 theiaStickySidebar">
							
								<!-- Booking Summary -->
								<div class="card booking-card">
									<div class="card-header">
										<h4 class="card-title">Booking Summary</h4>
									</div>
									<div class="card-body">
									
										<!-- Booking Doctor Info -->
										<div class="booking-doc-info">
											<a href="doctor-profile.html" class="booking-doc-img">
												<img src="assets/img/doctors/doctor-thumb-02.jpg" alt="User Image">
											</a>
											<div class="booking-info">
												<h4><a href="doctor-profile.html">Dr. Darren Elder</a></h4>
												<div class="rating">
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star"></i>
													<span class="d-inline-block average-rating">35</span>
												</div>
												<div class="clinic-details">
													<p class="doc-location"><i class="fas fa-map-marker-alt"></i> Newyork, USA</p>
												</div>
											</div>
										</div>
										<!-- Booking Doctor Info -->
										
										<div class="booking-summary">
											<div class="booking-item-wrap">
												<ul class="booking-date">
													<li>Date <span>16 Nov 2019</span></li>
													<li>Time <span>10:00 AM</span></li>
												</ul>
												<ul class="booking-fee">
													<li>Consulting Fee <span>$100</span></li>
													<li>Booking Fee <span>$10</span></li>
													<li>Video Call <span>$50</span></li>
												</ul>
												<div class="booking-total">
													<ul class="booking-total-list">
														<li>
															<span>Total</span>
															<span class="total-cost">$160</span>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Booking Summary -->
							</div>
						</div>

					</div>
				</div>		
				<!-- /Page Content -->
			<?= $this->include('include/footer')?>	
	   </div>
	   <!-- /Main Wrapper -->
	   <?= $this->include('include/end')?>	
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
		
	</body>

<!-- doccure/index.html  30 Nov 2019 04:12:03 GMT -->
</html>