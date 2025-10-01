
<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Patients - Medical & Hospital - Bootstrap 5 Admin Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Dreams Technologies">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png">

    <!-- Apple Icon -->
    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">


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
                        <h4 class="fw-bold mb-0">Patients List <span class="badge badge-soft-primary fw-medium border py-1 px-2 border-primary fs-13 ms-1">Total Patients : 565</span></h4>
                    </div>
                    <div class="text-end d-flex">
                        <!-- dropdown-->
                        <div class="dropdown me-1">
							<a href="javascript:void(0);" class="btn btn-md fs-14 fw-normal border bg-white rounded text-dark d-inline-flex align-items-center"  data-bs-toggle="dropdown">
								Export<i class="ti ti-chevron-down ms-2"></i>
							</a>
							<ul class="dropdown-menu p-2">
								<li>
									<a class="dropdown-item" href="patients.html#">Download as PDF</a>
								</li>
								<li>
									<a class="dropdown-item" href="patients.html#">Download as Excel</a>
								</li>
							</ul>
						</div>
                        <div class="bg-white border shadow-sm rounded px-1 pb-0 text-center d-flex align-items-center justify-content-center">
                            <a href="patients.html" class="bg-light rounded p-1 d-flex align-items-center justify-content-center"> <i class="ti ti-list fs-14 text-body"></i></a>
                            <a href="patients-grid.html" class="bg-white rounded p-1 d-flex align-items-center justify-content-center"> <i class="ti ti-layout-grid fs-14 text-body"></i> </a>
                        </div>

                        <a href="create-patient.html" class="btn btn-primary ms-2 fs-13 btn-md"><i class="ti ti-plus me-1"></i>New Patient</a>
                    </div>
				</div>
				<!-- End Page Header -->

                <!--  Start Filter -->
                <div class=" d-flex align-items-center justify-content-between flex-wrap">
                    <div>
                        <div class="search-set mb-3">
                            <div class="d-flex align-items-center flex-wrap gap-2">
                                <div class="table-search d-flex align-items-center mb-0">
                                    <div class="search-input">
                                        <a href="javascript:void(0);" class="btn-searchset"></a>
                                    </div>
                                </div>
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
                                <form action="patients.html#">
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
                                                    <ul class="mb-3">
                                                        <li class="mb-1">
                                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                                Available
                                                            </label>
                                                        </li>
                                                        <li class="mb-0">
                                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                                Unavailable
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
                                <th>Patient</th>
                                <th>Phone</th>
                                <th>Doctor</th>
                                <th>Address</th>
                                <th>Last Visit</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="patient-details.html" class="avatar avatar-md me-2">
                                            <img src="assets/img/users/user-08.jpg" alt="product" class="rounded-circle">
                                        </a>
                                        <a href="patient-details.html" class="text-dark fw-semibold">Alberto Ripley <span class="text-body fs-13 fw-normal d-block"> 26, Male </span>  </a>
                                    </div>
                                </td>
                                <td>+1 41245 54132</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="doctor-details.html" class="avatar me-2 flex-shrink-0">
                                            <img src="assets/img/doctors/doctor-01.jpg" alt="img" class="rounded-circle">
                                        </a>
                                        <div>
                                          <h6 class="fs-14 mb-1"><a href="doctor-details.html" class="fw-semibold">Dr. Mick Thompson</a></h6>
                                          <p class="mb-0 fs-13">Cardiologist</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Miami, Florida</td>
                                <td>30 Apr 2025</td>
                                <td><span class="badge badge-soft-success rounded text-success border border-success fs-13 fw-medium">Available</span></td>
                                <td>
                                    <div class="d-flex align-items-center gap-1">
                                        <a href="appointments.html" class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1 me-1">
                                            <i class="ti ti-calendar-cog"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1 me-1" data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu p-2">
                                            <li>
                                                <a href="edit-patient.html" class="dropdown-item d-flex align-items-center">Edit</a>
                                            </li>
                                            <li>
                                                <a href="patient-details.html" class="dropdown-item d-flex align-items-center">View</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal">Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="patient-details.html" class="avatar avatar-md me-2">
                                            <img src="assets/img/users/user-16.jpg" alt="product" class="rounded-circle">
                                        </a>
                                        <a href="patient-details.html" class="text-dark fw-semibold">Susan Babin <span class="text-body fs-13 fw-normal d-block"> 21, Female </span>  </a>
                                    </div>
                                </td>
                                <td>+1 54554 54789</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="doctor-details.html" class="avatar me-2 flex-shrink-0">
                                            <img src="assets/img/doctors/doctor-02.jpg" alt="img" class="rounded-circle">
                                        </a>
                                        <div>
                                          <h6 class="fs-14 mb-1"><a href="doctor-details.html" class="fw-semibold">Dr. Sarah Johnson</a></h6>
                                          <p class="mb-0 fs-13">Orthopedic Surgeon</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Austin, Texas</td>
                                <td>15 Apr 2025</td>
                                <td><span class="badge badge-soft-danger rounded text-danger border border-danger fs-13 fw-medium">Unavailable</span></td>
                                <td>
                                    <div class="d-flex align-items-center gap-1">
                                        <a href="appointments.html" class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1 me-1">
                                            <i class="ti ti-calendar-cog"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1 me-1" data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu p-2">
                                            <li>
                                                <a href="edit-patient.html" class="dropdown-item d-flex align-items-center">Edit</a>
                                            </li>
                                            <li>
                                                <a href="patient-details.html" class="dropdown-item d-flex align-items-center">View</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal">Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="patient-details.html" class="avatar avatar-md me-2">
                                            <img src="assets/img/users/user-06.jpg" alt="product" class="rounded-circle">
                                        </a>
                                        <a href="patient-details.html" class="text-dark fw-semibold">Carol Lam <span class="text-body fs-13 fw-normal d-block"> 28, Female </span>  </a>
                                    </div>
                                </td>
                                <td>+1  43554 54985</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="doctor-details.html" class="avatar me-2 flex-shrink-0">
                                            <img src="assets/img/doctors/doctor-03.jpg" alt="img" class="rounded-circle">
                                        </a>
                                        <div>
                                          <h6 class="fs-14 mb-1"><a href="doctor-details.html" class="fw-semibold">Dr. Emily Carter</a></h6>
                                          <p class="mb-0 fs-13">Pediatrician</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Seattle, Washington</td>
                                <td>02 Apr 2025</td>
                                <td><span class="badge badge-soft-success rounded text-success border border-success fs-13 fw-medium">Available</span></td>
                                <td>
                                    <div class="d-flex align-items-center gap-1">
                                        <a href="appointments.html" class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1 me-1">
                                            <i class="ti ti-calendar-cog"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1 me-1" data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu p-2">
                                            <li>
                                                <a href="edit-patient.html" class="dropdown-item d-flex align-items-center">Edit</a>
                                            </li>
                                            <li>
                                                <a href="patient-details.html" class="dropdown-item d-flex align-items-center">View</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal">Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="patient-details.html" class="avatar avatar-md me-2">
                                            <img src="assets/img/users/user-25.jpg" alt="product" class="rounded-circle">
                                        </a>
                                        <a href="patient-details.html" class="text-dark fw-semibold">Marsha Noland <span class="text-body fs-13 fw-normal d-block"> 25, Female </span>  </a>
                                    </div>
                                </td>
                                <td>+1 47554 54257</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="doctor-details.html" class="avatar me-2 flex-shrink-0">
                                            <img src="assets/img/doctors/doctor-04.jpg" alt="img" class="rounded-circle">
                                        </a>
                                        <div>
                                          <h6 class="fs-14 mb-1"><a href="doctor-details.html" class="fw-semibold">Dr. David Lee</a></h6>
                                          <p class="mb-0 fs-13">Gynecologist</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Chicago, Illinois</td>
                                <td>27 Mar 2025</td>
                                <td><span class="badge badge-soft-danger rounded text-danger border border-danger fs-13 fw-medium">Unavailable</span></td>
                                <td>
                                    <div class="d-flex align-items-center gap-1">
                                        <a href="appointments.html" class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1 me-1">
                                            <i class="ti ti-calendar-cog"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1 me-1" data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu p-2">
                                            <li>
                                                <a href="edit-patient.html" class="dropdown-item d-flex align-items-center">Edit</a>
                                            </li>
                                            <li>
                                                <a href="patient-details.html" class="dropdown-item d-flex align-items-center">View</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal">Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="patient-details.html" class="avatar avatar-md me-2">
                                            <img src="assets/img/users/user-39.jpg" alt="product" class="rounded-circle">
                                        </a>
                                        <a href="patient-details.html" class="text-dark fw-semibold">Irma Armstrong <span class="text-body fs-13 fw-normal d-block"> 32, Female </span>  </a>
                                    </div>
                                </td>
                                <td>+1 54114 57526</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="doctor-details.html" class="avatar me-2 flex-shrink-0">
                                            <img src="assets/img/doctors/doctor-05.jpg" alt="img" class="rounded-circle">
                                        </a>
                                        <div>
                                          <h6 class="fs-14 mb-1"><a href="doctor-details.html" class="fw-semibold">Dr. Anna Kim</a></h6>
                                          <p class="mb-0 fs-13">Psychiatrist</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Phoenix, Arizona</td>
                                <td>12 Mar 2025</td>
                                <td><span class="badge badge-soft-success rounded text-success border border-success fs-13 fw-medium">Available</span></td>
                                <td>
                                    <div class="d-flex align-items-center gap-1">
                                        <a href="appointments.html" class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1 me-1">
                                            <i class="ti ti-calendar-cog"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1 me-1" data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu p-2">
                                            <li>
                                                <a href="edit-patient.html" class="dropdown-item d-flex align-items-center">Edit</a>
                                            </li>
                                            <li>
                                                <a href="patient-details.html" class="dropdown-item d-flex align-items-center">View</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal">Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="patient-details.html" class="avatar avatar-md me-2">
                                            <img src="assets/img/users/user-14.jpg" alt="product" class="rounded-circle">
                                        </a>
                                        <a href="patient-details.html" class="text-dark fw-semibold">Jesus Adams <span class="text-body fs-13 fw-normal d-block"> 27, Male </span>  </a>
                                    </div>
                                </td>
                                <td>+1 51247 56574</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="doctor-details.html" class="avatar me-2 flex-shrink-0">
                                            <img src="assets/img/doctors/doctor-06.jpg" alt="img" class="rounded-circle">
                                        </a>
                                        <div>
                                          <h6 class="fs-14 mb-1"><a href="doctor-details.html" class="fw-semibold">Dr. John Smith</a></h6>
                                          <p class="mb-0 fs-13">Neurosurgeon</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Atlanta, Georgia</td>
                                <td>05 Mar 2025</td>
                                <td><span class="badge badge-soft-danger rounded text-danger border border-danger fs-13 fw-medium">Unavailable</span></td>
                                <td>
                                    <div class="d-flex align-items-center gap-1">
                                        <a href="appointments.html" class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1 me-1">
                                            <i class="ti ti-calendar-cog"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1 me-1" data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu p-2">
                                            <li>
                                                <a href="edit-patient.html" class="dropdown-item d-flex align-items-center">Edit</a>
                                            </li>
                                            <li>
                                                <a href="patient-details.html" class="dropdown-item d-flex align-items-center">View</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal">Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="patient-details.html" class="avatar avatar-md me-2">
                                            <img src="assets/img/profiles/avatar-27.jpg" alt="product" class="rounded-circle">
                                        </a>
                                        <a href="patient-details.html" class="text-dark fw-semibold">Ezra Belcher <span class="text-body fs-13 fw-normal d-block"> 28, Male </span>  </a>
                                    </div>
                                </td>
                                <td>+1 41452 25741</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="doctor-details.html" class="avatar me-2 flex-shrink-0">
                                            <img src="assets/img/doctors/doctor-07.jpg" alt="img" class="rounded-circle">
                                        </a>
                                        <div>
                                          <h6 class="fs-14 mb-1"><a href="doctor-details.html" class="fw-semibold">Dr. Lisa White</a></h6>
                                          <p class="mb-0 fs-13">Oncologist</p>
                                        </div>
                                    </div>
                                </td>
                                <td>San Diego, California</td>
                                <td>24 Feb 2025</td>
                                <td><span class="badge badge-soft-success rounded text-success border border-success fs-13 fw-medium">Available</span></td>
                                <td>
                                    <div class="d-flex align-items-center gap-1">
                                        <a href="appointments.html" class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1 me-1">
                                            <i class="ti ti-calendar-cog"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1 me-1" data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu p-2">
                                            <li>
                                                <a href="edit-patient.html" class="dropdown-item d-flex align-items-center">Edit</a>
                                            </li>
                                            <li>
                                                <a href="patient-details.html" class="dropdown-item d-flex align-items-center">View</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal">Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="patient-details.html" class="avatar avatar-md me-2">
                                            <img src="assets/img/users/user-05.jpg" alt="product" class="rounded-circle">
                                        </a>
                                        <a href="patient-details.html" class="text-dark fw-semibold">Glen Lentz <span class="text-body fs-13 fw-normal d-block"> 22, Male </span>  </a>
                                    </div>
                                </td>
                                <td>+1 51425 21498</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="doctor-details.html" class="avatar me-2 flex-shrink-0">
                                            <img src="assets/img/doctors/doctor-08.jpg" alt="img" class="rounded-circle">
                                        </a>
                                        <div>
                                          <h6 class="fs-14 mb-1"><a href="doctor-details.html" class="fw-semibold">Dr. Patricia Brown</a></h6>
                                          <p class="mb-0 fs-13">Pulmonologist</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Denver, Colorado</td>
                                <td>16 Feb 2025</td>
                                <td><span class="badge badge-soft-danger rounded text-danger border border-danger fs-13 fw-medium">Unavailable</span></td>
                                <td>
                                    <div class="d-flex align-items-center gap-1">
                                        <a href="appointments.html" class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1 me-1">
                                            <i class="ti ti-calendar-cog"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1 me-1" data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu p-2">
                                            <li>
                                                <a href="edit-patient.html" class="dropdown-item d-flex align-items-center">Edit</a>
                                            </li>
                                            <li>
                                                <a href="patient-details.html" class="dropdown-item d-flex align-items-center">View</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal">Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="patient-details.html" class="avatar avatar-md me-2">
                                            <img src="assets/img/users/user-07.jpg" alt="product" class="rounded-circle">
                                        </a>
                                        <a href="patient-details.html" class="text-dark fw-semibold">Bernard Griffith <span class="text-body fs-13 fw-normal d-block"> 34, Male </span>  </a>
                                    </div>
                                </td>
                                <td>+1 45214 98741</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="doctor-details.html" class="avatar me-2 flex-shrink-0">
                                            <img src="assets/img/doctors/doctor-09.jpg" alt="img" class="rounded-circle">
                                        </a>
                                        <div>
                                          <h6 class="fs-14 mb-1"><a href="doctor-details.html" class="fw-semibold">Dr. Rachel Green</a></h6>
                                          <p class="mb-0 fs-13">Urologist</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Boston, Massachusetts</td>
                                <td>01 Feb 2025</td>
                                <td><span class="badge badge-soft-success rounded text-success border border-success fs-13 fw-medium">Available</span></td>
                                <td>
                                    <div class="d-flex align-items-center gap-1">
                                        <a href="appointments.html" class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1 me-1">
                                            <i class="ti ti-calendar-cog"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1 me-1" data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu p-2">
                                            <li>
                                                <a href="edit-patient.html" class="dropdown-item d-flex align-items-center">Edit</a>
                                            </li>
                                            <li>
                                                <a href="patient-details.html" class="dropdown-item d-flex align-items-center">View</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal">Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="patient-details.html" class="avatar avatar-md me-2">
                                            <img src="assets/img/users/user-17.jpg" alt="product" class="rounded-circle">
                                        </a>
                                        <a href="patient-details.html" class="text-dark fw-semibold">John Elsass <span class="text-body fs-13 fw-normal d-block"> 23, Male </span>  </a>
                                    </div>
                                </td>
                                <td>+1 41245 32540</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="doctor-details.html" class="avatar me-2 flex-shrink-0">
                                            <img src="assets/img/doctors/doctor-10.jpg" alt="img" class="rounded-circle">
                                        </a>
                                        <div>
                                          <h6 class="fs-14 mb-1"><a href="doctor-details.html" class="fw-semibold">Dr. Michael Smith</a></h6>
                                          <p class="mb-0 fs-13">Cardiologist</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Orlando, Florida</td>
                                <td>25 Jan 2025</td>
                                <td><span class="badge badge-soft-danger rounded text-danger border border-danger fs-13 fw-medium">Unavailable</span></td>
                                <td>
                                    <div class="d-flex align-items-center gap-1">
                                        <a href="appointments.html" class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1 me-1">
                                            <i class="ti ti-calendar-cog"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1 me-1" data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu p-2">
                                            <li>
                                                <a href="edit-patient.html" class="dropdown-item d-flex align-items-center">Edit</a>
                                            </li>
                                            <li>
                                                <a href="patient-details.html" class="dropdown-item d-flex align-items-center">View</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal">Delete</a>
                                            </li>
                                        </ul>
                                    </div>
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
                        <a href="patients.html" class="btn btn-danger position-relative z-1" data-bs-dismiss="modal">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Delete Modal  -->

    @include('admin.js')

</body>

</html>
