
<div>
    <div class="container mb-5">
            <!-- Start Content -->
            <div class="row">
                <div class="col-lg-12">
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
                                        <h5 class="mb-0 fw-bold">Filter</h5>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" class="link-danger text-decoration-underline">Clear All</a>
                                        </div>
                                    </div>
                                    <form action="hrm-departments.html#">
                                        <div class="filter-body pb-0">
                                            <div class="mb-3">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <label class="form-label">Department</label>
                                                    <a href="javascript:void(0);" class="link-primary mb-1">Reset</a>
                                                </div>
                                                <select class="select2" multiple="multiple">
                                                    <option value="m-1" selected>Nursing</option>
                                                    <option value="m-2">Pharmacy</option>
                                                    <option value="m-3">Laboratory</option>
                                                    <option value="m-4">Billing</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label mb-1 text-dark fs-14 fw-medium">Date</label>
                                                <div class="input-icon-end position-relative">
                                                    <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
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
                                                <select class="select2" multiple="multiple">
                                                    <option value="m-1" selected>Active</option>
                                                    <option value="m-2">Inactive</option>
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
                                    <th>Department</th>
                                    <th>Created Date</th>
                                    <th>No of Doctor</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Nursing</td>
                                    <td>22 Apr 2025</td>
                                    <td>40</td>
                                    <td><span class="badge badge-soft-success border border-success px-2 py-1 fs-13 fw-medium">Active</span></td>
                                    <td>
                                        <div class="action-item">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_deparment">Edit</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_designation">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Pharmacy</td>
                                    <td>12 Apr 2025</td>
                                    <td>15</td>
                                    <td><span class="badge badge-soft-danger border border-danger px-2 py-1 fs-13 fw-medium">Inactive</span></td>
                                    <td>
                                        <div class="action-item">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_deparment">Edit</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_designation">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Laboratory</td>
                                    <td>01 Apr 2025</td>
                                    <td>10</td>
                                    <td><span class="badge badge-soft-success border border-success px-2 py-1 fs-13 fw-medium">Active</span></td>
                                    <td>
                                        <div class="action-item">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_deparment">Edit</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_designation">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Billing</td>
                                    <td>05 Mar 2025</td>
                                    <td>13</td>
                                    <td><span class="badge badge-soft-success border border-success px-2 py-1 fs-13 fw-medium">Active</span></td>
                                    <td>
                                        <div class="action-item">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_deparment">Edit</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_designation">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Anesthesia</td>
                                    <td>20 Mar 2025</td>
                                    <td>17</td>
                                    <td><span class="badge badge-soft-success border border-success px-2 py-1 fs-13 fw-medium">Active</span></td>
                                    <td>
                                        <div class="action-item">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_deparment">Edit</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_designation">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Administration</td>
                                    <td>01 Mar 2025</td>
                                    <td>20</td>
                                    <td><span class="badge badge-soft-success border border-success px-2 py-1 fs-13 fw-medium">Active</span></td>
                                    <td>
                                        <div class="action-item">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_deparment">Edit</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_designation">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Counseling</td>
                                    <td>15 Feb 2025</td>
                                    <td>25</td>
                                    <td><span class="badge badge-soft-danger border border-danger px-2 py-1 fs-13 fw-medium">Inactive</span></td>
                                    <td>
                                        <div class="action-item">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_deparment">Edit</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_designation">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Research</td>
                                    <td>09 Feb 2025</td>
                                    <td>15</td>
                                    <td><span class="badge badge-soft-success border border-success px-2 py-1 fs-13 fw-medium">Active</span></td>
                                    <td>
                                        <div class="action-item">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_deparment">Edit</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_designation">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Biomedical</td>
                                    <td>01 Feb 2025</td>
                                    <td>19</td>
                                    <td><span class="badge badge-soft-success border border-success px-2 py-1 fs-13 fw-medium">Active</span></td>
                                    <td>
                                        <div class="action-item">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_deparment">Edit</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_designation">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Rehabilitation</td>
                                    <td>12 Jan 2025</td>
                                    <td>24</td>
                                    <td><span class="badge badge-soft-success border border-success px-2 py-1 fs-13 fw-medium">Active</span></td>
                                    <td>
                                        <div class="action-item">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_deparment">Edit</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_designation">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- End Content -->
        </div>

        <!-- ========================
			End Page Content
		========================= -->

        <!-- Start Add Modal -->
            <x-form-modal>
                <x-slot name='body'>
                    dsd
                </x-slot>
            </x-form-modal>
        <!-- End Add Modal -->
</div>



