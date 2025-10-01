
<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Staff - Medical & Hospital - Bootstrap 5 Admin Template</title>
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

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

    <!-- Datatable CSS -->
    <link rel="stylesheet" href="assets/css/dataTables.bootstrap5.min.css">

    <!-- Simplebar CSS -->
    <link rel="stylesheet" href="assets/plugins/simplebar/simplebar.min.css">

	<!-- Rangeslider CSS -->
	<link rel="stylesheet" href="assets/plugins/ion-rangeslider/css/ion.rangeSlider.css">
	<link rel="stylesheet" href="assets/plugins/ion-rangeslider/css/ion.rangeSlider.min.css">

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
            <div class="content"  id="profilePage">

                <!-- Start Page Header -->
                <div class="d-flex align-items-sm-center flex-sm-row flex-column gap-2 mb-3 pb-3 border-bottom">
                    <div class="flex-grow-1">
                        <h4 class="fw-bold mb-0"> Staff<span class="badge badge-soft-primary border border-primary fs-13 fw-medium ms-2">Total Staffs : 565</span></h4>
                    </div>
                    <div class="text-end d-flex">
                        <!-- dropdown-->
                        <div class="dropdown me-1">
							<a href="javascript:void(0);" class="btn btn-md fs-14 fw-normal border bg-white rounded text-dark d-inline-flex align-items-center"  data-bs-toggle="dropdown">
								Export<i class="ti ti-chevron-down ms-2"></i>
							</a>
							<ul class="dropdown-menu p-2">
								<li>
									<a class="dropdown-item" href="staffs.html#">Download as PDF</a>
								</li>
								<li>
									<a class="dropdown-item" href="staffs.html#">Download as Excel</a>
								</li>
							</ul>
						</div>
                        <a href="javascript:void(0);" class="btn btn-primary ms-2 fs-13 btn-md" data-bs-toggle="modal" data-bs-target="#add_staff"><i class="ti ti-plus me-1"></i>Add Staff</a>
                    </div>
				</div>
				<!-- End Page Header -->

                <div class=" d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                    <div class="search-set mb-3">
                        <div class="d-flex align-items-center flex-wrap gap-2">
                            <div class="table-search d-flex align-items-center mb-0">
                                <div class="search-input">
                                    <a href="javascript:void(0);" class="btn-searchset"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex table-dropdown mb-3 pb-1 right-content align-items-center flex-wrap row-gap-3">
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
                                <form action="staffs.html#">
                                    <div class="filter-body pb-0">
                                        <div class="mb-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <label class="form-label">Staff</label>
                                                <a href="javascript:void(0);" class="link-primary mb-1">Reset</a>
                                            </div>
                                            <select class="select2" multiple="multiple">
                                                <option value="m-1" selected>James Adair</option>
                                                <option value="m-2">Adam Milne</option>
                                                <option value="m-3">Richard Clark</option>
                                                <option value="m-4">Robert Reid</option>
                                                <option value="m-5">Dottie Jeny</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <label class="form-label">Designation</label>
                                                <a href="javascript:void(0);" class="link-primary mb-1">Reset</a>
                                            </div>
                                            <select class="select2" multiple="multiple">
                                                <option value="m-1" selected>Admin Officer</option>
                                                <option value="m-2">Front Office Executive</option>
                                                <option value="m-3">Medical Records Executive</option>
                                                <option value="m-4">Billing Executive</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <label class="form-label">Role</label>
                                                <a href="javascript:void(0);" class="link-primary mb-1">Reset</a>
                                            </div>
                                            <select class="select2" multiple="multiple">
                                                <option value="m-1" selected>Admin</option>
                                                <option value="m-2">Reception</option>
                                                <option value="m-3">Nurses</option>
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
                                            <div class="dropdown">
                                                <a href="javascript:void(0);" class="dropdown-toggle btn btn-lg d-flex align-items-center justify-content-start fs-13 fw-normal rounded p-2 border" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">
                                                    Select
                                                </a>
                                                <div class="dropdown-menu shadow-lg w-100 dropdown-info">							
                                                    <div class="filter-range">
                                                        <input type="text" id="range_03">
                                                        <p>Range : <span class="text-gray-9">Range : $200 - $5695</span></p>
                                                    </div>
                                                </div>
                                            </div>
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

                <div class="table-responsive">
                    <table class="table table-nowrap datatable">
                        <thead class="thead-light">
                            <tr>
                                <th>Employee Code</th>
                                <th>Staff</th>
                                <th>Designation</th>
                                <th>Role</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>EMP0001</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar me-2" data-bs-toggle="modal" data-bs-target="#view_staff">
                                            <img src="assets/img/users/user-08.jpg" alt="Doctor" class="rounded-circle">
                                        </a>
                                        <div>
                                            <h6 class="mb-1 fs-14 fw-semibold"><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#view_staff">James Adair</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>Admin Officer</td>
                                <td>Admin</td>
                                <td>+1 41245 54132</td>
                                <td><a href="../../cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b8d2d9d5ddcbf8dfd5d9d1d496dbd7d5">[email&#160;protected]</a></td>
                                <td><span class="badge badge-soft-success border border-success">Available</span></td>
                                <td>
                                    <div class="action-item">
                                        <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu p-2">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#view_staff">View Details</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_staff">Edit</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_staff">Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>EMP0002</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar me-2" data-bs-toggle="modal" data-bs-target="#view_staff">
                                            <img src="assets/img/users/user-03.jpg" alt="Doctor" class="rounded-circle">
                                        </a>
                                        <div>
                                            <h6 class="mb-1 fs-14 fw-semibold"><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#view_staff">Adam Milne</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>Front Officer </td>
                                <td>Reception</td>
                                <td>+1 54554 54789</td>
                                <td><a href="../../cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="771613161a37101a161e1b5914181a">[email&#160;protected]</a></td>
                                <td><span class="badge badge-soft-success border border-success">Available</span></td>
                                <td>
                                    <div class="action-item">
                                        <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu p-2">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#view_staff">View Details</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_staff">Edit</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_staff">Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>EMP0003</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar me-2" data-bs-toggle="modal" data-bs-target="#view_staff">
                                            <img src="assets/img/users/user-04.jpg" alt="Doctor" class="rounded-circle">
                                        </a>
                                        <div>
                                            <h6 class="mb-1 fs-14 fw-semibold"><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#view_staff">Richard Clark</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>Medical Recorder</td>
                                <td>Admin</td>
                                <td>+1  43554 54985</td>
                                <td><a href="../../cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0e7c676d666f7c6a4e69636f6762206d6163">[email&#160;protected]</a></td>
                                <td><span class="badge badge-soft-danger border border-danger">Unavailable</span></td>
                                <td>
                                    <div class="action-item">
                                        <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu p-2">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#view_staff">View Details</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_staff">Edit</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_staff">Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>EMP0004</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar me-2" data-bs-toggle="modal" data-bs-target="#view_staff">
                                            <img src="assets/img/users/user-05.jpg" alt="Doctor" class="rounded-circle">
                                        </a>
                                        <div>
                                            <h6 class="mb-1 fs-14 fw-semibold"><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#view_staff">Robert Reid</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>Billing Executive</td>
                                <td>Admin</td>
                                <td>+1 47554 54257</td>
                                <td><a href="../../cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b6c4d9d4d3c4c2f6d1dbd7dfda98d5d9db">[email&#160;protected]</a></td>
                                <td><span class="badge badge-soft-success border border-success">Available</span></td>
                                <td>
                                    <div class="action-item">
                                        <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu p-2">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#view_staff">View Details</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_staff">Edit</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_staff">Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>EMP0005</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar me-2" data-bs-toggle="modal" data-bs-target="#view_staff">
                                            <img src="assets/img/users/user-06.jpg" alt="Doctor" class="rounded-circle">
                                        </a>
                                        <div>
                                            <h6 class="mb-1 fs-14 fw-semibold"><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#view_staff">Dottie Jeny</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>Nurse</td>
                                <td>Nurse</td>
                                <td>+1 54114 57526</td>
                                <td><a href="../../cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8befe4ffffe2eecbece6eae2e7a5e8e4e6">[email&#160;protected]</a></td>
                                <td><span class="badge badge-soft-success border border-success">Available</span></td>
                                <td>
                                    <div class="action-item">
                                        <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu p-2">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#view_staff">View Details</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_staff">Edit</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_staff">Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
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

        <!-- Start Add Modal -->
        <div id="view_staff" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="fw-bold modal-title">Staff Details</h5>
                        <button type="button" class="btn-close btn-close-modal custom-btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-x"></i></button>
                    </div>
                    <div class="modal-body">
                        <div class="card bg-light">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="me-2">
                                        <img src="assets/img/users/user-08.jpg" alt="img" class="img-fluid avatar avatar-xxl rounded">
                                    </div>
                                    <div>
                                        <span class="text-primary mb-1">#STF020</span>
                                        <div class="d-flex align-items-center mb-1">
                                            <h5 class="fw-bold mb-0 me-2">James Allaire</h5>
                                            <span class="badge badge-soft-success border border-success fw-medium fs-13">Available</span>
                                        </div>
                                        <p class="text-body">Front Office Executive</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end card -->

                        <ul class="nav nav-tabs nav-bordered mb-3">
                            <li class="nav-item"><a class="nav-link active" href="javascript:void(0);" data-bs-toggle="tab" data-bs-target="#tab1">Basic Info</a></li>
                            <li class="nav-item"><a class="nav-link" href="javascript:void(0);" data-bs-toggle="tab" data-bs-target="#tab2">Salary Info</a></li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active" id="tab1" role="tabpanel" tabindex="0">

                                <!-- start row -->
                                <div class="row row-gap-2">
                                    <div class="col-md-4">
                                        <p class="text-dark fs-13 fw-medium mb-0">Gender</p>
                                        <p class="fs-13">Male</p>
                                    </div><!-- end col -->
                                    <div class="col-md-4">
                                        <p class="text-dark fs-13 fw-medium mb-0">Phone Number</p>
                                        <p class="fs-13">+1 54546 45648</p>
                                    </div><!-- end col -->
                                    <div class="col-md-4">
                                        <p class="text-dark fs-13 fw-medium mb-0">Email</p>
                                        <p class="fs-13"><a href="../../cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0a606b676f794a6f726b677a666f24696567">[email&#160;protected]</a></p>
                                    </div><!-- end col -->
                                    <div class="col-md-4">
                                        <p class="text-dark fs-13 fw-medium mb-0">Date of Joining</p>
                                        <p class="fs-13">12 Dec 2024</p>
                                    </div><!-- end col -->
                                    <div class="col-md-4">
                                        <p class="text-dark fs-13 fw-medium mb-0">Email</p>
                                        <p class="fs-13"><a href="../../cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4228232f273102273a232f322e276c212d2f">[email&#160;protected]</a></p>
                                    </div><!-- end col -->
                                    <div class="col-md-4">
                                        <p class="text-dark fs-13 fw-medium mb-0">Staff Type </p>
                                        <p class="fs-13">Permanent</p>
                                    </div><!-- end col -->
                                    <div class="col-md-12">
                                        <p class="text-dark fs-13 fw-medium mb-0">Addresss</p>
                                        <p class="fs-13">10 Elizabethtown Plaza, Downers Grove, Elizabeth UK07202 </p>
                                    </div><!-- end col -->
                                </div>
                                <!-- end row -->

                            </div>
                            <div class="tab-pane" id="tab2" role="tabpanel" tabindex="0">
                                <!-- Table List -->
                                <div class="table-responsive border bg-white">
                                    <table class="table table-nowrap">
                                        <thead>
                                            <tr>
                                                <th>Credit Date</th>
                                                <th>Amount</th>
                                                <th>Salary for</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>13 Jul 2025</td>
                                                <td>$4800</td>
                                                <td>Jun 2025</td>
                                                <td>
                                                    <div class="action-item">
                                                        <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                                            <i class="ti ti-dots-vertical"></i>
                                                        </a>
                                                        <ul class="dropdown-menu p-2">
                                                            <li>
                                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit">Edit</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete">Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>12 Jun 2025</td>
                                                <td>$4800</td>
                                                <td>May 2025</td>
                                                <td>
                                                    <div class="action-item">
                                                        <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                                            <i class="ti ti-dots-vertical"></i>
                                                        </a>
                                                        <ul class="dropdown-menu p-2">
                                                            <li>
                                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit">Edit</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete">Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>15 May 2025</td>
                                                <td>$4800</td>
                                                <td>Apr 2025</td>
                                                <td>
                                                    <div class="action-item">
                                                        <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                                            <i class="ti ti-dots-vertical"></i>
                                                        </a>
                                                        <ul class="dropdown-menu p-2">
                                                            <li>
                                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit">Edit</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete">Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>14 Apr 2025</td>
                                                <td>$4800</td>
                                                <td>Mar 2025</td>
                                                <td>
                                                    <div class="action-item">
                                                        <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                                            <i class="ti ti-dots-vertical"></i>
                                                        </a>
                                                        <ul class="dropdown-menu p-2">
                                                            <li>
                                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit">Edit</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete">Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>13 Mar 2025</td>
                                                <td>$4800</td>
                                                <td>Feb 2025</td>
                                                <td>
                                                    <div class="action-item">
                                                        <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                                            <i class="ti ti-dots-vertical"></i>
                                                        </a>
                                                        <ul class="dropdown-menu p-2">
                                                            <li>
                                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit">Edit</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete">Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>14 Feb 2025</td>
                                                <td>$4800</td>
                                                <td>Jan 2025</td>
                                                <td>
                                                    <div class="action-item">
                                                        <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                                            <i class="ti ti-dots-vertical"></i>
                                                        </a>
                                                        <ul class="dropdown-menu p-2">
                                                            <li>
                                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit">Edit</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete">Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>12 Jan 2025</td>
                                                <td>$4800</td>
                                                <td>Dec 2024</td>
                                                <td>
                                                    <div class="action-item">
                                                        <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                                            <i class="ti ti-dots-vertical"></i>
                                                        </a>
                                                        <ul class="dropdown-menu p-2">
                                                            <li>
                                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit">Edit</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete">Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /Table List -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- End Add Modal -->

        <!-- Start Add Modal -->
        <div id="add_staff" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="fw-bold modal-title">New Staff</h5>
                        <button type="button" class="btn-close btn-close-modal custom-btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-x"></i></button>
                    </div>
                    <form action="staffs.html">
                        <div class="modal-body">
                            <h6 class="fw-bold mb-3">Staff Information</h6>
                            <div class="mb-3 d-flex align-items-center">
                                <label class="form-label">Profile Image</label>
                                <div class="drag-upload-btn avatar avatar-xxl rounded-circle bg-light text-muted position-relative overflow-hidden z-1 mb-2 ms-4 p-0">
                                    <i class="ti ti-user-plus fs-16"></i>
                                    <input type="file" class="form-control image-sign" multiple="">
                                    <div class="position-absolute bottom-0 end-0 star-0 w-100 h-25 bg-dark d-flex align-items-center justify-content-center z-n1">
                                        <a href="javascript:void(0);" class="text-white d-flex align-items-center justify-content-center">
                                            <i class="ti ti-photo fs-14"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control">
                            </div>

                            <!-- start row -->
                            <div class="row mb-3 border-bottom">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Role<span class="text-danger ms-1">*</span></label>
                                        <select class="select form-control">
                                            <option>Select</option>
                                            <option>Admin</option>
                                            <option>Reception</option>
                                            <option>Nurse</option>
                                            <option>Nurse Practitioner</option>
                                        </select>
                                    </div>
                                </div><!-- end col -->
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Designation<span class="text-danger ms-1">*</span></label>
                                        <select class="select form-control">
                                            <option>Select</option>
                                            <option>Admin Officer</option>
                                            <option>Front Officer </option>
                                            <option>Medical Recorder</option>
                                            <option>Billing Executive</option>
                                        </select>
                                    </div>
                                </div><!-- end col -->
                            </div>
                            <!-- end row -->

                            <h6 class="fw-bold mb-3">Contact Information</h6>

                            <!-- start row -->
                             <div class="row row-gap-2">
                                <div class="col-md-6">
                                    <div class="mb-0">
                                        <label class="form-label">Phone Number<span class="text-danger ms-1">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div><!-- end col -->
                                <div class="col-md-6">
                                    <div class="mb-0">
                                        <label class="form-label">Email<span class="text-danger ms-1">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div><!-- end col -->
                                <div class="col-md-6">
                                    <div class="mb-0">
                                        <label class="form-label">DOB<span class="text-danger ms-1">*</span></label>
                                        <div class="input-icon-end position-relative">  
                                            <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                            <span class="input-icon-addon">
                                                <i class="ti ti-calendar"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end col -->
                                <div class="col-md-6">
                                    <div class="mb-0">
                                        <label class="form-label">Gender<span class="text-danger ms-1">*</span></label>
                                        <select class="select form-control">
                                            <option>Select</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>
                                </div><!-- end col -->
                                <div class="col-md-12">
                                    <div class="mb-0">
                                        <label class="form-label">Blood Group<span class="text-danger ms-1">*</span></label>
                                        <select class="select form-control">
                                            <option>Select</option>
                                            <option>O+</option>
                                            <option>O-</option>
                                            <option>A+</option>
                                            <option>A-</option>
                                            <option>B+</option>
                                            <option>B-</option>
                                        </select>
                                    </div>
                                </div><!-- end col -->
                                <div class="col-md-6">
                                    <div class="mb-0">
                                        <label class="form-label">Address 1</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div><!-- end col -->
                                <div class="col-md-6">
                                    <div class="mb-0">
                                        <label class="form-label">Address 2</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div><!-- end col -->
                                <div class="col-md-6">
                                    <div class="mb-0">
                                        <label class="form-label">Country</label>
                                        <select class="select form-control">
                                            <option>Select</option>
                                            <option>USA</option>
                                            <option>Canada</option>
                                            <option>UK</option>
                                            <option>Germany</option>
                                        </select>
                                    </div>
                                </div><!-- end col -->
                                <div class="col-md-6">
                                    <div class="mb-0">
                                        <label class="form-label">State</label>
                                        <select class="select form-control">
                                            <option>Select</option>
                                            <option>California</option>
                                            <option>Ontario</option>
                                            <option>England</option>
                                            <option>Bavaria</option>
                                       </select>
                                    </div>
                                </div><!-- end col -->
                                <div class="col-md-6">
                                    <div class="mb-0">
                                        <label class="form-label">City</label>
                                        <select class="select form-control">
                                            <option>Select</option>
                                            <option>Los Angeles</option>
                                            <option>Toronto</option>
                                            <option>London</option>
                                            <option>Munich</option>
                                       </select>
                                    </div>
                                </div><!-- end col -->
                                <div class="col-md-6">
                                    <div class="mb-0">
                                        <label class="form-label">Pincode</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div><!-- end col -->
                             </div>
                             <!-- end row -->

                        </div>
                        <div class="modal-footer d-flex align-items-center gap-1">
                            <button type="button" class="btn btn-white border" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Add Staff</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Add Modal -->

        <!-- Start Edit Modal -->
        <div id="edit_staff" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="fw-bold modal-title">Edit Staff</h5>
                        <button type="button" class="btn-close btn-close-modal custom-btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-x"></i></button>
                    </div>
                    <form action="staffs.html">
                        <div class="modal-body">
                            <h6 class="fw-bold mb-3">Staff Information</h6>
                            <div class="mb-3 d-flex align-items-center">
                                <label class="form-label me-3">Profile Image</label>
                                <div class="profile-container">
                                    <img src="assets/img/users/user-08.jpg" alt="Profile">
                                    <div class="overlay-btn">
                                      <a href="javascript:void(0);" class="text-white" id="uploadTrigger">
                                        <i class="ti ti-photo fs-10"></i>
                                      </a>
                                    </div>
                                    <input type="file" id="profileUpload" style="display: none;">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" value="James Adair">
                            </div>

                            <!-- start row -->
                            <div class="row mb-3 border-bottom">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Role<span class="text-danger ms-1">*</span></label>
                                        <select class="select form-control">
                                            <option>Select</option>
                                            <option selected>Admin</option>
                                            <option>Reception</option>
                                            <option>Nurse</option>
                                            <option>Nurse Practitioner</option>
                                        </select>
                                    </div>
                                </div><!-- end col -->
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Designation<span class="text-danger ms-1">*</span></label>
                                        <select class="select form-control">
                                            <option>Select</option>
                                            <option selected>Admin Officer</option>
                                            <option>Front Officer </option>
                                            <option>Medical Recorder</option>
                                            <option>Billing Executive</option>
                                        </select>
                                    </div>
                                </div><!-- end col -->
                            </div>
                            <!-- end row -->

                            <h6 class="fw-bold mb-3">Contact Information</h6>

                            <!-- start row -->
                             <div class="row row-gap-2">
                                <div class="col-md-6">
                                    <div class="mb-0">
                                        <label class="form-label">Phone Number<span class="text-danger ms-1">*</span></label>
                                        <input type="text" class="form-control" value="+1 5258 25874">
                                    </div>
                                </div><!-- end col -->
                                <div class="col-md-6">
                                    <div class="mb-0">
                                        <label class="form-label">Email<span class="text-danger ms-1">*</span></label>
                                        <input type="text" class="form-control" value="james@gmail.com">
                                    </div>
                                </div><!-- end col -->
                                <div class="col-md-6">
                                    <div class="mb-0">
                                        <label class="form-label">DOB<span class="text-danger ms-1">*</span></label>
                                        <div class="input-icon-end position-relative">  
                                            <input type="text" class="form-control datetimepicker" placeholder="03/02/1999">
                                            <span class="input-icon-addon">
                                                <i class="ti ti-calendar"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end col -->
                                <div class="col-md-6">
                                    <div class="mb-0">
                                        <label class="form-label">Gender<span class="text-danger ms-1">*</span></label>
                                        <select class="select form-control">
                                            <option>Select</option>
                                            <option selected>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>
                                </div><!-- end col -->
                                <div class="col-md-12">
                                    <div class="mb-0">
                                        <label class="form-label">Blood Group<span class="text-danger ms-1">*</span></label>
                                        <select class="select form-control">
                                            <option>Select</option>
                                            <option selected>O+</option>
                                            <option>O-</option>
                                            <option>A+</option>
                                            <option>A-</option>
                                            <option>B+</option>
                                            <option>B-</option>
                                        </select>
                                    </div>
                                </div><!-- end col -->
                                <div class="col-md-6">
                                    <div class="mb-0">
                                        <label class="form-label">Address 1</label>
                                        <input type="text" class="form-control" value="3-174,">
                                    </div>
                                </div><!-- end col -->
                                <div class="col-md-6">
                                    <div class="mb-0">
                                        <label class="form-label">Address 2</label>
                                        <input type="text" class="form-control" value="3-/174,">
                                    </div>
                                </div><!-- end col -->
                                <div class="col-md-6">
                                    <div class="mb-0">
                                        <label class="form-label">Country</label>
                                        <select class="select form-control">
                                            <option>Select</option>
                                            <option selected>USA</option>
                                            <option>Canada</option>
                                            <option>UK</option>
                                            <option>Germany</option>
                                        </select>
                                    </div>
                                </div><!-- end col -->
                                <div class="col-md-6">
                                    <div class="mb-0">
                                        <label class="form-label">State</label>
                                        <select class="select form-control">
                                            <option>Select</option>
                                            <option selected>California</option>
                                            <option>Ontario</option>
                                            <option>England</option>
                                            <option>Bavaria</option>
                                       </select>
                                    </div>
                                </div><!-- end col -->
                                <div class="col-md-6">
                                    <div class="mb-0">
                                        <label class="form-label">City</label>
                                        <select class="select form-control">
                                            <option>Select</option>
                                            <option selected>Los Angeles</option>
                                            <option>Toronto</option>
                                            <option>London</option>
                                            <option>Munich</option>
                                       </select>
                                    </div>
                                </div><!-- end col -->
                                <div class="col-md-6">
                                    <div class="mb-0">
                                        <label class="form-label">Pincode</label>
                                        <input type="text" class="form-control" value="IN 46625">
                                    </div>
                                </div><!-- end col -->
                             </div>
                             <!-- end row -->

                        </div>
                        <div class="modal-footer d-flex align-items-center gap-1">
                            <button type="button" class="btn btn-white border" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Edit Modal -->

        <!-- Start Delete Modal  -->
        <div class="modal fade" id="delete_staff">
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
                            <a href="staffs.html" class="btn btn-danger position-relative z-1">Yes, Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Delete Modal  -->

    </div>
    <!-- End Wrapper -->

    <!-- jQuery -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.7.1.min.js" type="text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>    

	<!-- Simplebar JS -->
	<script src="assets/plugins/simplebar/simplebar.min.js" type="text/javascript"></script>

    <!-- Datetimepicker JS -->
    <script src="assets/js/moment.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
    
    <!-- Datatable JS -->
    <script src="assets/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="assets/js/dataTables.bootstrap5.min.js" type="text/javascript"></script>

    <!-- Select2 JS -->
    <script src="assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>

    <!-- Rangeslider JS -->
	<script src="assets/plugins/ion-rangeslider/js/ion.rangeSlider.js" type="text/javascript"></script>
	<script src="assets/plugins/ion-rangeslider/js/custom-rangeslider.js" type="text/javascript"></script>
	<script src="assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js" type="text/javascript"></script>

    <!-- Main JS -->
    <script src="assets/js/doctors.js" type="text/javascript"></script>
    <script src="assets/js/script.js" type="text/javascript"></script>

<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="|49" defer></script></body>

</html>