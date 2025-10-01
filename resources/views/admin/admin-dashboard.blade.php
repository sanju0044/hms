
<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Dreams Technologies">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png">

    <!-- Apple Icon -->
    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Datetimepicker CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

    <!-- Daterangepikcer CSS -->
	<link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker.css">

    <!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <!-- Tabler Icon CSS -->
    <link rel="stylesheet" href="assets/plugins/tabler-icons/tabler-icons.min.css">

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
        @include('admin.sidebar')
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
                        <h4 class="fw-bold mb-0">Admin Dashboard </h4>
                    </div>
				</div>
				<!-- End Page Header -->

                <!-- start row -->
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="position-relative border card rounded-2 shadow-sm">
                            <img src="assets/img/bg/bg-01.svg" alt="img" class="position-absolute start-0 top-0">
                           <div class="card-body">
                               <div class="d-flex align-items-center mb-2 justify-content-between">
                                  <span class="avatar bg-primary rounded-circle"><i class="ti ti-calendar-heart fs-24"></i></span>
                                  <div class="text-end">
                                    <span class="badge px-2 py-1 fs-12 fw-medium d-inline-flex mb-1 bg-success">+95%</span>
                                    <p class="fs-13 mb-0">in last 7 Days </p>
                                  </div>
                               </div>
                               <div class="d-flex align-items-center justify-content-between">
                                   <div>
                                     <p class="mb-1">Doctors</p>
                                     <h3 class="fw-bold mb-0">247</h3>
                                   </div>
                                   <div>
                                     <div id="s-col" class="chart-set"></div>
                                   </div>
                               </div>
                           </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-xl-3 col-md-6">
                        <div class="position-relative border card rounded-2 shadow-sm">
                            <img src="assets/img/bg/bg-02.svg" alt="img" class="position-absolute start-0 top-0">
                           <div class="card-body">
                               <div class="d-flex align-items-center mb-2 justify-content-between">
                                  <span class="avatar bg-danger rounded-circle"><i class="ti ti-calendar-heart fs-24"></i></span>
                                  <div class="text-end">
                                    <span class="badge px-2 py-1 fs-12 fw-medium d-inline-flex mb-1 bg-success">+25%</span>
                                    <p class="fs-13 mb-0">in last 7 Days </p>
                                  </div>
                               </div>
                               <div class="d-flex align-items-center justify-content-between">
                                   <div>
                                     <p class="mb-1">Patients</p>
                                     <h3 class="fw-bold mb-0">4178</h3>
                                   </div>
                                   <div>
                                     <div id="s-col-2" class="chart-set"></div>
                                   </div>
                               </div>
                           </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-xl-3 col-md-6">
                        <div class="position-relative border card rounded-2 shadow-sm">
                            <img src="assets/img/bg/bg-03.svg" alt="img" class="position-absolute start-0 top-0">
                           <div class="card-body">
                               <div class="d-flex align-items-center mb-2 justify-content-between">
                                  <span class="avatar bg-info rounded-circle"><i class="ti ti-calendar-heart fs-24"></i></span>
                                  <div class="text-end">
                                    <span class="badge px-2 py-1 fs-12 fw-medium d-inline-flex mb-1 bg-danger">-15%</span>
                                    <p class="fs-13 mb-0">in last 7 Days </p>
                                  </div>
                               </div>
                               <div class="d-flex align-items-center justify-content-between">
                                   <div>
                                     <p class="mb-1">Appointment</p>
                                     <h3 class="fw-bold mb-0">12178</h3>
                                   </div>
                                   <div>
                                     <div id="s-col-3" class="chart-set"></div>
                                   </div>
                               </div>
                           </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-xl-3 col-md-6">
                        <div class="position-relative border card rounded-2 shadow-sm">
                            <img src="assets/img/bg/bg-04.svg" alt="img" class="position-absolute start-0 top-0">
                           <div class="card-body">
                               <div class="d-flex align-items-center mb-2 justify-content-between">
                                  <span class="avatar bg-success rounded-circle"><i class="ti ti-calendar-heart fs-24"></i></span>
                                  <div class="text-end">
                                    <span class="badge px-2 py-1 fs-12 fw-medium d-inline-flex mb-1 bg-success">+25%</span>
                                    <p class="fs-13 mb-0">in last 7 Days </p>
                                  </div>
                               </div>
                               <div class="d-flex align-items-center justify-content-between overflow-hidden">
                                   <div>
                                     <p class="mb-1">Revenue</p>
                                     <h3 class="fw-bold mb-0 text-truncate">₹ 55,1240</h3>
                                   </div>
                                   <div>
                                     <div id="s-col-4" class="chart-set"></div>
                                   </div>
                               </div>
                           </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

                <!-- row start -->
                <div class="row">
                    <!-- col start -->
                    <div class="col-xl-8">

                        <!-- card start -->
                        <div class="card shadow-sm flex-fill w-100">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="fw-bold mb-0">Appointment Statistics</h5>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="btn btn-sm px-2 border shadow-sm btn-outline-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                        Monthly <i class="ti ti-chevron-down ms-1"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="index.html#">Monthly</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="index.html#">Weekly</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="index.html#">Yearly</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body pb-0">
                                <div class="row row-gap-3 mb-2">
                                    <div class="col-md-3 col-sm-6">
                                        <div class="bg-light border p-2 text-center rounded-2">
                                            <p class="mb-1 text-body text-truncate"><i class="ti ti-point-filled me-1 text-primary"></i>All Appointments</p>
                                            <h5 class="fw-bold mb-0">6314</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="bg-light border p-2 text-center rounded-2">
                                            <p class="mb-1 text-body"><i class="ti ti-point-filled me-1 text-danger"></i>Cancelled</p>
                                            <h5 class="fw-bold mb-0">456</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="bg-light border p-2 text-center rounded-2">
                                            <p class="mb-1 text-body"><i class="ti ti-point-filled me-1 text-warning"></i>Reschedule</p>
                                            <h5 class="fw-bold mb-0">745</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="bg-light border p-2 text-center rounded-2">
                                            <p class="mb-1 text-body"><i class="ti ti-point-filled me-1 text-success"></i>Completed</p>
                                            <h5 class="fw-bold mb-0">4578</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="chart-set" id="s-col-19"></div>
                            </div>
                        </div>
                        <!-- card end -->

                        <!-- card start -->
                        <div class="card shadow-sm flex-fill w-100">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="fw-bold mb-0">Popular Doctors</h5>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="btn btn-sm px-2 border shadow-sm btn-outline-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                        Weekly <i class="ti ti-chevron-down ms-1"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="index.html#">Monthly</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="index.html#">Weekly</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="index.html#">Yearly</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row row-gap-3">
                                    <div class="col-md-4">
                                        <div class="border shadow-sm p-3 rounded-2">
                                            <div class="d-flex align-items-center mb-3">
                                                <a href="doctor-details.html" class="avatar me-2 flex-shrink-0 position-relative">
                                                    <span class="online text-success position-absolute end-0 bottom-0 pe-1"><i class="ti ti-circle-filled d-flex bg-white fs-6 rounded-circle border border-1 border-white"></i></span>
                                                    <img src="assets/img/doctors/doctor-01.jpg" alt="img" class="rounded-circle">
                                                </a>
                                                <div>
                                                  <h6 class="fs-14 mb-1 text-truncate"><a href="doctor-details.html" class="fw-semibold">Dr. Alex Morgan</a></h6>
                                                  <p class="mb-0 fs-13">Cardiologist</p>
                                                </div>
                                            </div>
                                            <p class="mb-0"><span class="text-dark fw-semibold">258</span> Bookings</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="border shadow-sm p-3 rounded-2">
                                            <div class="d-flex align-items-center mb-3">
                                                <a href="doctor-details.html" class="avatar me-2 flex-shrink-0 position-relative">
                                                    <span class="online text-success position-absolute end-0 bottom-0 pe-1"><i class="ti ti-circle-filled d-flex bg-white fs-6 rounded-circle border border-1 border-white"></i></span>
                                                    <img src="assets/img/doctors/doctor-03.jpg" alt="img" class="rounded-circle">
                                                </a>
                                                <div>
                                                  <h6 class="fs-14 mb-1 text-truncate"><a href="doctor-details.html" class="fw-semibold">Dr. Emily Carter</a></h6>
                                                  <p class="mb-0 fs-13">Pediatrician</p>
                                                </div>
                                            </div>
                                            <p class="mb-0"><span class="text-dark fw-semibold">125</span> Bookings</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="border shadow-sm p-3 rounded-2">
                                            <div class="d-flex align-items-center mb-3">
                                                <a href="doctor-details.html" class="avatar me-2 flex-shrink-0 position-relative">
                                                    <img src="assets/img/doctors/doctor-04.jpg" alt="img" class="rounded-circle">
                                                </a>
                                                <div>
                                                  <h6 class="fs-14 mb-1 text-truncate"><a href="doctor-details.html" class="fw-semibold">Dr. David Lee</a></h6>
                                                  <p class="mb-0 fs-13">Gynecologist</p>
                                                </div>
                                            </div>
                                            <p class="mb-0"><span class="text-dark fw-semibold">115</span> Bookings</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card end -->

                    </div>
                     <!-- col end -->

                     <!-- col start -->
                    <div class="col-xl-4">
                        <div class="card shadow-sm">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="fw-bold mb-0 text-truncate">Appointments</h5>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="btn btn-sm px-2 border shadow-sm btn-outline-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                        All Type <i class="ti ti-chevron-down ms-1"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0);">In Person</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0);">Online</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="datepic mb-1"></div>
                                <div class="mb-3 bg-light p-3 rounded-2 d-flex align-items-center justify-content-between">
                                    <div>
                                        <h6 class="fs-14 fw-semibold mb-1">General Visit</h6>
                                        <p class="mb-0 text-body text-truncate"><i class="ti ti-calendar-time me-1 text-body"></i> Wed, 05 Apr 2025, 06:30 PM  </p>
                                    </div>
                                    <div class="avatar-list-stacked avatar-group-sm event flex-shrink-0">
                                        <span class="avatar avatar-lg rounded-circle border-0"><img src="assets/img/profiles/avatar-26.jpg" class="img-fluid rounded-circle border border-white" alt="Img"></span>
                                        <span class="avatar avatar-lg rounded-circle border-0"><img src="assets/img/doctors/doctor-05.jpg" class="img-fluid rounded-circle border border-white" alt="Img"></span>
                                    </div>
                                </div>
                                <div class="mb-3 bg-soft-danger p-3 rounded-2 d-flex align-items-center justify-content-between">
                                    <div>
                                        <h6 class="fs-14 fw-semibold mb-1">General Visit</h6>
                                        <p class="mb-0 text-truncate"><i class="ti ti-calendar-time me-1 text-dark"></i> Wed, 05 Apr 2025, 04:10 PM  </p>
                                    </div>
                                    <div class="avatar-list-stacked avatar-group-sm event flex-shrink-0">
                                        <span class="avatar avatar-lg rounded-circle border-0"><img src="assets/img/users/user-17.jpg" class="img-fluid rounded-circle border border-white" alt="Img"></span>
                                        <span class="avatar avatar-lg rounded-circle border-0"><img src="assets/img/doctors/doctor-10.jpg" class="img-fluid rounded-circle border border-white" alt="Img"></span>
                                    </div>
                                </div>
                                <div class="mb-3 bg-soft-info p-3 rounded-2 d-flex align-items-center justify-content-between">
                                    <div>
                                        <h6 class="fs-14 fw-semibold mb-1">General Visit</h6>
                                        <p class="mb-0 text-truncate"><i class="ti ti-calendar-time me-1 text-dark"></i> Wed, 05 Apr 2025, 10:00 AM  </p>
                                    </div>
                                    <div class="avatar-list-stacked avatar-group-sm event flex-shrink-0">
                                        <span class="avatar avatar-lg rounded-circle border-0"><img src="assets/img/users/user-16.jpg" class="img-fluid rounded-circle border border-white" alt="Img"></span>
                                        <span class="avatar avatar-lg rounded-circle border-0"><img src="assets/img/doctors/doctor-09.jpg" class="img-fluid rounded-circle border border-white" alt="Img"></span>
                                    </div>
                                </div>
                                <a href="appointments.html" class="btn btn-light w-100">View All Appointments</a>
                            </div>
                        </div>
                    </div>
                     <!-- col end -->
                </div>
                <!-- end row -->

                <!-- start row -->
                <div class="row">
                    <!-- col start -->
                    <div class="col-xl-4 d-flex">
                       <div class="card shadow-sm flex-fill w-100">
                          <div class="card-header d-flex align-items-center justify-content-between">
                             <h5 class="fw-bold mb-0">Top 3 Departments</h5>
                              <div class="dropdown">
                                  <a href="javascript:void(0);" class="btn btn-sm px-2 border shadow-sm btn-outline-white d-inline-flex align-items-center"  data-bs-toggle="dropdown">
                                      Weekly <i class="ti ti-chevron-down ms-1"></i>
                                  </a>
                                  <ul class="dropdown-menu">
                                      <li>
                                          <a class="dropdown-item" href="index.html#">Monthly</a>
                                      </li>
                                      <li>
                                          <a class="dropdown-item" href="index.html#">Weekly</a>
                                      </li>
                                      <li>
                                          <a class="dropdown-item" href="index.html#">Yearly</a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                          <div class="card-body">
                              <div id="circle-chart" class="chart-set"></div>
                              <div class="d-flex align-items-center flex-wrap justify-content-center gap-2 mt-3">
                                  <p class="d-flex align-items-center mb-0 fs-13"><i class="ti ti-circle-filled text-info fs-10 me-1"></i><span class="text-dark fw-semibold me-1">214</span> Cardiology</p>
                                  <p class="d-flex align-items-center mb-0 fs-13"><i class="ti ti-circle-filled text-purple fs-10 me-1"></i><span class="text-dark fw-semibold me-1">150</span> Dental</p>
                                  <p class="d-flex align-items-center mb-0 fs-13"><i class="ti ti-circle-filled text-primary fs-10 me-1"></i><span class="text-dark fw-semibold me-1">121</span> Neurolgy</p>
                              </div>
                          </div>
                       </div>
                    </div>
                    <!-- col end -->

                    <!-- col start -->
                    <div class="col-xl-4 col-lg-6 d-flex">
                      <div class="card shadow-sm flex-fill w-100">
                          <div class="card-header d-flex align-items-center justify-content-between">
                              <h5 class="fw-bold mb-0">Doctors Schedule</h5>
                              <a href="doctor-schedule.html" class="btn fw-normal btn-outline-white">View All</a>
                          </div>
                          <div class="card-body">
                              <div class="row g-2 mb-4">
                                  <div class="col d-flex border-end">
                                      <div class="text-center flex-fill">
                                          <p class="mb-1">Available</p>
                                          <h3 class="fw-bold mb-0">48</h3>
                                      </div>
                                  </div>
                                  <div class="col d-flex border-end">
                                      <div class="text-center flex-fill">
                                          <p class="mb-1">Unavailable</p>
                                          <h3 class="fw-bold mb-0">28</h3>
                                      </div>
                                  </div>
                                  <div class="col d-flex">
                                      <div class="text-center flex-fill">
                                          <p class="mb-1">Leave</p>
                                          <h3 class="fw-bold mb-0">12</h3>
                                      </div>
                                  </div>
                              </div>
                              <div class="overflow-auto">
                                  <div class="d-flex justify-content-between align-items-center mb-3">
                                      <div class="d-flex align-items-center flex-shrink-0">
                                          <a href="doctor-details.html" class="avatar flex-shrink-0">
                                              <img src="assets/img/doctors/doctor-02.jpg" class="rounded-circle" alt="img">
                                          </a>
                                          <div class="ms-2 flex-shrink-0">
                                              <div>
                                                  <h6 class="fw-semibold fs-14 text-truncate mb-1"><a href="doctor-details.html">Dr. Sarah Johnson</a></h6>
                                                  <p class="fs-13">Orthopedic Surgeon</p>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="flex-shrink-0 ms-2">
                                        <a href="index.html#" class="btn btn-primary btn-sm py-1 flex-shrink-0">Book Now</a>
                                      </div>
                                  </div>
                                  <div class="d-flex justify-content-between align-items-center mb-3">
                                      <div class="d-flex align-items-center flex-shrink-0">
                                          <a href="doctor-details.html" class="avatar flex-shrink-0">
                                              <img src="assets/img/doctors/doctor-03.jpg" class="rounded-circle" alt="img">
                                          </a>
                                          <div class="ms-2 flex-shrink-0">
                                              <div>
                                                  <h6 class="fw-semibold fs-14 text-truncate mb-1"><a href="doctor-details.html">Dr. Emily Carter</a></h6>
                                                  <p class="fs-13">Pediatrician</p>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="flex-shrink-0 ms-2">
                                        <a href="index.html#" class="btn btn-primary btn-sm py-1">Book Now</a>
                                      </div>
                                  </div>
                                  <div class="d-flex justify-content-between align-items-center mb-3">
                                      <div class="d-flex align-items-center flex-shrink-0">
                                          <a href="doctor-details.html" class="avatar flex-shrink-0">
                                              <img src="assets/img/doctors/doctor-04.jpg" class="rounded-circle" alt="img">
                                          </a>
                                          <div class="ms-2 flex-shrink-0">
                                              <div>
                                                  <h6 class="fw-semibold fs-14 text-truncate mb-1"><a href="doctor-details.html">Dr. David Lee</a></h6>
                                                  <p class="fs-13">Gynecologist</p>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="flex-shrink-0 ms-2">
                                        <a href="index.html#" class="btn btn-primary btn-sm py-1">Book Now</a>
                                      </div>
                                  </div>
                                  <div class="d-flex justify-content-between align-items-center mb-0">
                                      <div class="d-flex align-items-center flex-shrink-0">
                                          <a href="doctor-details.html" class="avatar flex-shrink-0">
                                              <img src="assets/img/doctors/doctor-14.jpg" class="rounded-circle" alt="img">
                                          </a>
                                          <div class="ms-2 flex-shrink-0">
                                              <div>
                                                  <h6 class="fw-semibold fs-14 text-truncate mb-1"><a href="doctor-details.html">Dr. Michael Smith</a></h6>
                                                  <p class="fs-13">Cardiologist</p>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="flex-shrink-0 ms-2">
                                        <a href="index.html#" class="btn btn-primary btn-sm py-1">Book Now</a>
                                      </div>
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
                              <h5 class="fw-bold mb-0">Income By Treatment</h5>
                              <div class="dropdown">
                                  <a href="javascript:void(0);" class="btn btn-sm px-2 border shadow-sm btn-outline-white d-inline-flex align-items-center"  data-bs-toggle="dropdown">
                                      Weekly <i class="ti ti-chevron-down ms-1"></i>
                                  </a>
                                  <ul class="dropdown-menu">
                                      <li>
                                          <a class="dropdown-item" href="index.html#">Monthly</a>
                                      </li>
                                      <li>
                                          <a class="dropdown-item" href="index.html#">Weekly</a>
                                      </li>
                                      <li>
                                          <a class="dropdown-item" href="index.html#">Yearly</a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                          <div class="card-body">
                              <div class="d-flex align-items-center justify-content-between mb-3">
                                  <div>
                                      <p class="fw-semibold mb-1 text-dark">Cardiology</p>
                                      <p class="mb-0">4,556 Apointments</p>
                                  </div>
                                  <h6 class="fw-bold mb-0">₹5,985</h6>
                              </div>
                              <div class="d-flex align-items-center justify-content-between mb-3">
                                  <div>
                                      <p class="fw-semibold mb-1 text-dark">Radiology</p>
                                      <p class="mb-0">4,125 Apointments</p>
                                  </div>
                                  <h6 class="fw-bold mb-0">₹5,194</h6>
                              </div>
                              <div class="d-flex align-items-center justify-content-between mb-3">
                                  <div>
                                      <p class="fw-semibold mb-1 text-dark">Dental Surgery</p>
                                      <p class="mb-0">1,796 Apointments</p>
                                  </div>
                                  <h6 class="fw-bold mb-0">₹2,716</h6>
                              </div>
                              <div class="d-flex align-items-center justify-content-between mb-3">
                                  <div>
                                      <p class="fw-semibold mb-1 text-dark">Orthopaedics</p>
                                      <p class="mb-0">3,827 Apointments</p>
                                  </div>
                                  <h6 class="fw-bold mb-0">₹4,682</h6>
                              </div>
                              <div class="d-flex align-items-center justify-content-between mb-0">
                                  <div>
                                      <p class="fw-semibold mb-1 text-dark">General Medicine</p>
                                      <p class="mb-0">9,894 Apointments</p>
                                  </div>
                                  <h6 class="fw-bold mb-0">₹9,450</h6>
                              </div>
                          </div>
                      </div>
                    </div>
                    <!-- col end -->
                </div>
                <!-- end row -->

                <!-- row start -->
                <div class="row">
                    <div class="col-12 d-flex">
                        <div class="card shadow-sm flex-fill w-100">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="fw-bold mb-0">All Appointments</h5>
                                <a href="appointments.html" class="btn fw-normal btn-outline-white">View All</a>
                            </div>
                            <div class="card-body">
                                <!-- Table start -->
                                <div class="table-responsive table-nowrap">
                                    <table class="table border">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Doctor</th>
                                                <th>Patient</th>
                                                <th>Date & Time</th>
                                                <th>Mode</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="doctor-details.html" class="avatar me-2">
                                                            <img src="assets/img/doctors/doctor-06.jpg" alt="img" class="rounded-circle">
                                                        </a>
                                                        <div>
                                                          <h6 class="fs-14 mb-1"><a href="doctor-details.html" class="fw-semibold">Dr. John Smith</a></h6>
                                                          <p class="mb-0 fs-13">Neurosurgeon</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="patient-details.html" class="avatar me-2">
                                                            <img src="assets/img/profiles/avatar-02.jpg" alt="img" class="rounded-circle">
                                                        </a>
                                                        <div>
                                                          <h6 class="fs-14 mb-1"><a href="patient-details.html" class="fw-medium">Jesus Adams</a></h6>
                                                          <p class="mb-0 fs-13">+1 41254 45214</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>28 May 2025 - 11:15 AM</td>
                                                <td>Online</td>
                                                <td><span class="badge fs-13 py-1 badge-soft-success border border-success rounded text-success fw-medium">Confirmed</span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="doctor-details.html" class="avatar me-2">
                                                            <img src="assets/img/doctors/doctor-07.jpg" alt="img" class="rounded-circle">
                                                        </a>
                                                        <div>
                                                          <h6 class="fs-14 mb-1"><a href="doctor-details.html" class="fw-semibold">Dr. Lisa White</a></h6>
                                                          <p class="mb-0 fs-13">Oncologist</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="patient-details.html" class="avatar me-2">
                                                            <img src="assets/img/profiles/avatar-27.jpg" alt="img" class="rounded-circle">
                                                        </a>
                                                        <div>
                                                          <h6 class="fs-14 mb-1"><a href="patient-details.html" class="fw-medium">Ezra Belcher</a></h6>
                                                          <p class="mb-0 fs-13">+1 65895 41247</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>29 May 2025 - 11:30 AM</td>
                                                <td>In-Person</td>
                                                <td><span class="badge fs-13 py-1 badge-soft-danger border border-danger rounded fw-medium">Cancelled</span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="doctor-details.html" class="avatar me-2">
                                                            <img src="assets/img/doctors/doctor-10.jpg" alt="img" class="rounded-circle">
                                                        </a>
                                                        <div>
                                                          <h6 class="fs-14 mb-1"><a href="doctor-details.html" class="fw-semibold">Dr. Patricia Brown</a></h6>
                                                          <p class="mb-0 fs-13">Pulmonologist</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="patient-details.html" class="avatar me-2">
                                                            <img src="assets/img/profiles/avatar-20.jpg" alt="img" class="rounded-circle">
                                                        </a>
                                                        <div>
                                                          <h6 class="fs-14 mb-1"><a href="patient-details.html" class="fw-medium">Glen Lentz</a></h6>
                                                          <p class="mb-0 fs-13">+1 62458 45845</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>30 May 2025 - 09:30 AM </td>
                                                <td>Online</td>
                                                <td><span class="badge fs-13 py-1 badge-soft-success border border-success rounded text-success fw-medium">Confirmed</span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="doctor-details.html" class="avatar me-2">
                                                            <img src="assets/img/doctors/doctor-11.jpg" alt="img" class="rounded-circle">
                                                        </a>
                                                        <div>
                                                          <h6 class="fs-14 mb-1"><a href="doctor-details.html" class="fw-semibold">Dr. Rachel Green</a></h6>
                                                          <p class="mb-0 fs-13">Urologist</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="patient-details.html" class="avatar me-2">
                                                            <img src="assets/img/profiles/avatar-06.jpg" alt="img" class="rounded-circle">
                                                        </a>
                                                        <div>
                                                          <h6 class="fs-14 mb-1"><a href="patient-details.html" class="fw-medium">Bernard Griffith</a></h6>
                                                          <p class="mb-0 fs-13">+1 61422 45214</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>30 May 2025 - 10:00 AM</td>
                                                <td>Online</td>
                                                <td><span class="badge fs-13 py-1 badge-soft-secondary border border-secondary rounded fw-medium">Checked Out</span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="doctor-details.html" class="avatar me-2">
                                                            <img src="assets/img/doctors/doctor-14.jpg" alt="img" class="rounded-circle">
                                                        </a>
                                                        <div>
                                                          <h6 class="fs-14 mb-1"><a href="doctor-details.html" class="fw-semibold">Dr. Michael Smith</a></h6>
                                                          <p class="mb-0 fs-13">Cardiologist</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="patient-details.html" class="avatar me-2">
                                                            <img src="assets/img/profiles/avatar-25.jpg" alt="img" class="rounded-circle">
                                                        </a>
                                                        <div>
                                                          <h6 class="fs-14 mb-1"><a href="patient-details.html" class="fw-medium">John Elsass</a></h6>
                                                          <p class="mb-0 fs-13">+1 47851 26371</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>30 May 2025 - 11:00 AM</td>
                                                <td>Online</td>
                                                <td><span class="badge fs-13 py-1 badge-soft-info border border-info rounded fw-medium">Schedule</span></td>
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
	<script src="assets/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>

    <!-- Main JS -->
    <script src="assets/js/script.js" type="text/javascript"></script>

    <script defer="" src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon="{&quot;rayId&quot;:&quot;986a8acfa8067aa2&quot;,&quot;serverTiming&quot;:{&quot;name&quot;:{&quot;cfExtPri&quot;:true,&quot;cfEdge&quot;:true,&quot;cfOrigin&quot;:true,&quot;cfL4&quot;:true,&quot;cfSpeedBrain&quot;:true,&quot;cfCacheStatus&quot;:true}},&quot;version&quot;:&quot;2025.9.1&quot;,&quot;token&quot;:&quot;3ca157e612a14eccbb30cf6db6691c29&quot;}" crossorigin="anonymous"></script>
</html>
