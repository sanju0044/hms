
<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Doctors Appointments</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Dreams Technologies">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png">

    <!-- Apple Icon -->
    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Tabler Icon CSS -->
    <link rel="stylesheet" href="assets/plugins/tabler-icons/tabler-icons.min.css">

    <!-- Font Awosome Icon CSS -->
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

	<!-- Daterangepikcer CSS -->
	<link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker.css">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

    <!-- Simplebar CSS -->
    <link rel="stylesheet" href="assets/plugins/simplebar/simplebar.min.css">

    <!-- Datatable CSS -->
    <link rel="stylesheet" href="assets/css/dataTables.bootstrap5.min.css">

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
                                <li>
                                    <a href="doctor-dashboard.html">
                                        <i class="ti ti-layout-dashboard"></i><span>Dashboard</span>
                                    </a>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="active subdrop">
                                        <i class="ti ti-calendar-check"></i><span>Appointments</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="doctors-appointments.html" class="active">Appointments</a></li>
                                        <li><a href="online-consultations.html">Online Consultations</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="doctors-schedules.html">
                                        <i class="ti ti-clock-check"></i><span>My Schedule</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="doctors-prescriptions.html">
                                        <i class="ti ti-prescription"></i><span>Prescriptions</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="doctors-leaves.html">
                                        <i class="ti ti-calendar-x"></i><span>Leave</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="doctors-reviews.html">
                                        <i class="ti ti-star"></i><span>Reviews</span>
                                    </a>
                                </li>
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
            <div class="content">

                <!-- Start Page Header -->
                <div class="d-flex align-items-sm-center flex-sm-row flex-column gap-2 pb-3 mb-3 border-1 border-bottom">
                    <div class="flex-grow-1">
                        <h4 class="fw-semibold mb-0"> Appointment </h4>
                    </div>
                    <div class="text-end d-flex">
                        <!-- dropdown-->
                        <div class="dropdown me-1">
							<a href="javascript:void(0);" class="btn btn-md fs-14 fw-normal border bg-white rounded text-dark d-inline-flex align-items-center"  data-bs-toggle="dropdown">
								Export<i class="ti ti-chevron-down ms-2"></i>
							</a>
							<ul class="dropdown-menu p-2">
								<li>
									<a class="dropdown-item" href="doctors-appointments.html#">Download as PDF</a>
								</li>
								<li>
									<a class="dropdown-item" href="doctors-appointments.html#">Download as Excel</a>
								</li>
							</ul>
						</div>
                        <div class="bg-white border shadow-sm rounded px-1 pb-0 text-center d-flex align-items-center justify-content-center">
                            <a href="https://preclinic.dreamstechnologies.com/html/template/doctors-appointment.html" class="bg-light rounded p-1 d-flex align-items-center justify-content-center"> <i class="ti ti-list fs-14 text-body"></i></a>
                            <a href="doctors-appointment-details.html" class="bg-white rounded p-1 d-flex align-items-center justify-content-center"> <i class="ti ti-calendar-event fs-14 text-body"></i> </a>
                        </div>

                        <a href="javascript:void(0);" class="btn btn-primary ms-2 fs-13 btn-md" data-bs-toggle="offcanvas" data-bs-target="#new_appointment"><i class="ti ti-plus me-1"></i> New Appointment </a>
                    </div>
				</div>
				<!-- End Page Header -->

                <!--  Start Filter -->
                <div class=" d-flex align-items-center justify-content-between flex-wrap row-gap-3 mb-3">
                    <div class="d-flex align-items-center gap-2">
                        <div class="search-set">
                            <div class="d-flex align-items-center flex-wrap gap-2">
                                <div class="table-search d-flex align-items-center mb-0">
                                    <div class="search-input">
                                        <a href="javascript:void(0);" class="btn-searchset"></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex right-content align-items-center flex-wrap">
                            <div class="input-icon-start position-relative">
                                <span class="input-icon-addon text-dark">
                                    <i class="ti ti-calendar-event"></i>
                                </span>
                                <input type="text" class="form-control form-control-sm bookingrange">
                            </div>
                        </div>
                    </div>

                    <div class="d-flex table-dropdown mb-3 pb-1 right-content align-items-center flex-wrap row-gap-3">
                        <div class="dropdown me-2">
                            <a href="javascript:void(0);" class="bg-white border rounded btn btn-md text-dark fs-14 py-1 align-items-center d-flex fw-normal" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                <i class="ti ti-filter text-gray-5 me-1"></i>Filters
                            </a>
                            <div class="dropdown-menu dropdown-lg dropdown-menu-end filter-dropdown p-0" id="filter-dropdown">
                                <div class="d-flex align-items-center justify-content-between border-bottom filter-header">
                                    <h4 class="mb-0 fw-bold">Filter</h4>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="link-danger text-decoration-underline">Clear All</a>
                                    </div>
                                </div>
                                <form action="doctors-appointments.html#">
                                    <div class="filter-body pb-0">
                                        <div class="mb-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <label class="form-label mb-1">Doctor</label>
                                                <a href="javascript:void(0);" class="link-primary mb-1">Reset</a>
                                            </div>
                                            <select class="select2" multiple="multiple">
                                                <option value="m-1" selected>Dr. Mick Thompson</option>
                                                <option value="m-2">Dr. Sarah Johnson</option>
                                                <option value="m-3">Dr. Emily Carter</option>
                                                <option value="m-4">Dr. David Lee</option>
                                                <option value="m-5">Dr. Anna Kim</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <label class="form-label">Designation</label>
                                                <a href="javascript:void(0);" class="link-primary mb-1">Reset</a>
                                            </div>
                                            <select class="select2" multiple="multiple">
                                                <option value="m-1" selected>Cardiologist</option>
                                                <option value="m-2">Orthopedic Surgeon</option>
                                                <option value="m-3">Pediatrician</option>
                                                <option value="m-4">Gynecologist</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <label class="form-label">Department</label>
                                                <a href="javascript:void(0);" class="link-primary mb-1">Reset</a>
                                            </div>
                                            <select class="select2" multiple="multiple">
                                                <option value="m-1" selected>Cardiology</option>
                                                <option value="m-2">Orthopedics</option>
                                                <option value="m-3">Pediatrics</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label mb-1 text-dark fs-14 fw-medium">Date<span class="text-danger">*</span></label>
                                            <div class="input-icon-end position-relative">
                                                <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                                <span class="input-icon-addon">
                                                    <i class="ti ti-calendar"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <label class="form-label">Amount</label>
                                                <a href="javascript:void(0);" class="link-primary mb-1">Reset</a>
                                            </div>
                                            <select class="select2" multiple="multiple">
                                                <option value="m-1" selected>$501 - $1000</option>
                                                <option value="m-2">$501 - $1100</option>
                                                <option value="m-3">$701 - $1200</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <label class="form-label">Status</label>
                                                <a href="javascript:void(0);" class="link-primary mb-1">Reset</a>
                                            </div>
                                            <select class="select2" multiple="multiple">
                                                <option value="m-1" selected>Available</option>
                                                <option value="m-2">Unavailable</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="filter-footer d-flex align-items-center justify-content-end border-top">
                                        <a href="javascript:void(0);" class="btn btn-light btn-md me-2 fw-medium" id="close-filter">Close</a>
                                        <button type="submit" class="btn btn-primary btn-md fw-medium">Filter</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle btn bg-white btn-md d-inline-flex align-items-center fw-normal rounded border text-dark px-2 py-1 fs-14" data-bs-toggle="dropdown">
                               <span  class="me-1"> Sort By : </span>  Recent
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end p-2">
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Recently Added</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Ascending</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Desending</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Last Month</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Last 7 Days</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--  End Filter -->

                <!--  Start Table -->
                <div class="table-responsive">
                    <table class="table datatable table-nowrap">
                        <thead class="">
                            <tr>
                                <th class="no-sort">
                                    Date & Time
                                </th>
                                <th>Patient</th>
                                <th>Mode</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>30 Apr 2025 - 09:30 AM</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="doctors-patient-details.html" class="avatar avatar-md me-2">
                                            <img src="assets/img/users/user-01.jpg" alt="product" class="rounded-circle">
                                        </a>
                                        <a href="doctors-patient-details.html" class="fw-semibold">Alberto Ripley <span class="text-body fs-13 fw-normal d-block"> +1 56556 54565 </span>  </a>
                                    </div>
                                </td>
                                <td>
                                    In-person
                                </td>
                                <td> <span class="badge badge-soft-primary rounded text-primary fw-medium fs-13">Checked Out</span> </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu p-2">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#edit_appointment">Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#view_details">View</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal">Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td>15 Apr 2025 - 11:20 AM</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="doctors-patient-details.html" class="avatar avatar-md me-2">
                                            <img src="assets/img/users/user-02.jpg" alt="product" class="rounded-circle">
                                        </a>
                                        <a href="doctors-patient-details.html" class="text-dark fw-semibold">Susan Babin<span class="text-body fs-13 fw-normal d-block"> +1 65658 95654</span>  </a>
                                    </div>
                                </td>
                                <td>
                                    Online
                                </td>
                                <td> <span class="badge badge-soft-warning rounded text-warning fw-medium fs-13">Checked In</span> </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu p-2">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#edit_appointment">Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#view_details">View</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal">Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td>02 Apr 2025 - 08:15 AM</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="doctors-patient-details.html" class="avatar avatar-md me-2">
                                            <img src="assets/img/users/user-03.jpg" alt="product" class="rounded-circle">
                                        </a>
                                        <a href="doctors-patient-details.html" class="text-dark fw-semibold">Carol Lam <span class="text-body fs-13 fw-normal d-block"> +1 55654 56647</span>  </a>
                                    </div>
                                </td>
                                <td>
                                    In-Person
                                </td>
                                <td> <span class="badge badge-soft-danger rounded text-danger fw-medium fs-13">Cancelled</span> </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu p-2">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#edit_appointment">Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#view_details">View</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal">Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td>27 Mar 2025 - 02:00 PM</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="doctors-patient-details.html" class="avatar avatar-md me-2">
                                            <img src="assets/img/users/user-04.jpg" alt="product" class="rounded-circle">
                                        </a>
                                        <a href="doctors-patient-details.html" class="text-dark fw-semibold">Marsha Noland <span class="text-body fs-13 fw-normal d-block"> +1 65668 54558 </span>  </a>
                                    </div>
                                </td>
                                <td>
                                    30 Apr 2025
                                </td>
                                <td> <span class="badge badge-soft-info rounded text-info fw-medium fs-13">Schedule</span> </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu p-2">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#edit_appointment">Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#view_details">View</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal">Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>


                            <tr>
                                <td>12 Mar 2025 - 05:40 PM</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="doctors-patient-details.html" class="avatar avatar-md me-2">
                                            <img src="assets/img/users/user-05.jpg" alt="product" class="rounded-circle">
                                        </a>
                                        <a href="doctors-patient-details.html" class="text-dark fw-semibold">Irma Armstrong <span class="text-body fs-13 fw-regular d-block"> +1 45214 66568 </span>  </a>
                                    </div>
                                </td>
                                <td>
                                    Online
                                </td>
                                <td> <span class="badge badge-soft-success rounded text-success fw-medium fs-13">Confirmed</span> </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu p-2">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#edit_appointment">Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#view_details">View</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal">Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td>24 Feb 2025 - 09:20 AM</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="doctors-patient-details.html" class="avatar avatar-md me-2">
                                            <img src="assets/img/users/user-06.jpg" alt="product" class="rounded-circle">
                                        </a>
                                        <a href="doctors-patient-details.html" class="text-dark fw-semibold">Ezra Belcher <span class="text-body fs-13 fw-regular d-block"> +1 65895 41247 </span>  </a>
                                    </div>
                                </td>
                                <td>
                                    In-Person
                                </td>
                                <td> <span class="badge badge-soft-danger rounded text-danger fw-medium fs-13">Cancelled</span> </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu p-2">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#edit_appointment">Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#view_details">View</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal">Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td>16 Feb 2025 - 11:40 AM</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="doctors-patient-details.html" class="avatar avatar-md me-2">
                                            <img src="assets/img/users/user-07.jpg" alt="product" class="rounded-circle">
                                        </a>
                                        <a href="doctors-patient-details.html" class="text-dark fw-semibold">Glen Lentz <span class="text-body fs-13 fw-regular d-block"> +1 62458 45845 </span>  </a>
                                    </div>
                                </td>
                                <td>
                                    Online
                                </td>
                                <td> <span class="badge badge-soft-success rounded text-success fw-medium fs-13">Confirmed</span> </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu p-2">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#edit_appointment">Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#view_details">View</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal">Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td>01 Feb 2025 - 04:00 PM</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="doctors-patient-details.html" class="avatar avatar-md me-2">
                                            <img src="assets/img/users/user-08.jpg" alt="product" class="rounded-circle">
                                        </a>
                                        <a href="doctors-patient-details.html" class="text-dark fw-semibold">Bernard Griffith <span class="text-body fs-13 fw-regular d-block"> +1 61422 45214 </span>  </a>
                                    </div>
                                </td>
                                <td>
                                    Online
                                </td>
                                <td> <span class="badge badge-soft-primary rounded text-primary fw-medium fs-13">Checked Out</span> </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu p-2">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#edit_appointment">Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#view_details">View</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal">Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td>25 Jan 2025 - 03:10 PM</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="doctors-patient-details.html" class="avatar avatar-md me-2">
                                            <img src="assets/img/users/user-09.jpg" alt="product" class="rounded-circle">
                                        </a>
                                        <a href="doctors-patient-details.html" class="text-dark fw-semibold">John Elsass <span class="text-body fs-13 fw-regular d-block">+1 47851 26371</span>  </a>
                                    </div>
                                </td>
                                <td>
                                    Online
                                </td>
                                <td> <span class="badge badge-soft-info rounded text-info fw-medium fs-13">Schedule</span> </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu p-2">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#edit_appointment">Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#view_details">View</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal">Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td>12 Jan 2025 - 03:10 PM</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="doctors-patient-details.html" class="avatar avatar-md me-2">
                                            <img src="assets/img/users/user-10.jpg" alt="product" class="rounded-circle">
                                        </a>
                                        <a href="doctors-patient-details.html" class="text-dark fw-semibold">John Albert <span class="text-body fs-13 fw-regular d-block">+1 47851 35267</span>  </a>
                                    </div>
                                </td>
                                <td>
                                    In-Person
                                </td>
                                <td> <span class="badge badge-soft-danger rounded text-danger fw-medium fs-13">cancelled</span> </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu p-2">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#edit_appointment">Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#view_details">View</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal">Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!--  End Table -->

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
    <div class="offcanvas offcanvas-offset offcanvas-end" tabindex="-1"  id="new_appointment">
        <div class="offcanvas-header d-block pb-0 px-0">
            <div class="border-bottom d-flex align-items-center justify-content-between pb-3 px-3">
                <h5 class="offcanvas-title fs-18 fw-bold">New Appointment</h5>
                <button type="button" class="btn-close opacity-100" data-bs-dismiss="offcanvas" aria-label="Close"></button></div>
        </div>
        <div class="offcanvas-body pt-3">
            <form action="doctors-appointments.html#">
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
    <div class="offcanvas offcanvas-offset offcanvas-end" tabindex="-1"  id="edit_appointment">
        <div class="offcanvas-header d-block pb-0 px-0">
            <div class="border-bottom d-flex align-items-center justify-content-between pb-3 px-3">
                <h5 class="offcanvas-title fs-18 fw-bold"> Edit Appointment</h5>
                <button type="button" class="btn-close opacity-100" data-bs-dismiss="offcanvas" aria-label="Close"></button></div>
        </div>
        <div class="offcanvas-body pt-3">
            <form action="doctors-appointments.html#">
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
    <div class="offcanvas offcanvas-offset offcanvas-end" tabindex="-1"  id="view_details">
        <div class="offcanvas-header d-block pb-0 px-0">
            <div class="border-bottom d-flex align-items-center justify-content-between pb-3 px-3">
                <h5 class="offcanvas-title fs-18 fw-bold">Appointment Details <span class="badge badge-soft-primary border pt-1 px-2 border-primary fw-medium ms-2">#AP544658</span></h5>
                <button type="button" class="btn-close opacity-100" data-bs-dismiss="offcanvas" aria-label="Close"></button>            </div>
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
                        <a href="doctors-appointments.html" class="btn btn-danger position-relative z-1" data-bs-dismiss="modal">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Delete Modal  -->

    @include('admin.js')

    </body>

</html>
