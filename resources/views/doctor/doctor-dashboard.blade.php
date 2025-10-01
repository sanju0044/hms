
<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Doctor Dashboard - Medical & Hospital - Bootstrap 5 Admin Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Dreams Technologies">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png">

    <!-- Apple Icon -->
    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">

    <!-- Theme Config Js -->
    <script src="assets/js/theme-script.js" type="text/javascript"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <!-- Tabler Icon CSS -->
    <link rel="stylesheet" href="assets/plugins/tabler-icons/tabler-icons.min.css">

    <!-- Daterangepikcer CSS -->
	<link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker.css">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

    <!-- Simplebar CSS -->
    <link rel="stylesheet" href="assets/plugins/simplebar/simplebar.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css" id="app-style">

</head>

<body>

    <!-- Begin Wrapper -->
    <div class="main-wrapper">

        <!-- Topbar Start -->
      @include('admin.header')
        <!-- Topbar End -->

        <!-- Search Modal -->
        <div class="modal fade" id="searchModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content bg-transparent">
                    <div class="card shadow-none mb-0">
                        <div class="px-3 py-2 d-flex flex-row align-items-center" id="search-top">
                            <i class="ti ti-search fs-22"></i>
                            <input type="search" class="form-control border-0" placeholder="Search">
                            <button type="button" class="btn p-0" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-x fs-22"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidenav Menu Start -->
        <div class="sidebar" id="sidebar">

            <!-- Start Logo -->
            <div class="sidebar-logo">
                <div>
                    <!-- Logo Normal -->
                    <a href="index.html" class="logo logo-normal">
                        <img src="assets/img/logo.svg" alt="Logo">
                    </a>

                    <!-- Logo Small -->
                    <a href="index.html" class="logo-small">
                        <img src="assets/img/logo-small.svg" alt="Logo">
                    </a>

                    <!-- Logo Dark -->
                    <a href="index.html" class="dark-logo">
                        <img src="assets/img/logo-white.svg" alt="Logo">
                    </a>
                </div>
                <button class="sidenav-toggle-btn btn border-0 p-0 active" id="toggle_btn">
                    <i class="ti ti-arrow-left text-body"></i>
                </button>

                <!-- Sidebar Menu Close -->
                <button class="sidebar-close">
                    <i class="ti ti-x align-middle"></i>
                </button>
            </div>
            <!-- End Logo -->

            <!-- Sidenav Menu -->
            <div class="sidebar-inner" data-simplebar>
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title"><span>Main Menu</span></li>
                        <li>
                            <ul>
                                <li class="active">
                                    <a href="doctor-dashboard.html">
                                        <i class="ti ti-layout-dashboard"></i><span>Dashboard</span>
                                    </a>
                                </li>
                                {{-- <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-calendar-check"></i><span>Appointments</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="doctors-appointments.html">Appointments</a></li>
                                        <li><a href="online-consultations.html">Online Consultations</a></li>
                                    </ul>
                                </li> --}}
                                <li>
                                    <a href="doctor-appointments">
                                        <i class="ti ti-clock-check"></i><span>Appointments</span>
                                    </a>
                                </li>
                                {{-- <li>
                                    <a href="doctors-schedules.html">
                                        <i class="ti ti-clock-check"></i><span>My Schedule</span>
                                    </a>
                                </li> --}}
                                <li>
                                    <a href="doctors-prescriptions.html">
                                        <i class="ti ti-prescription"></i><span>Prescriptions</span>
                                    </a>
                                </li>
                                {{-- <li>
                                    <a href="doctors-leaves.html">
                                        <i class="ti ti-calendar-x"></i><span>Leave</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="doctors-reviews.html">
                                        <i class="ti ti-star"></i><span>Reviews</span>
                                    </a>
                                </li> --}}
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-settings"></i><span>Settings</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="doctors-profile-settings.html">Profile Settings</a></li>
                                        <li><a href="doctors-password-settings.html">Change Password</a></li>
                                        <li><a href="doctors-notification-settings.html">Notifications</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
                <div class="sidebar-footer border-top mt-3">
                    <div class="trial-item mt-0 p-3 text-center">
                        <div class="trial-item-icon rounded-4 mb-3 p-2 text-center shadow-sm d-inline-flex">
                            <img src="assets/img/icons/sidebar-icon.svg" alt="img">
                        </div>
                        <div>
                            <h6 class="fs-14 fw-semibold mb-1">Upgrade To Pro</h6>
                            <p class="fs-13 mb-0">Check 1 min video and begin use Preclinic like a pro</p>
                        </div>
                        <a href="javascript:void(0);" class="close-icon shadow-sm"><i class="ti ti-x"></i></a>
                    </div>
                </div>
            </div>

        </div>
        <!-- Sidenav Menu End -->

        <!-- ========================
			Start Page Content
		========================= -->

        <div class="page-wrapper">

            <!-- Start Content -->
            <div class="content pb-0">

                <!-- Page Header -->
                <div class="d-flex align-items-sm-center justify-content-between flex-wrap gap-2 mb-4">
                    <div>
                        <h4 class="fw-bold mb-0">Doctor Dashboard</h4>
                    </div>
                    <div class="d-flex align-items-center flex-wrap gap-2">
                       <a href="javascript:void(0);" class="btn btn-primary d-inline-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#new_appointment"><i class="ti ti-plus me-1"></i>New Appointment</a>
                       <a href="javascript:void(0);" class="btn btn-outline-white bg-white d-inline-flex align-items-center"><i class="ti ti-calendar-time me-1"></i>Schedule Availability</a>
                    </div>
				</div>
				<!-- End Page Header -->

                <!-- row start -->
                <div class="row">

                    <!-- col start -->
                    <div class="col-xl-4 d-flex">
                        <div class="card shadow-sm flex-fill w-100">
                           <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div>
                                        <p class="mb-1">Total Appointments</p>
                                        <div class="d-flex align-items-center gap-1">
                                            <h3 class="fw-bold mb-0">658</h3>
                                            <span class="badge fw-medium bg-success flex-shrink-0">+95%</span>
                                        </div>
                                    </div>
                                    <span class="avatar border border-primary text-primary rounded-2 flex-shrink-0"><i class="ti ti-calendar-heart fs-20"></i></span>
                                </div>
                                <div class="d-flex align-items-end">
                                    <div id="s-col-5" class="chart-set"></div>
                                    <span class="badge fw-medium badge-soft-success flex-shrink-0 ms-2">+21% <i class="ti ti-arrow-up ms-1"></i></span>
                                    <p class="ms-1 fs-13 text-truncate">in last 7 Days </p>
                                </div>
                           </div>
                        </div>
                    </div>
                    <!-- col end -->

                    <!-- col start -->
                    <div class="col-xl-4 d-flex">
                        <div class="card shadow-sm flex-fill w-100">
                           <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div>
                                        <p class="mb-1">Online Consultations</p>
                                        <div class="d-flex align-items-center gap-1">
                                            <h3 class="fw-bold mb-0">125</h3>
                                            <span class="badge fw-medium bg-danger flex-shrink-0">-15%</span>
                                        </div>
                                    </div>
                                    <span class="avatar border border-danger text-danger rounded-2 flex-shrink-0"><i class="ti ti-users fs-20"></i></span>
                                </div>
                                <div class="d-flex align-items-end">
                                    <div id="s-col-6" class="chart-set"></div>
                                    <span class="badge fw-medium badge-soft-danger flex-shrink-0 ms-2">+21% <i class="ti ti-arrow-down ms-1"></i></span>
                                    <p class="ms-1 fs-13 text-truncate">in last 7 Days </p>
                                </div>
                           </div>
                        </div>
                    </div>
                    <!-- col end -->

                    <!-- col start -->
                    <div class="col-xl-4 d-flex">
                        <div class="card shadow-sm flex-fill w-100">
                           <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div>
                                        <p class="mb-1">Cancelled Appointments</p>
                                        <div class="d-flex align-items-center gap-1">
                                            <h3 class="fw-bold mb-0">35</h3>
                                            <span class="badge fw-medium bg-success flex-shrink-0">+45%</span>
                                        </div>
                                    </div>
                                    <span class="avatar border border-success text-success rounded-2 flex-shrink-0"><i class="ti ti-versions fs-20"></i></span>
                                </div>
                                <div class="d-flex align-items-end">
                                    <div id="s-col-7" class="chart-set"></div>
                                    <span class="badge fw-medium badge-soft-success flex-shrink-0 ms-2">+31% <i class="ti ti-arrow-up ms-1"></i></span>
                                    <p class="ms-1 fs-13 text-truncate">in last 7 Days </p>
                                </div>
                           </div>
                        </div>
                    </div>
                    <!-- col end -->

                 </div>
                <!-- row end -->

                <!-- row start -->
                <div class="row">

                    <!-- col start -->
                    <div class="col-xl-4 d-flex">
                         <!-- card start -->
                        <div class="card shadow-sm flex-fill w-100">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="fw-bold mb-0 text-truncate">Upcoming Appointments</h5>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="btn btn-sm px-2 border shadow-sm btn-outline-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                        Today <i class="ti ti-chevron-down ms-1"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="doctor-dashboard.html#">Today</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="doctor-dashboard.html#">This Week</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="doctor-dashboard.html#">This Month</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0">
                                        <img src="assets/img/doctors/doctor-01.jpg" alt="img" class="rounded-circle">
                                    </a>
                                    <div>
                                      <h6 class="fs-14 mb-1 text-truncate"><a href="javascript:void(0);" class="fw-semibold">Andrew Billard</a></h6>
                                      <p class="mb-0 fs-13 text-truncate">#AP455698</p>
                                    </div>
                                </div>
                                <h6 class="fs-14 fw-semibold mb-1">General Visit</h6>
                                <div class="d-flex align-items-center gap-2 flex-wrap mb-3">
                                    <p class="mb-0 d-inline-flex align-items-center"><i class="ti ti-calendar-time text-dark me-1"></i>Monday, 31 Mar 2025</p>
                                    <p class="mb-0 d-inline-flex align-items-center"><i class="ti ti-clock text-dark me-1"></i>06:30 PM </p>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <h6 class="fs-13 fw-semibold mb-1">Department</h6>
                                        <p>Cardiology</p>
                                    </div>
                                    <div class="col">
                                        <h6 class="fs-13 fw-semibold mb-1">Type</h6>
                                        <p class="text-truncate">Online Consultation</p>
                                    </div>
                                </div>
                                <div class="my-3 border-bottom pb-3">
                                    <a href="javascript:void(0);" class="btn btn-primary w-100">Start Appointment</a>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <a href="javascript:void(0);" class="btn btn-dark w-100"><i class="ti ti-brand-hipchat me-1"></i>Chat Now</a>
                                    <a href="javascript:void(0);" class="btn btn-outline-white w-100"><i class="ti ti-video me-1"></i>Video Consutation</a>
                                </div>
                            </div>
                        </div>
                        <!-- card end -->
                    </div>
                    <!-- col end -->

                     <!-- col start -->
                    <div class="col-xl-8 d-flex">
                        <!-- card start -->
                        <div class="card shadow-sm flex-fill w-100">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="fw-bold mb-0">Appointments</h5>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="btn btn-sm px-2 border shadow-sm btn-outline-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                        Monthly <i class="ti ti-chevron-down ms-1"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="doctor-dashboard.html#">Monthly</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="doctor-dashboard.html#">Weekly</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="doctor-dashboard.html#">Yearly</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body pb-0">
                                <div class="d-flex align-items-center justify-content-end gap-2 mb-1 flex-wrap mb-3">
                                    <p class="mb-0 d-inline-flex align-items-center"><i class="ti ti-point-filled me-1 fs-18 text-primary"></i>Total Appointments</p>
                                    <p class="mb-0 d-inline-flex align-items-center"><i class="ti ti-point-filled me-1 fs-18 text-success"></i>Completed Appointments</p>
                                </div>
                                <div class="chart-set" id="s-col-20"></div>
                            </div>
                        </div>
                        <!-- card end -->
                    </div>
                    <!-- col end -->
                </div>
                <!-- row end -->

                <!-- row start -->
                <div class="row row-cols-1 row-cols-xl-6 row-cols-md-3 row-cols-sm-2">

                    <!-- col start -->
                     <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <span class="avatar bg-primary rounded-2 fs-20 d-inline-flex mb-2"><i class="ti ti-user"></i></span>
                                <p class="mb-1 text-truncate">Total Patient</p>
                                <h3 class="fw-bold mb-2">658</h3>
                                <p class="mb-0 text-success text-truncate">+31% Last Week</p>
                            </div>
                        </div>
                     </div>
                    <!-- col end -->

                    <!-- col start -->
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <span class="avatar bg-secondary rounded-2 fs-20 d-inline-flex mb-2"><i class="ti ti-video"></i></span>
                                <p class="mb-1 text-truncate">Video Consultation</p>
                                <h3 class="fw-bold mb-2">256</h3>
                                <p class="mb-0 text-danger text-truncate">-21% Last Week</p>
                            </div>
                        </div>
                     </div>
                    <!-- col end -->

                    <!-- col start -->
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <span class="avatar bg-success rounded-2 fs-20 d-inline-flex mb-2"><i class="ti ti-calendar-up"></i></span>
                                <p class="mb-1 text-truncate">Rescheduled</p>
                                <h3 class="fw-bold mb-2">141</h3>
                                <p class="mb-0 text-success text-truncate">+64% Last Week</p>
                            </div>
                        </div>
                    </div>
                    <!-- col end -->

                    <!-- col start -->
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <span class="avatar bg-danger rounded-2 fs-20 d-inline-flex mb-2"><i class="ti ti-checklist"></i></span>
                                <p class="mb-1 text-truncate">Pre Visit Bookings</p>
                                <h3 class="fw-bold mb-2">524</h3>
                                <p class="mb-0 text-success text-truncate">+38% Last Week</p>
                            </div>
                        </div>
                    </div>
                    <!-- col end -->

                    <!-- col start -->
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <span class="avatar bg-info rounded-2 fs-20 d-inline-flex mb-2"><i class="ti ti-calendar-share"></i></span>
                                <p class="mb-1 text-truncate">Walkin Bookings</p>
                                <h3 class="fw-bold mb-2">21</h3>
                                <p class="mb-0 text-success text-truncate">+95% Last Week</p>
                            </div>
                        </div>
                    </div>
                    <!-- col end -->

                    <!-- col start -->
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <span class="avatar bg-soft-success text-success rounded-2 fs-20 d-inline-flex mb-2"><i class="ti ti-carousel-vertical"></i></span>
                                <p class="mb-1 text-truncate">Follow Ups</p>
                                <h3 class="fw-bold mb-2">451</h3>
                                <p class="mb-0 text-success text-truncate">+76% Last Week</p>
                            </div>
                        </div>
                    </div>
                    <!-- col end -->

                </div>
                <!-- row start -->

                <!-- row start -->
                <div class="row">
                    <div class="col-12 d-flex">
                        <div class="card shadow-sm flex-fill w-100">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="fw-bold mb-0">Recent Appointments</h5>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="btn btn-sm px-2 border shadow-sm btn-outline-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                        Weekly <i class="ti ti-chevron-down ms-1"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="doctor-dashboard.html#">Monthly</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="doctor-dashboard.html#">Weekly</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="doctor-dashboard.html#">Yearly</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <!-- Table start -->
                                <div class="table-responsive table-nowrap">
                                    <table class="table border">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Patient</th>
                                                <th>Date & Time</th>
                                                <th>Mode</th>
                                                <th>Status</th>
                                                <th>Consultation Fees</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="javascript:void(0);" class="avatar me-2">
                                                            <img src="assets/img/profiles/avatar-06.jpg" alt="img" class="rounded-circle">
                                                        </a>
                                                        <div>
                                                          <h6 class="fs-14 mb-1"><a href="javascript:void(0);" class="fw-medium">Alberto Ripley</a></h6>
                                                          <p class="mb-0 fs-13">+1 56556 54565</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>27 May 2025 - 09:30 AM</td>
                                                <td>Online</td>
                                                <td><span class="badge bg-success fw-medium">Checked Out</span></td>
                                                <td class="fw-semibold text-dark">₹400</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1 me-1">
                                                        <i class="ti ti-calendar-plus"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" data-bs-toggle="dropdown" class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu p-2">
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#edit_appointment"><i class="ti ti-edit me-2"></i>Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="javascript:void(0);" class="avatar me-2">
                                                            <img src="assets/img/profiles/avatar-12.jpg" alt="img" class="rounded-circle">
                                                        </a>
                                                        <div>
                                                          <h6 class="fs-14 mb-1"><a href="javascript:void(0);" class="fw-medium">Susan Babin</a></h6>
                                                          <p class="mb-0 fs-13">+1 65658 95654</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>26 May 2025 - 10:15 AM</td>
                                                <td>Online</td>
                                                <td><span class="badge bg-warning fw-medium">Checked in</span></td>
                                                <td class="fw-semibold text-dark">₹370</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1 me-1">
                                                        <i class="ti ti-calendar-plus"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" data-bs-toggle="dropdown" class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu p-2">
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#edit_appointment"><i class="ti ti-edit me-2"></i>Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="javascript:void(0);" class="avatar me-2">
                                                            <img src="assets/img/profiles/avatar-08.jpg" alt="img" class="rounded-circle">
                                                        </a>
                                                        <div>
                                                          <h6 class="fs-14 mb-1"><a href="javascript:void(0);" class="fw-medium">Carol Lam</a></h6>
                                                          <p class="mb-0 fs-13">+1 55654 56647</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>25 May 2025 - 02:40 PM</td>
                                                <td>In-Person</td>
                                                <td><span class="badge bg-danger fw-medium">Cancelled</span></td>
                                                <td class="fw-semibold text-dark">₹450</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1 me-1">
                                                        <i class="ti ti-calendar-plus"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" data-bs-toggle="dropdown" class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu p-2">
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#edit_appointment"><i class="ti ti-edit me-2"></i>Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="javascript:void(0);" class="avatar me-2">
                                                            <img src="assets/img/profiles/avatar-22.jpg" alt="img" class="rounded-circle">
                                                        </a>
                                                        <div>
                                                          <h6 class="fs-14 mb-1"><a href="javascript:void(0);" class="fw-medium">Marsha Noland</a></h6>
                                                          <p class="mb-0 fs-13">+1 65668 54558</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>24 May 2025 - 11:30 AM</td>
                                                <td>In-Person</td>
                                                <td><span class="badge bg-info fw-medium">Schedule</span></td>
                                                <td class="fw-semibold text-dark">₹310</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1 me-1">
                                                        <i class="ti ti-calendar-plus"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" data-bs-toggle="dropdown" class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu p-2">
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#edit_appointment"><i class="ti ti-edit me-2"></i>Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="javascript:void(0);" class="avatar me-2">
                                                            <img src="assets/img/profiles/avatar-25.jpg" alt="img" class="rounded-circle">
                                                        </a>
                                                        <div>
                                                          <h6 class="fs-14 mb-1"><a href="javascript:void(0);" class="fw-medium">John Elsass</a></h6>
                                                          <p class="mb-0 fs-13">47851263</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>23 May 2025 - 04:10 PM</td>
                                                <td>Online</td>
                                                <td><span class="badge bg-info fw-medium">Schedule</span></td>
                                                <td class="fw-semibold text-dark">₹400</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1 me-1">
                                                        <i class="ti ti-calendar-plus"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" data-bs-toggle="dropdown" class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu p-2">
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#edit_appointment"><i class="ti ti-edit me-2"></i>Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Table end -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row end -->

                <!-- row start -->
                <div class="row">

                    <!-- col start -->
                    <div class="col-xl-4 d-flex">
                        <div class="card shadow-sm flex-fill w-100">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="fw-bold mb-0">Availability</h5>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="btn btn-sm px-2 border shadow-sm btn-outline-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                        Trustcare Clinic <i class="ti ti-chevron-down ms-1"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0);">CureWell Medical Hub</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0);">Trustcare Clinic</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0);">NovaCare Medical</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0);">Greeny Medical Clinic</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-2 border-bottom pb-2">
                                    <p class="text-dark fw-semibold mb-0">Mon</p>
                                    <p class="mb-0 d-inline-flex align-items-center"><i class="ti ti-clock me-1"></i>11:00 PM - 12:30 PM</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2 border-bottom pb-2">
                                    <p class="text-dark fw-semibold mb-0">Tue</p>
                                    <p class="mb-0 d-inline-flex align-items-center"><i class="ti ti-clock me-1"></i>11:00 PM - 12:30 PM</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2 border-bottom pb-2">
                                    <p class="text-dark fw-semibold mb-0">Wed</p>
                                    <p class="mb-0 d-inline-flex align-items-center"><i class="ti ti-clock me-1"></i>11:00 PM - 12:30 PM</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2 border-bottom pb-2">
                                    <p class="text-dark fw-semibold mb-0">Thu</p>
                                    <p class="mb-0 d-inline-flex align-items-center"><i class="ti ti-clock me-1"></i>11:00 PM - 12:30 PM</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2 border-bottom pb-2">
                                    <p class="text-dark fw-semibold mb-0">Fri</p>
                                    <p class="mb-0 d-inline-flex align-items-center"><i class="ti ti-clock me-1"></i>11:00 PM - 12:30 PM</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2 border-bottom pb-2">
                                    <p class="text-dark fw-semibold mb-0">Sat</p>
                                    <p class="mb-0 d-inline-flex align-items-center"><i class="ti ti-clock me-1"></i>11:00 PM - 12:30 PM</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2 pb-2">
                                    <p class="text-dark fw-semibold mb-0">Sun</p>
                                    <p class="mb-0 d-inline-flex align-items-center text-danger"><i class="ti ti-clock me-1"></i>Closed</p>
                                </div>
                                <a href="javascript:void(0);" class="btn btn-light w-100 mt-2 fs-13">Edit Availability</a>
                            </div>
                        </div>
                    </div>
                    <!-- col end -->

                    <!-- col start -->
                    <div class="col-xl-4 col-lg-6 d-flex">
                        <div class="card shadow-sm flex-fill w-100">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="fw-bold mb-0 text-truncate">Appointment Statistics</h5>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="btn btn-sm px-2 border shadow-sm btn-outline-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                        Monthly <i class="ti ti-chevron-down ms-1"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="doctor-dashboard.html#">Monthly</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="doctor-dashboard.html#">Weekly</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="doctor-dashboard.html#">Yearly</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="circle-chart-2" class="chart-set"></div>
                                <div class="d-flex align-items-center justify-content-center gap-2 mt-3">
                                    <div class="text-center">
                                        <p class="d-flex align-items-center mb-1 fs-13"><i class="ti ti-circle-filled text-success fs-10 me-1"></i>Completed</p>
                                        <h5 class="fw-bold mb-0">260</h5>
                                    </div>
                                    <div class="text-center">
                                        <p class="d-flex align-items-center mb-1 fs-13"><i class="ti ti-circle-filled text-warning fs-10 me-1"></i>Pending</p>
                                        <h5 class="fw-bold mb-0">21</h5>
                                    </div>
                                    <div class="text-center">
                                        <p class="d-flex align-items-center mb-1 fs-13"><i class="ti ti-circle-filled text-danger fs-10 me-1"></i>Cancelled</p>
                                        <h5 class="fw-bold mb-0">50</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- col end -->

                    <!-- col start -->
                    <div class="col-xl-4 col-lg-6 d-flex">
                        <div class="card shadow-sm flex-fill w-100">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="fw-bold mb-0">Top Patients</h5>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="btn btn-sm px-2 border shadow-sm btn-outline-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                        Weekly <i class="ti ti-chevron-down ms-1"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="doctor-dashboard.html#">Monthly</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="doctor-dashboard.html#">Weekly</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="doctor-dashboard.html#">Yearly</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0">
                                            <img src="assets/img/profiles/avatar-06.jpg" alt="img" class="rounded-circle">
                                        </a>
                                        <div>
                                          <h6 class="fs-14 mb-1 text-truncate"><a href="javascript:void(0);" class="fw-medium">Alberto Ripley</a></h6>
                                          <p class="mb-0 fs-13 text-truncate">+1 56556 54565</p>
                                        </div>
                                    </div>
                                    <span class="badge fw-medium badge-soft-primary border border-primary flex-shrink-0">20 Appointments</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0">
                                            <img src="assets/img/profiles/avatar-12.jpg" alt="img" class="rounded-circle">
                                        </a>
                                        <div>
                                          <h6 class="fs-14 mb-1 text-truncate"><a href="javascript:void(0);" class="fw-medium">Susan Babin</a></h6>
                                          <p class="mb-0 fs-13 text-truncate">+1 65658 95654</p>
                                        </div>
                                    </div>
                                    <span class="badge fw-medium badge-soft-primary border border-primary flex-shrink-0">18 Appointments</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0">
                                            <img src="assets/img/profiles/avatar-08.jpg" alt="img" class="rounded-circle">
                                        </a>
                                        <div>
                                          <h6 class="fs-14 mb-1 text-truncate"><a href="javascript:void(0);" class="fw-medium">Carol Lam</a></h6>
                                          <p class="mb-0 fs-13 text-truncate">+1 55654 56647</p>
                                        </div>
                                    </div>
                                    <span class="badge fw-medium badge-soft-primary border border-primary flex-shrink-0">16 Appointments</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0">
                                            <img src="assets/img/profiles/avatar-22.jpg" alt="img" class="rounded-circle">
                                        </a>
                                        <div>
                                          <h6 class="fs-14 mb-1 text-truncate"><a href="javascript:void(0);" class="fw-medium">Marsha Noland</a></h6>
                                          <p class="mb-0 fs-13 text-truncate">+1 65668 54558</p>
                                        </div>
                                    </div>
                                    <span class="badge fw-medium badge-soft-primary border border-primary flex-shrink-0">14 Appointments</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-0">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0">
                                            <img src="assets/img/profiles/avatar-17.jpg" alt="img" class="rounded-circle">
                                        </a>
                                        <div>
                                          <h6 class="fs-14 mb-1 text-truncate"><a href="javascript:void(0);" class="fw-medium">Irma Armstrong</a></h6>
                                          <p class="mb-0 fs-13 text-truncate">+1 45214 66568</p>
                                        </div>
                                    </div>
                                    <span class="badge fw-medium badge-soft-primary border border-primary flex-shrink-0">12 Appointments</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- col end -->

                </div>
                <!-- row end -->

            </div>
            <!-- End Content -->

            <!-- Footer Start -->
            <div class="footer text-center bg-white p-2 border-top">
                <p class="text-dark mb-0">2025 &copy; <a href="javascript:void(0);" class="link-primary">Preclinic</a>, All Rights Reserved</p>
            </div>
            <!-- Footer End -->

        </div>

        <!-- ========================
			End Page Content
		========================= -->

    </div>
    <!-- End Wrapper -->

     <!-- Start Add New Appointment -->
     <div class="offcanvas offcanvas-offset offcanvas-end" tabindex="-1" id="new_appointment">
        <div class="offcanvas-header d-block pb-0 px-0">
            <div class="border-bottom d-flex align-items-center justify-content-between pb-3 px-3">
                <h5 class="offcanvas-title fs-18 fw-bold">New Appointment</h5>
                <button type="button" class="btn-close custom-btn-close opacity-100" data-bs-dismiss="offcanvas" aria-label="Close"></button></div>
        </div>
        <div class="offcanvas-body pt-3">
            <form action="doctor-dashboard.html#">
                <!-- start row-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label class="form-label mb-1 text-dark fs-14 fw-medium">Appointment ID <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="text" class="form-control rounded bg-light" value="AP234354">
                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label class="form-label mb-1 text-dark fs-14 fw-medium">Patient<span class="text-danger">*</span></label>
                            <div class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle form-control rounded d-flex align-items-center justify-content-between border" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">
                                    Select
                                </a>
                                <div class="dropdown-menu shadow-lg w-100 dropdown-info">
                                    <div class="mb-3">
                                        <div class="input-icon-start position-relative">
                                            <span class="input-icon-addon fs-12">
                                                <i class="ti ti-search"></i>
                                            </span>
                                            <input type="text" class="form-control form-control-sm" placeholder="Search">
                                        </div>
                                    </div>
                                    <ul class="mb-3 list-style-none">
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                <span class="avatar avatar-sm rounded-circle me-2"><img src="assets/img/users/user-02.jpg" class="flex-shrink-0 rounded-circle" alt="img"></span>Emily Clark
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                <span class="avatar avatar-sm rounded-circle me-2"><img src="assets/img/profiles/avatar-01.jpg" class="flex-shrink-0 rounded-circle" alt="img"></span>John Carter
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                <span class="avatar avatar-sm rounded-circle me-2"><img src="assets/img/profiles/avatar-16.jpg" class="flex-shrink-0 rounded-circle" alt="img"></span>Sophia White
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                <span class="avatar avatar-sm rounded-circle me-2"><img src="assets/img/profiles/avatar-15.jpg" class="flex-shrink-0 rounded-circle" alt="img"></span>Michael Johnson
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                <span class="avatar avatar-sm rounded-circle me-2"><img src="assets/img/profiles/avatar-14.jpg" class="flex-shrink-0 rounded-circle" alt="img"></span>Olivia Harris
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                <span class="avatar avatar-sm rounded-circle me-2"><img src="assets/img/profiles/avatar-01.jpg" class="flex-shrink-0 rounded-circle" alt="img"></span>David Anderson
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label class="form-label mb-1 text-dark fs-14 fw-medium">Appointment Type <span class="text-danger">*</span></label>
                            <div class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle form-control rounded d-flex align-items-center justify-content-between border" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">
                                    Select
                                </a>
                                <div class="dropdown-menu shadow-lg w-100 dropdown-info">
                                    <div class="mb-3">
                                        <div class="input-icon-start position-relative">
                                            <span class="input-icon-addon fs-12">
                                                <i class="ti ti-search"></i>
                                            </span>
                                            <input type="text" class="form-control form-control-sm" placeholder="Select">
                                        </div>
                                    </div>
                                    <ul class="mb-3 list-style-none">
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                In Person
                                            </label>
                                        </li>
                                        <li class="list-none">
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                Online
                                            </label>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label mb-1 text-dark fs-14 fw-medium"> Date of Appointment <span class="text-danger">*</span></label>
                            <div class="input-icon-end position-relative">
                                <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                <span class="input-icon-addon">
                                    <i class="ti ti-calendar"></i>
                                </span>
                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label mb-1 text-dark fs-14 fw-medium"> Time <span class="text-danger">*</span></label>
                            <div class="input-icon-end position-relative">
                                <input type="text" class="form-control timepicker" placeholder="-- : --">
                                <span class="input-icon-addon">
                                    <i class="ti ti-clock"></i>
                                </span>
                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-lg-12">
                        <div class="mb-3">
                            <div>
                                <label class="form-label mb-1 text-dark fs-14 fw-medium">Appointment Reason</label>
                                <textarea rows="4" class="form-control rounded"> </textarea>
                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label class="form-label mb-1 text-dark fs-14 fw-medium">Status<span class="text-danger">*</span></label>
                            <div class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle form-control rounded d-flex align-items-center justify-content-between border" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">
                                    Select
                                </a>
                                <div class="dropdown-menu shadow-lg w-100 dropdown-info">
                                    <div class="mb-3">
                                        <div class="input-icon-start position-relative">
                                            <span class="input-icon-addon fs-12">
                                                <i class="ti ti-search"></i>
                                            </span>
                                            <input type="text" class="form-control form-control-sm" placeholder="Select">
                                        </div>
                                    </div>
                                    <ul class="mb-3 list-style-none">
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                Checked Out
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                                Checked In
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                Cancelled
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                Scheduled
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col-->
                </div>
                <!-- end row-->
            </form>
        </div>
        <div class="offcanvas-footer mb-1 mt-3 p-3 border-1 border-top">
            <div class=" d-flex justify-content-end gap-2">
                <a href="javascript:void(0);" class="btn btn-light btm-md">Cancel</a>
                <button data-bs-dismiss="offcanvas" class="btn btn-primary btm-md" id="filter-submit">Create Create Appointment</button>
            </div>
        </div>
    </div>
    <!-- End Add New Appointment-->

    <!-- Start Edit New Appointment -->
    <div class="offcanvas offcanvas-offset offcanvas-end" tabindex="-1" id="edit_appointment">
        <div class="offcanvas-header d-block pb-0 px-0">
            <div class="border-bottom d-flex align-items-center justify-content-between pb-3 px-3">
                <h5 class="offcanvas-title fs-18 fw-bold"> Edit Appointment</h5>
                <button type="button" class="btn-close custom-btn-close opacity-100" data-bs-dismiss="offcanvas" aria-label="Close"><i class="ti ti-x bg-white fs-16 text-dark"></i></button></div>
        </div>
        <div class="offcanvas-body pt-3">
            <form action="doctor-dashboard.html#">
                <!-- start row-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label class="form-label mb-1 text-dark fs-14 fw-medium">Appointment ID <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="text" class="form-control rounded bg-light" value="AP234354">
                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label class="form-label mb-1 text-dark fs-14 fw-medium">Patient<span class="text-danger">*</span></label>
                            <div class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle form-control rounded d-flex align-items-center justify-content-between border" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">
                                    Emily Clark
                                </a>
                                <div class="dropdown-menu shadow-lg w-100 dropdown-info">
                                    <div class="mb-3">
                                        <div class="input-icon-start position-relative">
                                            <span class="input-icon-addon fs-12">
                                                <i class="ti ti-search"></i>
                                            </span>
                                            <input type="text" class="form-control form-control-sm" placeholder="Search">
                                        </div>
                                    </div>
                                    <ul class="mb-3 list-style-none">
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                <span class="avatar avatar-sm rounded-circle me-2"><img src="assets/img/users/user-02.jpg" class="flex-shrink-0 rounded-circle" alt="img"></span>Emily Clark
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                <span class="avatar avatar-sm rounded-circle me-2"><img src="assets/img/profiles/avatar-01.jpg" class="flex-shrink-0 rounded-circle" alt="img"></span>John Carter
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                <span class="avatar avatar-sm rounded-circle me-2"><img src="assets/img/profiles/avatar-16.jpg" class="flex-shrink-0 rounded-circle" alt="img"></span>Sophia White
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                <span class="avatar avatar-sm rounded-circle me-2"><img src="assets/img/profiles/avatar-15.jpg" class="flex-shrink-0 rounded-circle" alt="img"></span>Michael Johnson
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                <span class="avatar avatar-sm rounded-circle me-2"><img src="assets/img/profiles/avatar-14.jpg" class="flex-shrink-0 rounded-circle" alt="img"></span>Olivia Harris
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                <span class="avatar avatar-sm rounded-circle me-2"><img src="assets/img/profiles/avatar-01.jpg" class="flex-shrink-0 rounded-circle" alt="img"></span>David Anderson
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label class="form-label mb-1 text-dark fs-14 fw-medium">Appointment Type <span class="text-danger">*</span></label>
                            <div class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle form-control rounded d-flex align-items-center justify-content-between border" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">
                                    In Person
                                </a>
                                <div class="dropdown-menu shadow-lg w-100 dropdown-info">
                                    <div class="mb-3">
                                        <div class="input-icon-start position-relative">
                                            <span class="input-icon-addon fs-12">
                                                <i class="ti ti-search"></i>
                                            </span>
                                            <input type="text" class="form-control form-control-sm" placeholder="Select">
                                        </div>
                                    </div>
                                    <ul class="mb-0 list-style-none">
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                In Person
                                            </label>
                                        </li>
                                        <li class="list-none">
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                Online
                                            </label>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label mb-1 text-dark fs-14 fw-medium"> Date of Appointment <span class="text-danger">*</span></label>
                            <div class="input-icon-end position-relative">
                                <input type="text" class="form-control datetimepicker" placeholder="20/08/2025">
                                <span class="input-icon-addon">
                                    <i class="ti ti-calendar"></i>
                                </span>
                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label mb-1 text-dark fs-14 fw-medium"> Time <span class="text-danger">*</span></label>
                            <div class="input-icon-end position-relative">
                                <input type="text" class="form-control timepicker" placeholder="01 : 20 : PM">
                                <span class="input-icon-addon">
                                    <i class="ti ti-clock"></i>
                                </span>
                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-lg-12">
                        <div class="mb-3">
                            <div>
                                <label class="form-label mb-1 text-dark fs-14 fw-medium">Appointment Reason</label>
                                <textarea rows="4" class="form-control rounded"> An account of the present illness, which includes the circumstances surrounding the onset of recent health changes and the Purpose. </textarea>
                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label class="form-label mb-1 text-dark fs-14 fw-medium">Status<span class="text-danger">*</span></label>
                            <div class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle form-control rounded d-flex align-items-center justify-content-between border" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">
                                    Checked Out
                                </a>
                                <div class="dropdown-menu shadow-lg w-100 dropdown-info">
                                    <div class="mb-3">
                                        <div class="input-icon-start position-relative">
                                            <span class="input-icon-addon fs-12">
                                                <i class="ti ti-search"></i>
                                            </span>
                                            <input type="text" class="form-control form-control-sm" placeholder="Select">
                                        </div>
                                    </div>
                                    <ul class="mb-3 list-style-none">
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                Checked Out
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                                Checked In
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                Cancelled
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                Scheduled
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col-->
                </div>
                <!-- end row-->
            </form>
        </div>
        <div class="offcanvas-footer mb-1 mt-3 p-3 border-1 border-top">
            <div class=" d-flex justify-content-end gap-2">
                <a href="javascript:void(0);" class="btn btn-light btm-md">Cancel</a>
                <button data-bs-dismiss="offcanvas" class="btn btn-primary btm-md" id="filter-submit2">Create Create Appointment</button>
            </div>
        </div>
    </div>
    <!-- End Edit New Appointment-->

    <!-- Start View Details -->
    <div class="offcanvas offcanvas-offset offcanvas-end" tabindex="-1" id="view_details">
        <div class="offcanvas-header d-block pb-0 px-0">
            <div class="border-bottom d-flex align-items-center justify-content-between pb-3 px-3">
                <h5 class="offcanvas-title fs-18 fw-bold">Appointment Details <span class="badge badge-soft-primary border pt-1 px-2 border-primary fw-medium ms-2">#AP544658</span></h5>
                <button type="button" class="btn-close custom-btn-close opacity-100" data-bs-dismiss="offcanvas" aria-label="Close"><i class="ti ti-x bg-white fs-16 text-dark"></i></button>            </div>
        </div>
        <div class="offcanvas-body pt-0 px-0">
            <h6 class="bg-light py-2 px-3 text-dark fw-bold"> When & Where </h6>
            <div class="px-3 my-4">
                <p class="text-dark mb-3 fw-semibold d-flex align-items-center justify-content-between"> Appointment On <span class="text-body fw-normal"> Saturday, 25 Apr 2025  </span> </p>
                <p class="text-dark mb-3 fw-semibold d-flex align-items-center justify-content-between"> Time <span class="text-body fw-normal"> 09:00 AM - 11:00 AM  </span> </p>
                <p class="text-dark mb-3 fw-semibold d-flex align-items-center justify-content-between"> Location <span class="text-body fw-normal">Newyork , USA   </span> </p>
                <p class="text-dark mb-3 fw-semibold d-flex align-items-center justify-content-between"> Appointment Type <span class="text-body fw-normal"> Online Consultation </span> </p>
                <div class="text-dark mb-3 fw-semibold d-flex align-items-center justify-content-between"> Patient Details
                    <div class="text-body fw-normal d-flex align-items-center">
                        <span class="avatar avatar-sm">
                            <img src="assets/img/users/avatar-2.jpg" alt="" class="rounded-circle me-1">
                        </span>
                        James Adrian
                    </div>
                </div>
            </div>
            <h6 class="bg-light py-2 px-3 text-dark fw-bold"> Appointment Details  </h6>
            <div class="px-3 my-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <div class="d-flex align-items-center">
                        Telehealth
                        <label class="d-flex align-items-center form-switch ps-1">
                            <input class="form-check-input m-0 me-2" type="checkbox" checked>
                        </label>
                    </div>
                    <div>  <a href="https://preclinic.dreamstechnologies.com/html/template/online-consulation.html" class="btn-primary btn btn-sm rounded d-flex align-items-center"> <i class="ti ti-video me-1"></i> Start </a></div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <p class="text-dark"> Status </p>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="mb-3">
                            <div class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle form-control rounded d-flex align-items-center justify-content-between border" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">
                                    Pending
                                </a>
                                <div class="dropdown-menu shadow-lg w-100 dropdown-info">
                                    <div class="mb-3">
                                        <div class="input-icon-start position-relative">
                                            <span class="input-icon-addon fs-12">
                                                <i class="ti ti-search"></i>
                                            </span>
                                            <input type="text" class="form-control form-control-sm" placeholder="Select">
                                        </div>
                                    </div>
                                    <ul class="mb-0 list-style-none">
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                Checked Out
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                                Checked In
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                Cancelled
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                Scheduled
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Add New Appointment-->

    <!-- Start Delete Modal  -->
    <div class="modal fade" id="delete_modal">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center position-relative">
                    <img src="assets/img/bg/delete-modal-bg-01.png" alt="" class="img-fluid position-absolute top-0 start-0 z-0">
                    <img src="assets/img/bg/delete-modal-bg-02.png" alt="" class="img-fluid position-absolute bottom-0 end-0 z-0">
                    <div class="mb-3 position-relative z-1">
                        <span class="avatar avatar-lg bg-danger text-white"><i class="ti ti-trash fs-24"></i></span>
                    </div>
                    <h5 class="fw-bold mb-1 position-relative z-1">Delete Confirmation</h5>
                    <p class="mb-3 position-relative z-1">Are you sure want to delete?</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light position-relative z-1 me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="doctor-dashboard.html" class="btn btn-danger position-relative z-1" data-bs-dismiss="modal">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Delete Modal  -->

    <!-- jQuery -->
    <script src="assets/js/jquery-3.7.1.min.js" type="text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>

	<!-- Simplebar JS -->
	<script src="assets/plugins/simplebar/simplebar.min.js" type="text/javascript"></script>

    <!-- Chart JS -->
    <script src="assets/plugins/apexchart/apexcharts.min.js" type="text/javascript"></script>
    <script src="assets/plugins/apexchart/chart-data.js" type="text/javascript"></script>

    <!-- Daterangepikcer JS -->
	<script src="assets/js/moment.min.js" type="text/javascript"></script>
	<script src="assets/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>

    <!-- Datetimepicker JS -->
    <script src="assets/js/moment.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>

    <!-- Main JS -->
    <script src="assets/js/script.js" type="text/javascript"></script>

<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="|49" defer></script></body>

</html>
