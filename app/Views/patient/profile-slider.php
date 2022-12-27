
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
