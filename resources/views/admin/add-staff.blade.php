
<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Employee Details</title>
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

                <div class="row">
                    <div class="col-lg-10 mx-auto">

                        <!-- Start Page Header -->
                        <div class="d-flex align-items-sm-center flex-sm-row flex-column gap-2 mb-3">
                            <div class="flex-grow-1">
                                <h6 class="fw-bold mb-0 d-flex align-items-center"><a href="doctors.html"><i class="ti ti-chevron-left me-1 fs-14"></i>Employee Details</a></h6>
                            </div>
                        </div>
                        <!-- End Page Header -->

                        <!-- Start Add Doctor -->

                         <div class="card mb-0">
                            <!-- <div class="card-header">

                            </div> -->
                            <div class="card-body">
                                <div class="border-bottom d-flex align-items-center justify-content-between pb-3 mb-3">
                                    <h5 class="offcanvas-title fs-18 fw-bold">Information</h5>
                                </div>
                                <form action="doctors.html">
                                    <div class="pb-0">
                                        <!-- start row-->
                                        <div class="row">
                                            <div class="col-lg-12">
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
                                            </div> <!-- end col-->

                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label">Name <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" placeholder="Enter Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label">Phone Number <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" placeholder="Enter Phone Number">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label">Alternate Phone Number <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" placeholder="Alternate Phone Number">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label">Email Address <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" placeholder="Enter Email">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label">DOB <span class="text-danger">*</span></label>
                                                            <div class="input-icon-end position-relative">
                                                                <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                                                <span class="input-icon-addon">
                                                                    <i class="ti ti-calendar"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label">Year Of Experience <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" placeholder="Enter Year Of Experience">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label">Department<span class="text-danger ms-1">*</span></label>
                                                            <select class="select form-control">
                                                                <option>Select Department</option>
                                                                <option>Cardiology </option>
                                                                <option>Orthopedics</option>
                                                                <option>Pediatrics</option>
                                                                <option>Gynecology</option>
                                                                <option>Psychiatry</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label">Designation <span class="text-danger ms-1">*</span></label>
                                                            <select class="select form-control">
                                                                <option>Select Designation</option>
                                                                <option>Cardiologist</option>
                                                                <option>Orthopedic Surgeon</option>
                                                                <option>Pediatrics</option>
                                                                <option>Gynecology</option>
                                                                <option>Psychiatry</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label">Medical License Number <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" placeholder="Enter Medical License Number">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label class="form-label">Language Spoken</label>
                                                            <input class="input-tags form-control" placeholder="exp. English,Hindi">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label class="form-label">Speciality</label>
                                                            <input class="input-tags form-control" placeholder="Enter Speciality">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label class="form-label">Blood Group<span class="text-danger ms-1">*</span></label>
                                                            <select class="select form-control">
                                                                <option>Select Blood Group</option>
                                                                <option>O+</option>
                                                                <option>O-</option>
                                                                <option>A+</option>
                                                                <option>A-</option>
                                                                <option>B+</option>
                                                                <option>B-</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label class="form-label">Gender <span class="text-danger ms-1">*</span></label>
                                                            <select class="select form-control">
                                                                <option>Select Gender</option>
                                                                <option>Male</option>
                                                                <option>Female</option>
                                                                <option>Others</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col-->

                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Bio</label>
                                                    <textarea class="form-control" rows="3">About Doctor</textarea>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- end row-->
                                    </div>
                                    <div class="px-3 py-2 mb-3 feild-head">
                                        <h6 class="fw-bold mb-0 shadow p-3 mt-3 mb-3 bg-body rounded">Address Information</h6>
                                    </div>
                                    <div class="pb-0">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Address 1</label>
                                                    <input type="text" class="form-control" placeholder="Enter Address 1">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Address 2 </label>
                                                    <input type="text" class="form-control" placeholder="Enter Address 2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Country</label>
                                                    <select class="select form-control">
                                                        <option>Select Country</option>
                                                        <option>India</option>
                                                    </select>
                                                </div>
                                            </div>
                                             <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">State</label>
                                                    <select class="select form-control">
                                                        <option>Select State</option>
                                                        <option>Maharashtra</option>
                                                        <option>chhattisgarh</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                           <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">City</label>
                                                    <select class="select form-control">
                                                        <option>Select City</option>
                                                        <option>Pune</option>
                                                        <option>Mumber</option>
                                                        <option>lakhnow</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Pincode</label>
                                                    <input type="text" class="form-control" placeholder="Enter Pincode">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-3 py-2 mb-3 feild-head">
                                        <h6 class="fw-bold mb-0 shadow p-3 mt-3 mb-3 bg-body rounded">Identification</h6>
                                    </div>
                                    <div class="pb-0">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Passport Number</label>
                                                    <input type="file" class="form-control" name="">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label class="form-label">National Id Number</label>
                                                    <input type="file" class="form-control" name="">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Driving License Number</label>
                                                    <input type="file" class="form-control" name="">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Pen Card</label>
                                                    <input type="file" class="form-control" name="">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Aadher Card</label>
                                                    <input type="file" class="form-control" name="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-3 py-2 mb-3 feild-head">
                                        <h6 class="fw-bold mb-0 shadow p-3 mt-3 mb-3 bg-body rounded">Bank Details</h6>
                                    </div>
                                     <div class="pb-0">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Bank Name</label>
                                                    <input type="text" class="form-control" name="" placeholder="Enter Bank Name">
                                                </div>
                                            </div>
                                             <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Branch</label>
                                                    <input type="text" class="form-control" name="" placeholder="Enter Branch">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label class="form-label">IFSC Code</label>
                                                    <input type="text" class="form-control" name="" placeholder="Enter IFSC Code">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Bank Account Number</label>
                                                    <input type="text" class="form-control" name="" placeholder="Enter Bank Account Number">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Passbook Upload</label>
                                                    <input type="file" class="form-control" name="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" d-flex justify-content-end gap-2">
                                        <a href="javascript:void(0);" class="btn btn-light btm-md" data-bs-dismiss="offcanvas">Cancel</a>
                                        <button class="btn btn-primary btm-md" data-bs-toggle="modal" data-bs-target="#success_modal">Add Doctor</button>
                                    </div>
                                </form>
                            </div>
                            <!-- <div class="card-footer">

                            </div> -->
                         </div>

                        <!-- End Add Doctor -->

                    </div>
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

    </div>
    <!-- End Wrapper -->
        @include('admin.js')
   </body>

</html>
