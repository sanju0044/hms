
<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>OP BILLING LIST</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Dreams Technologies">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png">

    <!-- Apple Icon -->
    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">

    <!-- Theme Config Js -->
    <script src="assets/js/theme-script.js" type="text/javascript"></script>

    <!-- Font Awosome Icon CSS -->
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Tabler Icon CSS -->
    <link rel="stylesheet" href="assets/plugins/tabler-icons/tabler-icons.min.css">

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
        @include('admin.sidebar')
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
                        <h4 class="fw-semibold mb-0"> OP BILLING LIST </h4>
                    </div>
                    <div class="text-end d-flex">
                        <!-- dropdown-->
                        <div class="dropdown me-1">
							<a href="javascript:void(0);" class="btn btn-md fs-14 fw-normal border bg-white rounded text-dark d-inline-flex align-items-center"  data-bs-toggle="dropdown">
								Export<i class="ti ti-chevron-down ms-2"></i>
							</a>
							<ul class="dropdown-menu p-2">
								<li>
									<a class="dropdown-item" href="appointments.html#">Download as PDF</a>
								</li>
								<li>
									<a class="dropdown-item" href="appointments.html#">Download as Excel</a>
								</li>
							</ul>
						</div>
                        <div class="bg-white border shadow-sm rounded px-1 pb-0 text-center d-flex align-items-center justify-content-center">
                            <a href="appointments.html" class="bg-light rounded p-1 d-flex align-items-center justify-content-center"> <i class="ti ti-list fs-14 text-body"></i></a>
                            <a href="appointment-calendar.html" class="bg-white rounded p-1 d-flex align-items-center justify-content-center"> <i class="ti ti-calendar-event fs-14 text-body"></i> </a>
                        </div>

                        <a href="#" class="btn btn-primary ms-2 fs-13 btn-md" data-bs-toggle="modal" data-bs-target="#add_modal"><i class="ti ti-plus me-1"></i>ADD OP BILLING </a>
                    </div>
				</div>
				<!-- End Page Header -->

                <!--  Start Filter -->
                <div class=" d-flex align-items-center justify-content-between flex-wrap">
                    <div class="d-flex align-items-center gap-2">
                        <div class="search-set mb-3">
                            <div class="d-flex align-items-center flex-wrap gap-2">
                                <div class="table-search d-flex align-items-center mb-0">
                                    <div class="search-input">
                                        <a href="javascript:void(0);" class="btn-searchset"></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex right-content align-items-center flex-wrap mb-3">
                            <div id="reportrange" class="reportrange-picker d-flex align-items-center">
								<i class="ti ti-calendar text-gray-5 fs-14 me-1"></i><span class="reportrange-picker-field">16 Apr 25 - 16 Apr 25</span>
							</div>
                        </div>
                    </div>

                    <div class="d-flex table-dropdown mb-3 right-content align-items-center flex-wrap row-gap-3">
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
                                <form action="appointments.html#">
                                    <div class="filter-body pb-0">
                                        <div class="mb-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <label class="form-label">Patient</label>
                                                <a href="javascript:void(0);" class="link-primary mb-1">Reset</a>
                                            </div>
                                            <div class="dropdown">
                                                <a href="javascript:void(0);" class="dropdown-toggle btn bg-white  d-flex align-items-center justify-content-start fs-13 p-2 fw-normal border" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">
                                                    Select <i class="ti ti-chevron-down ms-auto"></i>
                                                </a>
                                                <div class="dropdown-menu shadow-lg w-100 dropdown-info p-3">
                                                    <div class="mb-3">
                                                        <div class="input-icon-start input-icon position-relative">
                                                            <span class="input-icon-addon fs-12">
                                                                <i class="ti ti-search"></i>
                                                            </span>
                                                            <input type="text" class="form-control form-control-md" placeholder="Search">
                                                        </div>
                                                    </div>
                                                    <ul class="mb-3">
                                                        <li class="mb-1">
                                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                                <span class="avatar avatar-xs rounded-circle me-2"><img src="assets/img/users/user-33.jpg" class="flex-shrink-0 rounded-circle" alt="img"></span>Alberto Ripley
                                                            </label>
                                                        </li>
                                                        <li class="mb-1">
                                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                                <span class="avatar avatar-xs rounded-circle me-2"><img src="assets/img/users/user-12.jpg" class="flex-shrink-0 rounded-circle" alt="img"></span>Bernard Griffith
                                                            </label>
                                                        </li>
                                                        <li class="mb-1">
                                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                                <span class="avatar avatar-xs rounded-circle me-2"><img src="assets/img/users/user-02.jpg" class="flex-shrink-0 rounded-circle" alt="img"></span>Carol Lam
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                                <span class="avatar avatar-xs rounded-circle me-2"><img src="assets/img/users/user-08.jpg" class="flex-shrink-0 rounded-circle" alt="img"></span>Ezra Belcher
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <div class="row g-2">
                                                        <div class="col-6">
                                                            <a href="javascript:void(0);" class="btn btn-outline-white w-100 close-filter">Cancel</a>
                                                        </div>
                                                        <div class="col-6">
                                                            <a href="javascript:void(0);" class="btn btn-primary w-100">Select</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <label class="form-label">Doctor</label>
                                                <a href="javascript:void(0);" class="link-primary mb-1">Reset</a>
                                            </div>
                                            <div class="dropdown">
                                                <a href="javascript:void(0);" class="dropdown-toggle btn bg-white  d-flex align-items-center justify-content-start fs-13 p-2 fw-normal border" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">
                                                    Select <i class="ti ti-chevron-down ms-auto"></i>
                                                </a>
                                                <div class="dropdown-menu shadow-lg w-100 dropdown-info p-3">
                                                    <div class="mb-3">
                                                        <div class="input-icon-start input-icon position-relative">
                                                            <span class="input-icon-addon fs-12">
                                                                <i class="ti ti-search"></i>
                                                            </span>
                                                            <input type="text" class="form-control form-control-md" placeholder="Search">
                                                        </div>
                                                    </div>
                                                    <ul class="mb-3">
                                                        <li class="mb-1">
                                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                                <span class="avatar avatar-xs rounded-circle me-2"><img src="assets/img/doctors/doctor-01.jpg" class="flex-shrink-0 rounded-circle" alt="img"></span>Dr. Mick Thompson
                                                            </label>
                                                        </li>
                                                        <li class="mb-1">
                                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                                <span class="avatar avatar-xs rounded-circle me-2"><img src="assets/img/doctors/doctor-02.jpg" class="flex-shrink-0 rounded-circle" alt="img"></span>Dr. Sarah Johnson
                                                            </label>
                                                        </li>
                                                        <li class="mb-1">
                                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                                <span class="avatar avatar-xs rounded-circle me-2"><img src="assets/img/doctors/doctor-03.jpg" class="flex-shrink-0 rounded-circle" alt="img"></span>Dr. Emily Carter
                                                            </label>
                                                        </li>
                                                        <li class="mb-1">
                                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                                <span class="avatar avatar-xs rounded-circle me-2"><img src="assets/img/doctors/doctor-04.jpg" class="flex-shrink-0 rounded-circle" alt="img"></span>Dr. David Lee
                                                            </label>
                                                        </li>
                                                        <li class="mb-0">
                                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                                <span class="avatar avatar-xs rounded-circle me-2"><img src="assets/img/doctors/doctor-05.jpg" class="flex-shrink-0 rounded-circle" alt="img"></span>Dr. Anna Kim
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <div class="row g-2">
                                                        <div class="col-6">
                                                            <a href="javascript:void(0);" class="btn btn-outline-white w-100 close-filter">Cancel</a>
                                                        </div>
                                                        <div class="col-6">
                                                            <a href="javascript:void(0);" class="btn btn-primary w-100">Select</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <label class="form-label">Designation</label>
                                                <a href="javascript:void(0);" class="link-primary mb-1">Reset</a>
                                            </div>
                                            <div class="dropdown">
                                                <a href="javascript:void(0);" class="dropdown-toggle btn bg-white  d-flex align-items-center justify-content-start fs-13 p-2 fw-normal border" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">
                                                    Select <i class="ti ti-chevron-down ms-auto"></i>
                                                </a>
                                                <div class="dropdown-menu shadow-lg w-100 dropdown-info p-3">
                                                    <div class="mb-3">
                                                        <div class="input-icon-start input-icon position-relative">
                                                            <span class="input-icon-addon fs-12">
                                                                <i class="ti ti-search"></i>
                                                            </span>
                                                            <input type="text" class="form-control form-control-md" placeholder="Search">
                                                        </div>
                                                    </div>
                                                    <ul class="mb-3">
                                                        <li class="mb-1">
                                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                                Cardiologist
                                                            </label>
                                                        </li>
                                                        <li class="mb-1">
                                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                                Orthopedic Surgeon
                                                            </label>
                                                        </li>
                                                        <li class="mb-1">
                                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                                Pediatrician
                                                            </label>
                                                        </li>
                                                        <li class="mb-1">
                                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                                Gynecologist
                                                            </label>
                                                        </li>
                                                        <li class="mb-1">
                                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                                Psychiatrist
                                                            </label>
                                                        </li>
                                                        <li class="mb-1">
                                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                                Neurosurgeon
                                                            </label>
                                                        </li>
                                                        <li class="mb-1">
                                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                                Oncologist
                                                            </label>
                                                        </li>
                                                        <li class="mb-1">
                                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                                Pulmonologist
                                                            </label>
                                                        </li>
                                                        <li class="mb-1">
                                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                                Urologist
                                                            </label>
                                                        </li>
                                                        <li class="mb-1">
                                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                                Dermatologist
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <div class="row g-2">
                                                        <div class="col-6">
                                                            <a href="javascript:void(0);" class="btn btn-outline-white w-100 close-filter">Cancel</a>
                                                        </div>
                                                        <div class="col-6">
                                                            <a href="javascript:void(0);" class="btn btn-primary w-100">Select</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <label class="form-label">Mode</label>
                                                <a href="javascript:void(0);" class="link-primary mb-1">Reset</a>
                                            </div>
                                            <div class="dropdown">
                                                <a href="javascript:void(0);" class="dropdown-toggle btn bg-white  d-flex align-items-center justify-content-start fs-13 p-2 fw-normal border" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">
                                                    Select <i class="ti ti-chevron-down ms-auto"></i>
                                                </a>
                                                <div class="dropdown-menu shadow-lg w-100 dropdown-info p-3">
                                                    <div class="mb-3">
                                                        <div class="input-icon-start input-icon position-relative">
                                                            <span class="input-icon-addon fs-12">
                                                                <i class="ti ti-search"></i>
                                                            </span>
                                                            <input type="text" class="form-control form-control-md" placeholder="Search">
                                                        </div>
                                                    </div>
                                                    <ul class="mb-3">
                                                        <li class="mb-1">
                                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                                In Person
                                                            </label>
                                                        </li>
                                                        <li class="mb-0">
                                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                                Online
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <div class="row g-2">
                                                        <div class="col-6">
                                                            <a href="javascript:void(0);" class="btn btn-outline-white w-100 close-filter">Cancel</a>
                                                        </div>
                                                        <div class="col-6">
                                                            <a href="javascript:void(0);" class="btn btn-primary w-100">Select</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label mb-1 text-dark fs-14 fw-medium">Date<span class="text-danger">*</span></label>
                                            <div class="input-icon-end position-relative">
                                                <input type="text" class="form-control bookingrange" placeholder="dd/mm/yyyy">
                                                <span class="input-icon-addon">
                                                    <i class="ti ti-calendar"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <label class="form-label">Status</label>
                                                <a href="javascript:void(0);" class="link-primary mb-1">Reset</a>
                                            </div>
                                            <div class="dropdown">
                                                <a href="javascript:void(0);" class="dropdown-toggle btn bg-white  d-flex align-items-center justify-content-start fs-13 p-2 fw-normal border" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">
                                                    Select <i class="ti ti-chevron-down ms-auto"></i>
                                                </a>
                                                <div class="dropdown-menu shadow-lg w-100 dropdown-info p-3">
                                                    <div class="mb-3">
                                                        <div class="input-icon-start input-icon position-relative">
                                                            <span class="input-icon-addon fs-12">
                                                                <i class="ti ti-search"></i>
                                                            </span>
                                                            <input type="text" class="form-control form-control-md" placeholder="Search">
                                                        </div>
                                                    </div>
                                                    <ul class="mb-3">
                                                        <li class="mb-1">
                                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                                Checked Out
                                                            </label>
                                                        </li>
                                                        <li class="mb-0">
                                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                                Checked In
                                                            </label>
                                                        </li>
                                                        <li class="mb-0">
                                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                                Cancelled
                                                            </label>
                                                        </li>
                                                        <li class="mb-0">
                                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                                Schedule
                                                            </label>
                                                        </li>
                                                        <li class="mb-0">
                                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                                Confirmed
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <div class="row g-2">
                                                        <div class="col-6">
                                                            <a href="javascript:void(0);" class="btn btn-outline-white w-100 close-filter">Cancel</a>
                                                        </div>
                                                        <div class="col-6">
                                                            <a href="javascript:void(0);" class="btn btn-primary w-100">Select</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Recent</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Oldest</a>
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
                                <tr>
                                <th>Registration ID</th>
                                <th>Bill No</th>
                                <th class="no-sort">Date & Time</th>
                                <th>Patient</th>
                                <th>Doctor</th>
                                <th>Department</th>
                                <th>Amount</th>
                                <th>Mode Of Payment</th>
                                <th>Remarks</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>PI00001</td>
                                <td>BIL00001</td>
                                <td>30 Apr 2025 - 09:30 AM</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="patient-details.html" class="avatar avatar-md me-2">
                                            <img src="assets/img/users/user-01.jpg" alt="product" class="rounded-circle">
                                        </a>
                                        <a href="patient-details.html" class="text-dark fw-semibold">Alberto Ripley <span class="text-body fs-13 fw-normal d-block"> +1 56556 54565 </span>  </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="doctor-details.html" class="avatar me-2 flex-shrink-0">
                                            <img src="assets/img/doctors/doctor-01.jpg" alt="img" class="rounded-circle">
                                        </a>
                                        <div>
                                          <h6 class="fs-14 mb-1 text-truncate"><a href="doctor-details.html" class="fw-semibold">Dr. Mick Thompson</a></h6>
                                          <p class="mb-0 fs-13 text-truncate">Cardiologist</p>
                                        </div>
                                    </div>
                                </td>
                                <td>General</td>
                                <td>1000</td>
                                <td>Cash</td>
                                <td>test</td>
                                <td> <span class="fs-13 badge badge-soft-info rounded text-info fw-medium">Paid</span> </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu p-2">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Edit</a>
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

    <!-- Start Add modal -->
    <div class="modal fade" id="add_modal">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark fw-bold">OP BILLING</h5>
                    <button type="button" class="btn-close custom-btn-close opacity-100" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-x bg-white fs-16 text-dark"></i></button>
                </div>
                <div class="modal-body pb-0">
                    <!-- form start -->
                    <div class="form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label mb-1 fw-medium">Patient Name<span class="text-danger ms-1">*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter Patient Name">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label mb-1 fw-medium">Doctor Name<span class="text-danger ms-1">*</span></label>
                                     <select class="select form-control">
                                        <option value="m-1">Select</option>
                                        <option value="m-2">Dr. Mick Thompson</option>
                                        <option value="m-3">Dr. Sarah Johnson</option>
                                        <option value="m-4">Dr. Emily Carter</option>
                                        <option value="m-5">Dr. David Lee</option>
                                        <option value="m-6">Dr. Anna Kim</option>
                                        <option value="m-7">Dr. John Smith</option>
                                        <option value="m-8">Dr. Lisa White</option>
                                        <option value="m-9">Dr. Patrica Brown</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label mb-1 fw-medium">Department<span class="text-danger ms-1">*</span></label>
                                     <select class="select form-control">
                                        <option value="m-1">Select</option>
                                        <option value="m-2">Dr. Mick Thompson</option>
                                        <option value="m-3">Dr. Sarah Johnson</option>
                                        <option value="m-4">Dr. Emily Carter</option>
                                        <option value="m-5">Dr. David Lee</option>
                                        <option value="m-6">Dr. Anna Kim</option>
                                        <option value="m-7">Dr. John Smith</option>
                                        <option value="m-8">Dr. Lisa White</option>
                                        <option value="m-9">Dr. Patrica Brown</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label mb-1 fw-medium">Date<span class="text-danger ms-1">*</span></label>
                                     <input type="date" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label mb-1 fw-medium">Time<span class="text-danger ms-1">*</span></label>
                                     <input type="time" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label mb-1 fw-medium">Amount<span class="text-danger ms-1">*</span></label>
                                     <input type="number" class="form-control" placeholder="Enter Amount">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label mb-1 fw-medium">Mode Of Payment<span class="text-danger ms-1">*</span></label>
                                    <select class="select form-control">
                                        <option value="m-1">Select</option>
                                        <option value="m-2">Cash</option>
                                        <option value="m-3">UPI</option>
                                        <option value="m-3">Debit Card</option>
                                        <option value="m-3">Credit Card</option>
                                        <option value="m-3">Net Banking</option>
                                        <option value="m-3">PayPal</option>
                                        <option value="m-3">Google Pay</option>
                                        <option value="m-3">PhonePe</option>
                                        <option value="m-3">Amazon Pay</option>
                                        <option value="m-3">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label mb-1 fw-medium">Status<span class="text-danger ms-1">*</span></label>
                                    <select class="select form-control">
                                        <option value="m-1">Select</option>
                                        <option value="m-2">Paid</option>
                                        <option value="m-3">Unpaid</option>
                                        <option value="m-3">Pending</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label mb-1 fw-medium">Remarks<span class="text-danger ms-1"></span></label>
                                   <textarea class="form-control" placeholder="Enter Remarks"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- form end -->

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light btn-sm me-2 fs-13 fw-medium" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary btn-sm fs-13 fw-medium">Add New Patient</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Add modal  -->

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
                        <a href="appointments.html" class="btn btn-danger position-relative z-1" data-bs-dismiss="modal">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Delete Modal  -->
    @include('admin.js')

   </body>

</html>
