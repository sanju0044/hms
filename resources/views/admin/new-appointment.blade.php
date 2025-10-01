
<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>New Appointment - Medical & Hospital - Bootstrap 5 Admin Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Dreams Technologies">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png">

    <!-- Apple Icon -->
    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">

    <!-- Theme Config Js -->
    <script src="assets/js/theme-script.js" type="060901ebe30003e1bc244e4b-text/javascript"></script>

    <!-- Font Awosome Icon CSS -->
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Tabler Icon CSS -->
    <link rel="stylesheet" href="assets/plugins/tabler-icons/tabler-icons.min.css">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

    <!-- intel input -->
    <link rel="stylesheet" href="assets/plugins/intltelinput/css/intlTelInput.css">

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

                <!-- row start -->
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <!-- page header start -->
                        <div class="mb-4">
                            <h6 class="fw-bold mb-0 d-flex align-items-center"> <a href="appointments.html" class="text-dark"> <i class="ti ti-chevron-left me-1"></i>Appointments</a></h6>
                        </div>
                        <!-- page header end -->

                        <!-- card start -->
                        <div class="card">
                            <div class="card-body">
                                <div class="form">
                                    <div class="mb-3">
                                        <label class="form-label mb-1 fw-medium">Appointment ID<span class="text-danger ms-1">*</span></label>
                                        <input type="text" class="form-control" value="AP234354" disabled>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <div class="d-flex align-items-center justify-content-between mb-1">
                                                    <label class="form-label mb-0 fw-medium">Patient<span class="text-danger ms-1">*</span></label>
                                                    <a href="javascript:void(0);" class="link-primary" data-bs-toggle="modal" data-bs-target="#add_modal"><i class="ti ti-circle-plus me-1"></i>Add New</a>
                                                </div>
                                                <select class="select form-control" >
                                                    <option value="m-1">Select</option>
                                                    <option value="m-2">Alberto Ripley</option>
                                                    <option value="m-3">Susan Babin</option>
                                                    <option value="m-4">Martin Lisa</option>
                                                    <option value="m-5">Stella Mary</option>
                                                    <option value="m-6">Carol Lam</option>
                                                    <option value="m-7">Jesus Adams</option>
                                                    <option value="m-8">Ezra Belcher</option>
                                                    <option value="m-9">Unit Manager</option>
                                                    <option value="m-10">Bernard Griffith</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label mb-1 fw-medium">Department<span class="text-danger ms-1">*</span></label>
                                                <select class="select form-control">
                                                    <option value="m-1">Select</option>
                                                    <option value="m-2">General Medicine</option>
                                                    <option value="m-3">Pediatrics</option>
                                                    <option value="m-4">Gynecology</option>
                                                    <option value="m-5">Cardiology</option>
                                                    <option value="m-6">Orthopedics</option>
                                                    <option value="m-7">Dermatology</option>
                                                    <option value="m-8">ENT</option>
                                                    <option value="m-9">Neurology</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label mb-1 fw-medium">Doctor<span class="text-danger ms-1">*</span></label>
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
                                                <label class="form-label mb-1 fw-medium">Appointment Type<span class="text-danger ms-1">*</span></label>
                                                <select class="select form-control">
                                                    <option value="m-1">Select</option>
                                                    <option value="m-2">In Person</option>
                                                    <option value="m-3">Online</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label mb-1 fw-medium">Date of Appointment<span class="text-danger ms-1">*</span></label>
                                                <div class="input-icon-end position-relative">
                                                    <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy" value="dd/mm/yyyy">
                                                    <span class="input-icon-addon">
                                                        <i class="ti ti-calendar"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label mb-1 fw-medium">Time<span class="text-danger ms-1">*</span></label>
                                                <div class="input-icon-end position-relative">
                                                    <input type="text" class="form-control timepicker">
                                                    <span class="input-icon-addon">
                                                        <i class="ti ti-clock text-gray-7"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label mb-1 fw-medium">Appointment Reason<span class="text-danger ms-1">*</span></label>
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                    <div class="mb-0">
                                        <label class="form-label mb-1 fw-medium">Status<span class="text-danger ms-1">*</span></label>
                                        <select class="select form-control">
                                            <option value="m-1">Select</option>
                                            <option value="m-2">Checked Out</option>
                                            <option value="m-3">Checked In</option>
                                            <option value="m-4">Cancelled</option>
                                            <option value="m-5">Schedule</option>
                                            <option value="m-6">Confirmed</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card end -->

                        <div class="d-flex align-items-center justify-content-end">
                            <a href="javascript:void(0);" class="btn btn-light me-2">Cancel</a>
                            <a href="javascript:void(0);" class="btn btn-primary">Create Appointment</a>
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

    <!-- Start Add modal -->
    <div class="modal fade" id="add_modal">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark fw-bold">Add New Patient</h5>
                    <button type="button" class="btn-close custom-btn-close opacity-100" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-x bg-white fs-16 text-dark"></i></button>
                </div>
                <div class="modal-body pb-0">
                    <!-- form start -->
                    <div class="form">
                        <h6 class="fw-bold mb-3">Patient Information</h6>
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="mb-3 d-flex align-items-center">
                                    <label class="form-label mb-0">Profile Image</label>
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
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label mb-1 fw-medium">First Name<span class="text-danger ms-1">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label mb-1 fw-medium">Last Name<span class="text-danger ms-1">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label mb-1 fw-medium">Phone Number<span class="text-danger ms-1">*</span></label>
                                    <input type="tel" class="form-control" id="phone" name="phone">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label mb-1 fw-medium">Email Address<span class="text-danger ms-1">*</span></label>
                                    <input type="email" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label mb-1 fw-medium">Primary Doctor<span class="text-danger ms-1">*</span></label>
                                    <select class="select">
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
                                    <label class="form-label mb-1 fw-medium">DOB<span class="text-danger ms-1">*</span></label>
                                    <div class="input-icon-end position-relative">
                                        <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                        <span class="input-icon-addon">
                                            <i class="ti ti-calendar"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label mb-1 fw-medium">Gender<span class="text-danger ms-1">*</span></label>
                                    <select class="select">
                                        <option value="m-1">Select</option>
                                        <option value="m-2">Male</option>
                                        <option value="m-3">Female</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label mb-1 fw-medium">Blood Group<span class="text-danger ms-1">*</span></label>
                                    <select class="select">
                                        <option value="m-1">Select</option>
                                        <option value="m-2">O+</option>
                                        <option value="m-3">O-</option>
                                        <option value="m-3">A+</option>
                                        <option value="m-3">A-</option>
                                        <option value="m-3">B+</option>
                                        <option value="m-3">B-</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label mb-1 fw-medium">Status<span class="text-danger ms-1">*</span></label>
                                    <select class="select">
                                        <option value="m-1">Select</option>
                                        <option value="m-2">Available</option>
                                        <option value="m-3">Unavailable</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <h6 class="fw-bold mb-3 border-top pt-3">Address Information</h6>

                        <div class="row">

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label mb-1 fw-medium">Address 1<span class="text-danger ms-1">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label mb-1 fw-medium">Address 2<span class="text-danger ms-1">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label mb-1">Country<span class="text-danger ms-1">*</span></label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>United States</option>
                                        <option>Canada</option>
                                        <option>UK</option>
                                        <option>Germany</option>
                                        <option>France</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label mb-1">State<span class="text-danger ms-1">*</span></label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>California</option>
                                        <option>Ontario</option>
                                        <option>Bavaria</option>
                                        <option>Wellington</option>
                                        <option>Le-de-France</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label mb-1">City<span class="text-danger ms-1">*</span></label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Los Angeles</option>
                                        <option>Toronto</option>
                                        <option>London</option>
                                        <option>Munich</option>
                                        <option>Sydney</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label mb-1">Pincode<span class="text-danger ms-1">*</span></label>
                                    <input type="text" class="form-control">
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

    @include('admin.js')
</body>

</html>
