<?= $this->include('include/top')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>/jquery-datetimepicker/jquery.datetimepicker.css"/ >
    <script src="<?= base_url()?>/jquery-datetimepicker/jquery.js"></script>
    <script src="<?= base_url()?>/jquery-datetimepicker/build/jquery.datetimepicker.full.min.js"></script>
    <title>Doccure | Profile</title>
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
                            <li class="breadcrumb-item active" aria-current="page">Profile Settings</li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title">Profile Settings</h2>
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
                <!-- /Profile Sidebar -->
                
                <div class="col-md-7 col-lg-8 col-xl-9">
                    <div class="card">
                        <div class="card-body">     
                            <!-- Profile Settings Form -->
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

                            <form action="<?= base_url('dashboard/profile') ?>"  method="post" enctype="multipart/form-data">
                                <div class="row form-row">
                                    <div class="col-12 col-md-12">
                                        <div class="form-group">
                                            <div class="change-avatar">
                                                <div class="profile-img">
                                                    <?php if (!is_null($photo)) : ?>
                                                    <img src="<?= base_url($photo) ?>" class="rounded float-start" alt="Photo" style="width:9em; padding-bottom: 10px;">
                                                    <?php endif ?>
                                                    <?php if (is_null($photo)) : ?>
                                                    <img src="<?= base_url('uploads/user-default.png') ?>" class="rounded float-start" alt="Photo" style="width:9em; padding-bottom: 10px;">
                                                    <?php endif ?>
                                                </div>
                                                <input type="hidden" class="form-control" name="name" id="name" value="<?= set_value('name',$name) ?>" placeholder="">       
                                                    <div class="form-group mb-3">
                                                        <input name="photo" id="photo" type="file" class="form-control" accept="image/*">
                                                    </div>  
                                                                                               
                                            </div>
                                        </div>
                                    </div>
                                    <?php foreach($info as $user):?>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" name='firstname' class="form-control" value="<?php echo $user->firstname;?>">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" name='lastname' class="form-control" value="<?php echo $user->lastname;?>">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>Date of Birth</label>
                                            <div class="cal-icon">
                                                <input type="text" name='birthday' id="datetimepicker" class="form-control" value="<?php echo $user->birthday;?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>Blood Type</label>
                                            <select class="form-control select" name='bloodtype' value='<?php echo $user->bloodtype;?>'>
                                                <option>A-</option>
                                                <option>A+</option>
                                                <option>B-</option>
                                                <option>B+</option>
                                                <option>AB-</option>
                                                <option>AB+</option>
                                                <option>O-</option>
                                                <option>O+</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>Mobile</label>
                                            <input type="text" name='number' value="<?php echo $user->number;?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                        <label>Address</label>
                                            <input type="text" name='address' class="form-control" value="<?php echo $user->address;?>">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>City</label>
                                            <input type="text" name='city' class="form-control" value="<?php echo $user->city;?>">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>State</label>
                                            <input type="text" name='state' class="form-control" value="<?php echo $user->state;?>">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>Zip Code</label>
                                            <input type="text" name='zipcode' class="form-control" value="<?php echo $user->zipcode;?>">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>Country</label>
                                            <input type="text" name='country' class="form-control" value="<?php echo $user->country;?>">
                                        </div>
                                    </div>
                                    <?php endforeach;?>
                                    <?= @csrf_field() ?>  
                                </div>
                                <div class="submit-section">
                                    <button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
                                </div>
                            </form>
                            <!-- /Profile Settings Form -->                       
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>      
    <!-- /Page Content -->
    <!-- jQuery -->
		<script src="assets/js/jquery.min.js"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slick JS -->
		<script src="assets/js/slick.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>

        <script>
            jQuery('#datetimepicker').datetimepicker({
            format:"m/d/Y",
            timepicker:false,
            todayButton:true,
            });
        </script>
</body>
</html>