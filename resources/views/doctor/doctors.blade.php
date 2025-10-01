<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Doctors Grid - Medical & Hospital - Bootstrap 5 Admin Template</title>
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

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

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
                <div class="d-flex align-items-sm-center flex-sm-row flex-column gap-2 mb-3">
                    <div class="flex-grow-1">
                        <h4 class="fw-bold mb-0"> Doctor Grid <span class="badge badge-soft-primary fs-13 fw-medium ms-2">Total Doctors : 565</span></h4>
                    </div>
                    <div class="text-end d-flex">
                        <div class="dropdown me-2">
                            <a href="javascript:void(0);" class="btn btn-white bg-white fs-14 py-1 border d-inline-flex text-dark align-items-center" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                <i class="ti ti-filter text-gray-5 me-1"></i>Filters
                            </a>
                            <div class="dropdown-menu dropdown-lg dropdown-menu-end filter-dropdown p-0" id="filter-dropdown">
                                <div class="d-flex align-items-center justify-content-between border-bottom filter-header">
                                    <h4 class="mb-0">Filter</h4>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="link-danger text-decoration-underline">Clear All</a>
                                    </div>
                                </div>
                                <form action="doctors.html#">
                                    <div class="filter-body pb-0">
                                        <div class="mb-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <label class="form-label">Doctor</label>
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
                                        <a href="javascript:void(0);" class="btn btn-light btn-md me-2" id="close-filter">Close</a>
                                        <button type="submit" class="btn btn-primary btn-md">Filter</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="bg-white border shadow-sm rounded px-1 pb-0 text-center d-flex align-items-center justify-content-center">
                            <a href="doctors-list.html" class="bg-white rounded p-1 d-flex align-items-center justify-content-center"> <i class="ti ti-list fs-14 text-body"></i></a>
                            <a href="doctors.html" class="bg-light rounded p-1 d-flex align-items-center justify-content-center"> <i class="ti ti-layout-grid fs-14 text-body"></i> </a>
                        </div>
                        <a href="add-doctor.html" class="btn btn-primary ms-2 fs-13 btn-md"><i class="ti ti-plus me-1"></i>New Doctor</a>
                    </div>
				</div>
				<!-- End Page Header -->

                <div class="row">

                    <div class="col-xl-4 col-md-6">
                        <div class="card">
                            <div class="card-body d-flex align-items-center flex-sm-nowrap flex-wrap row-gap-3">
                                <div class="me-3 doctor-profile-img"><a href="doctor-details.html"><img src="assets/img/doctors/doctor-01.jpg" class="rounded" alt=""></a></div>
                                <div class="flex-fill">
                                    <div class="d-flex align-items-center justify-content-between mb-1">
                                        <h6 class="mb-0 fw-semibold"><a href="doctor-details.html">Dr. Mick Thompson</a></h6>
                                        <div class="action-item">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="edit-doctor.html" class="dropdown-item d-flex align-items-center">Edit</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <span class="d-block mb-2 fs-13">Cardiologist</span>
                                    <p class="mb-2 fs-13">Available : Mon, 20 Jan 2025</p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6 class="text-primary fs-14 mb-0"><span class="text-muted fs-13 fw-normal">Starts From : </span> $499</h6>
                                        <a href="appointment-calendar.html" class="avatar avatar-xs border text-muted fs-14"><i class="ti ti-calendar-cog"></i></a>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-4 col-md-6">
                        <div class="card">
                            <div class="card-body d-flex align-items-center flex-sm-nowrap flex-wrap row-gap-3">
                                <div class="me-3 doctor-profile-img"><a href="doctor-details.html"><img src="assets/img/doctors/doctor-02.jpg" class="rounded" alt=""></a></div>
                                <div class="flex-fill">
                                    <div class="d-flex align-items-center justify-content-between mb-1">
                                        <h6 class="mb-0 fw-semibold"><a href="doctor-details.html">Dr. Sarah Johnson</a></h6>
                                        <div class="action-item">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="edit-doctor.html" class="dropdown-item d-flex align-items-center">Edit</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <span class="d-block mb-2 fs-13">Orthopedic Surgeon</span>
                                    <p class="mb-2 fs-13">Available : Wed, 22 Jan 2025</p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6 class="text-primary fs-14 mb-0"><span class="text-muted fs-13 fw-normal">Starts From : </span> $450</h6>
                                        <a href="appointment-calendar.html" class="avatar avatar-xs border text-muted fs-14"><i class="ti ti-calendar-cog"></i></a>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-4 col-md-6">
                        <div class="card">
                            <div class="card-body d-flex align-items-center flex-sm-nowrap flex-wrap row-gap-3">
                                <div class="me-3 doctor-profile-img"><a href="doctor-details.html"><img src="assets/img/doctors/doctor-03.jpg" class="rounded" alt=""></a></div>
                                <div class="flex-fill">
                                    <div class="d-flex align-items-center justify-content-between mb-1">
                                        <h6 class="mb-0 fw-semibold"><a href="doctor-details.html">Dr. Emily Carter</a></h6>
                                        <div class="action-item">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="edit-doctor.html" class="dropdown-item d-flex align-items-center">Edit</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <span class="d-block mb-2 fs-13">Pediatrician</span>
                                    <p class="mb-2 fs-13">Available : Fri, 24 Jan 2025</p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6 class="text-primary fs-14 mb-0"><span class="text-muted fs-13 fw-normal">Starts From : </span> $300</h6>
                                        <a href="appointment-calendar.html" class="avatar avatar-xs border text-muted fs-14"><i class="ti ti-calendar-cog"></i></a>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-4 col-md-6">
                        <div class="card">
                            <div class="card-body d-flex align-items-center flex-sm-nowrap flex-wrap row-gap-3">
                                <div class="me-3 doctor-profile-img"><a href="doctor-details.html"><img src="assets/img/doctors/doctor-04.jpg" class="rounded" alt=""></a></div>
                                <div class="flex-fill">
                                    <div class="d-flex align-items-center justify-content-between mb-1">
                                        <h6 class="mb-0 fw-semibold"><a href="doctor-details.html">Dr. David Lee</a></h6>
                                        <div class="action-item">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="edit-doctor.html" class="dropdown-item d-flex align-items-center">Edit</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <span class="d-block mb-2 fs-13">Gynecologist</span>
                                    <p class="mb-2 fs-13">Available : Tue, 21 Jan 2025</p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6 class="text-primary fs-14 mb-0"><span class="text-muted fs-13 fw-normal">Starts From : </span> $250</h6>
                                        <a href="appointment-calendar.html" class="avatar avatar-xs border text-muted fs-14"><i class="ti ti-calendar-cog"></i></a>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-4 col-md-6">
                        <div class="card">
                            <div class="card-body d-flex align-items-center flex-sm-nowrap flex-wrap row-gap-3">
                                <div class="me-3 doctor-profile-img"><a href="doctor-details.html"><img src="assets/img/doctors/doctor-05.jpg" class="rounded" alt=""></a></div>
                                <div class="flex-fill">
                                    <div class="d-flex align-items-center justify-content-between mb-1">
                                        <h6 class="mb-0 fw-semibold"><a href="doctor-details.html">Dr. Anna Kim</a></h6>
                                        <div class="action-item">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="edit-doctor.html" class="dropdown-item d-flex align-items-center">Edit</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <span class="d-block mb-2 fs-13">Psychiatrist</span>
                                    <p class="mb-2 fs-13">Available : Mon, 27 Jan 2025</p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6 class="text-primary fs-14 mb-0"><span class="text-muted fs-13 fw-normal">Starts From : </span> $350</h6>
                                        <a href="appointment-calendar.html" class="avatar avatar-xs border text-muted fs-14"><i class="ti ti-calendar-cog"></i></a>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-4 col-md-6">
                        <div class="card">
                            <div class="card-body d-flex align-items-center flex-sm-nowrap flex-wrap row-gap-3">
                                <div class="me-3 doctor-profile-img"><a href="doctor-details.html"><img src="assets/img/doctors/doctor-06.jpg" class="rounded" alt=""></a></div>
                                <div class="flex-fill">
                                    <div class="d-flex align-items-center justify-content-between mb-1">
                                        <h6 class="mb-0 fw-semibold"><a href="doctor-details.html">Dr. John Smith</a></h6>
                                        <div class="action-item">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="edit-doctor.html" class="dropdown-item d-flex align-items-center">Edit</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <span class="d-block mb-2 fs-13">Neurosurgeon</span>
                                    <p class="mb-2 fs-13">Available : Thu, Jan 30, 2025</p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6 class="text-primary fs-14 mb-0"><span class="text-muted fs-13 fw-normal">Starts From : </span> $499</h6>
                                        <a href="appointment-calendar.html" class="avatar avatar-xs border text-muted fs-14"><i class="ti ti-calendar-cog"></i></a>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-4 col-md-6">
                        <div class="card">
                            <div class="card-body d-flex align-items-center flex-sm-nowrap flex-wrap row-gap-3">
                                <div class="me-3 doctor-profile-img"><a href="doctor-details.html"><img src="assets/img/doctors/doctor-07.jpg" class="rounded" alt=""></a></div>
                                <div class="flex-fill">
                                    <div class="d-flex align-items-center justify-content-between mb-1">
                                        <h6 class="mb-0 fw-semibold"><a href="doctor-details.html">Dr. Lisa White</a></h6>
                                        <div class="action-item">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="edit-doctor.html" class="dropdown-item d-flex align-items-center">Edit</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <span class="d-block mb-2 fs-13">Oncologist</span>
                                    <p class="mb-2 fs-13">Available : Sat, 25 Jan 2025</p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6 class="text-primary fs-14 mb-0"><span class="text-muted fs-13 fw-normal">Starts From : </span> $200</h6>
                                        <a href="appointment-calendar.html" class="avatar avatar-xs border text-muted fs-14"><i class="ti ti-calendar-cog"></i></a>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-4 col-md-6">
                        <div class="card">
                            <div class="card-body d-flex align-items-center flex-sm-nowrap flex-wrap row-gap-3">
                                <div class="me-3 doctor-profile-img"><a href="doctor-details.html"><img src="assets/img/doctors/doctor-08.jpg" class="rounded" alt=""></a></div>
                                <div class="flex-fill">
                                    <div class="d-flex align-items-center justify-content-between mb-1">
                                        <h6 class="mb-0 fw-semibold"><a href="doctor-details.html">Dr. Patricia Brown</a></h6>
                                        <div class="action-item">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="edit-doctor.html" class="dropdown-item d-flex align-items-center">Edit</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <span class="d-block mb-2 fs-13">Pulmonologist</span>
                                    <p class="mb-2 fs-13">Available : Sun, 01 Feb 2025</p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6 class="text-primary fs-14 mb-0"><span class="text-muted fs-13 fw-normal">Starts From : </span> $450</h6>
                                        <a href="appointment-calendar.html" class="avatar avatar-xs border text-muted fs-14"><i class="ti ti-calendar-cog"></i></a>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-4 col-md-6">
                        <div class="card">
                            <div class="card-body d-flex align-items-center flex-sm-nowrap flex-wrap row-gap-3">
                                <div class="me-3 doctor-profile-img"><a href="doctor-details.html"><img src="assets/img/doctors/doctor-09.jpg" class="rounded" alt=""></a></div>
                                <div class="flex-fill">
                                    <div class="d-flex align-items-center justify-content-between mb-1">
                                        <h6 class="mb-0 fw-semibold"><a href="doctor-details.html">Dr. Rachel Green</a></h6>
                                        <div class="action-item">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="edit-doctor.html" class="dropdown-item d-flex align-items-center">Edit</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <span class="d-block mb-2 fs-13">Urologist</span>
                                    <p class="mb-2 fs-13">Available : Tue, 28 Jan 2025</p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6 class="text-primary fs-14 mb-0"><span class="text-muted fs-13 fw-normal">Starts From : </span> $400</h6>
                                        <a href="appointment-calendar.html" class="avatar avatar-xs border text-muted fs-14"><i class="ti ti-calendar-cog"></i></a>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-4 col-md-6">
                        <div class="card">
                            <div class="card-body d-flex align-items-center flex-sm-nowrap flex-wrap row-gap-3">
                                <div class="me-3 doctor-profile-img"><a href="doctor-details.html"><img src="assets/img/doctors/doctor-10.jpg" class="rounded" alt=""></a></div>
                                <div class="flex-fill">
                                    <div class="d-flex align-items-center justify-content-between mb-1">
                                        <h6 class="mb-0 fw-semibold"><a href="doctor-details.html">Dr. Michael Smith</a></h6>
                                        <div class="action-item">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="edit-doctor.html" class="dropdown-item d-flex align-items-center">Edit</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <span class="d-block mb-2 fs-13">Cardiologist</span>
                                    <p class="mb-2 fs-13">Available : Thu, 05 Feb 2025</p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6 class="text-primary fs-14 mb-0"><span class="text-muted fs-13 fw-normal">Starts From : </span> $300</h6>
                                        <a href="appointment-calendar.html" class="avatar avatar-xs border text-muted fs-14"><i class="ti ti-calendar-cog"></i></a>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-4 col-md-6">
                        <div class="card">
                            <div class="card-body d-flex align-items-center flex-sm-nowrap flex-wrap row-gap-3">
                                <div class="me-3 doctor-profile-img"><a href="doctor-details.html"><img src="assets/img/doctors/doctor-11.jpg" class="rounded" alt=""></a></div>
                                <div class="flex-fill">
                                    <div class="d-flex align-items-center justify-content-between mb-1">
                                        <h6 class="mb-0 fw-semibold"><a href="doctor-details.html">Dr. Sarah Johnson</a></h6>
                                        <div class="action-item">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="edit-doctor.html" class="dropdown-item d-flex align-items-center">Edit</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <span class="d-block mb-2 fs-13">Surgeon</span>
                                    <p class="mb-2 fs-13">Available : Mon, 09 Feb 2025</p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6 class="text-primary fs-14 mb-0"><span class="text-muted fs-13 fw-normal">Starts From : </span> $500</h6>
                                        <a href="appointment-calendar.html" class="avatar avatar-xs border text-muted fs-14"><i class="ti ti-calendar-cog"></i></a>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-4 col-md-6">
                        <div class="card">
                            <div class="card-body d-flex align-items-center flex-sm-nowrap flex-wrap row-gap-3">
                                <div class="me-3 doctor-profile-img"><a href="doctor-details.html"><img src="assets/img/doctors/doctor-12.jpg" class="rounded" alt=""></a></div>
                                <div class="flex-fill">
                                    <div class="d-flex align-items-center justify-content-between mb-1">
                                        <h6 class="mb-0 fw-semibold"><a href="doctor-details.html">Dr. Adrian White</a></h6>
                                        <div class="action-item">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="edit-doctor.html" class="dropdown-item d-flex align-items-center">Edit</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <span class="d-block mb-2 fs-13">Practitioner</span>
                                    <p class="mb-2 fs-13">Available : Sat, 25 Jan 2025</p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6 class="text-primary fs-14 mb-0"><span class="text-muted fs-13 fw-normal">Starts From : </span> $200</h6>
                                        <a href="appointment-calendar.html" class="avatar avatar-xs border text-muted fs-14"><i class="ti ti-calendar-cog"></i></a>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-4 col-md-6">
                        <div class="card">
                            <div class="card-body d-flex align-items-center flex-sm-nowrap flex-wrap row-gap-3">
                                <div class="me-3 doctor-profile-img"><a href="doctor-details.html"><img src="assets/img/doctors/doctor-13.jpg" class="rounded" alt=""></a></div>
                                <div class="flex-fill">
                                    <div class="d-flex align-items-center justify-content-between mb-1">
                                        <h6 class="mb-0 fw-semibold"><a href="doctor-details.html">Dr. Ken Clark</a></h6>
                                        <div class="action-item">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="edit-doctor.html" class="dropdown-item d-flex align-items-center">Edit</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <span class="d-block mb-2 fs-13">Dermatologist</span>
                                    <p class="mb-2 fs-13">Available : Wed, 12 Feb 2025</p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6 class="text-primary fs-14 mb-0"><span class="text-muted fs-13 fw-normal">Starts From : </span> $350</h6>
                                        <a href="appointment-calendar.html" class="avatar avatar-xs border text-muted fs-14"><i class="ti ti-calendar-cog"></i></a>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-4 col-md-6">
                        <div class="card">
                            <div class="card-body d-flex align-items-center flex-sm-nowrap flex-wrap row-gap-3">
                                <div class="me-3 doctor-profile-img"><a href="doctor-details.html"><img src="assets/img/doctors/doctor-14.jpg" class="rounded" alt=""></a></div>
                                <div class="flex-fill">
                                    <div class="d-flex align-items-center justify-content-between mb-1">
                                        <h6 class="mb-0 fw-semibold"><a href="doctor-details.html">Dr. Oliver King</a></h6>
                                        <div class="action-item">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="edit-doctor.html" class="dropdown-item d-flex align-items-center">Edit</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <span class="d-block mb-2 fs-13">Orthopedist</span>
                                    <p class="mb-2 fs-13">Available : Fri, 14 Feb 2025</p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6 class="text-primary fs-14 mb-0"><span class="text-muted fs-13 fw-normal">Starts From : </span> $600</h6>
                                        <a href="appointment-calendar.html" class="avatar avatar-xs border text-muted fs-14"><i class="ti ti-calendar-cog"></i></a>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-4 col-md-6">
                        <div class="card">
                            <div class="card-body d-flex align-items-center flex-sm-nowrap flex-wrap row-gap-3">
                                <div class="me-3 doctor-profile-img"><a href="doctor-details.html"><img src="assets/img/doctors/doctor-15.jpg" class="rounded" alt=""></a></div>
                                <div class="flex-fill">
                                    <div class="d-flex align-items-center justify-content-between mb-1">
                                        <h6 class="mb-0 fw-semibold"><a href="doctor-details.html">Dr. Avan Davis</a></h6>
                                        <div class="action-item">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="edit-doctor.html" class="dropdown-item d-flex align-items-center">Edit</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <span class="d-block mb-2 fs-13">Endocrinologist</span>
                                    <p class="mb-2 fs-13">Available : Tue, 17 Feb 2025</p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6 class="text-primary fs-14 mb-0"><span class="text-muted fs-13 fw-normal">Starts From : </span> $375</h6>
                                        <a href="appointment-calendar.html" class="avatar avatar-xs border text-muted fs-14"><i class="ti ti-calendar-cog"></i></a>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                </div>

                <div class="text-center">
                    <a href="doctors.html#" class="btn btn-white bg-white text-dark fs-13">Load More<span class="spinner-border spinner-border-sm ms-1"></span></a>
                </div>

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

        <!-- Start Delete Modal  -->
        <div class="modal fade" id="delete_modal">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content">
                    <div class="modal-body text-center position-relative z-1">
                        <img src="assets/img/bg/delete-modal-bg-01.png" alt="" class="img-fluid position-absolute top-0 start-0 z-n1">
                        <img src="assets/img/bg/delete-modal-bg-02.png" alt="" class="img-fluid position-absolute bottom-0 end-0 z-n1">
                        <div class="mb-3">
                            <span class="avatar avatar-lg bg-danger text-white"><i class="ti ti-trash fs-24"></i></span>
                        </div>
                        <h5 class="fw-bold mb-1">Delete Confirmation</h5>
                        <p class="mb-3">Are you sure want to delete?</p>
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light position-relative z-1 me-3" data-bs-dismiss="modal">Cancel</a>
                            <a href="doctors.html" class="btn btn-danger position-relative z-1">Yes, Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Delete Modal  -->

        <!-- Start Delete Modal  -->
        <div class="modal fade" id="success_modal">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content">
                    <div class="modal-body text-center position-relative z-1">
                        <div class="mb-3">
                            <span class="avatar avatar-lg bg-success text-white"><i class="ti ti-check fs-24"></i></span>
                        </div>
                        <h5 class="fw-bold mb-1">Added Successfully</h5>
                        <p class="mb-3">Doctor has been added to your List</p>
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light position-relative z-1 me-3" data-bs-dismiss="modal">Cancel</a>
                            <a href="doctor-details.html" class="btn btn-primary position-relative z-1">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Delete Modal  -->

    </div>
    <!-- End Wrapper -->

  @include('admin.js')


</body>

</html>
