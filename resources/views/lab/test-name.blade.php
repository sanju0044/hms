<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nav Tabs | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template</title>
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

    <!-- Simplebar CSS -->
    <link rel="stylesheet" href="assets/plugins/simplebar/simplebar.min.css">

	<!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

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
                <div class="d-flex align-items-sm-center flex-sm-row flex-column gap-2 pb-3">
                    <div class="flex-grow-1">
                        <h4 class="fw-bold mb-0">Tabs</h4>
                    </div>

                    <div class="text-end">
                        <ol class="breadcrumb m-0 py-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>

                            <li class="breadcrumb-item"><a href="javascript: void(0);">Base UI</a></li>

                            <li class="breadcrumb-item active">Tabs</li>
                        </ol>
                    </div>
				</div>
				<!-- End Page Header -->

                <!-- start row -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Occupied Status</h5>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-pills bg-nav-pills nav-justified mb-3">
                                    <li class="nav-item">
                                        <a href="ui-nav-tabs.html#home2" data-bs-toggle="tab" aria-expanded="false" class="nav-link rounded-0 active">
                                            Category
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-nav-tabs.html#profile2" data-bs-toggle="tab" aria-expanded="true" class="nav-link rounded-0">
                                            Test Name
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane active" id="home2">
                                        <div class="table-responsive">
                                            <table class="table datatable table-nowrap">
                                                  <a href="javascript:void(0);" class="btn btn-primary ms-2 fs-13 btn-md" data-bs-toggle="modal" data-bs-target="#add_staff"><i class="ti ti-plus me-1"></i>Add</a>
                                                <thead class="">
                                                    <tr>
                                                        <th class="no-sort">S.No</th>
                                                        <th>Category</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>CBC</td>
                                                        <td> <span class="fs-13 badge badge-soft-info rounded text-info fw-medium">Active </span> </td>
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
                                    </div>
                                    <div class="tab-pane show" id="profile2">
                                        <a href="javascript:void(0);" class="btn btn-primary ms-2 fs-13 btn-md" data-bs-toggle="modal" data-bs-target="#add_ward"><i class="ti ti-plus me-1"></i>Add</a>
                                        <div class="tab-pane" id="home2">
                                            <div class="table-responsive">
                                                <table class="table datatable table-nowrap">
                                                    <thead class="">
                                                        <tr>
                                                            <th class="no-sort">S.No</th>
                                                            <th>Category</th>
                                                            <th>Test Name</th>
                                                            <th>Value Range</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>CBC</td>
                                                            <td>Hemoglobin</td>
                                                            <td>4.0-6.0</td>
                                                            <td> <span class="fs-13 badge badge-soft-info rounded text-info fw-medium">Active</span> </td>
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
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end card-body -->
                        </div> <!-- end card -->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

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


         <!-- Start Add Modal -->
        <div id="add_staff" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="fw-bold modal-title">Category</h5>
                        <button type="button" class="btn-close btn-close-modal custom-btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-x"></i></button>
                    </div>
                    <form action="staffs.html">
                        <div class="modal-body">
                            <!-- start row -->
                            <div class="row mb-3 border-bottom">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label">Category<span class="text-danger ms-1">*</span></label>
                                        <input type="text" class="form-control" placeholder="Enter Category">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Status<span class="text-danger ms-1">*</span></label>
                                        <select class="select form-control">
                                            <option>Select</option>
                                            <option>Active</option>
                                            <option>Inactive</option>
                                        </select>
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

         <!-- Start Add Modal -->
        <div id="add_ward" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="fw-bold modal-title">Ward</h5>
                        <button type="button" class="btn-close btn-close-modal custom-btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-x"></i></button>
                    </div>
                    <form action="staffs.html">
                        <div class="modal-body">
                            <!-- start row -->
                            <div class="row mb-3 border-bottom">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label">Category<span class="text-danger ms-1">*</span></label>
                                        <select class="select form-control">
                                            <option>Select</option>
                                            <option>CBC</option>
                                        </select>
                                    </div>
                                </div><!-- end col -->
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label">Test Name<span class="text-danger ms-1">*</span></label>
                                        <input type="text" class="form-control" placeholder="Enter Test Name">
                                    </div>
                                </div><!-- end col -->
                                 <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label">Value Range<span class="text-danger ms-1">*</span></label>
                                        <input type="text" class="form-control" placeholder="Enter Value Range">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label">Status<span class="text-danger ms-1">*</span></label>
                                        <select class="select form-control">
                                            <option>Select</option>
                                            <option>Active</option>
                                            <option>In Active</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                        <div class="modal-footer d-flex align-items-center gap-1">
                            <button type="button" class="btn btn-white border" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Add </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Add Modal -->
</body>

</html>
