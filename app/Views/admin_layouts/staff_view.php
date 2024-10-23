<?php include('template/dashboard-header.php'); ?>
<!-- loader -->
<!-- <div class="pre-loader">
        <div class="pre-loader-box">
            <div class="loader-logo">
                <img src="<?php echo site_url(); ?>public/backend/vendors/images/main-logo.png" alt="" />
            </div>
            <div class="loader-progress" id="progress_div">
                <div class="bar" id="bar1"></div>
            </div>
            <div class="percent" id="percent1">0%</div>
            <div class="loading-text">Loading...</div>
        </div>
    </div> -->
<!-- /loader -->
<!-- header -->
<div class="header">
    <div class="header-left">
        <div class="menu-icon bi bi-list"></div>
        <div class="search-toggle-icon bi bi-search" data-toggle="header_search"></div>
        <div class="header-search">
            <!-- search form -->
            <form action="<?php echo site_url('') ?>" method="post">
                <div class="form-group mb-0">
                    <i class="dw dw-search2 search-icon"></i>
                    <input type="text" class="form-control search-input" placeholder="Search Here" />
                    <div class="dropdown">
                        <a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
                            <i class="ion-arrow-down-c"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">From</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control form-control-sm form-control-line" type="text" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">To</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control form-control-sm form-control-line" type="text" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Subject</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control form-control-sm form-control-line" type="text" />
                                </div>
                            </div>
                            <div class="text-right">
                                <button class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- search form -->
        </div>
    </div>
    <div class="header-right">
        <div class="dashboard-setting user-notification">
            <div class="dropdown">
                <a class="dropdown-toggle no-arrow" href="#" data-toggle="right-sidebar">
                    <i class="dw dw-settings2"></i>
                </a>
            </div>
        </div>
        <div class="user-notification">
            <div class="dropdown">
                <a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
                    <i class="icon-copy dw dw-notification"></i>
                    <span class="badge notification-active"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="notification-list mx-h-350 customscroll">
                        <ul>
                            <li>
                                <a href="#">
                                    <img src="<?php echo site_url(); ?>public/backend/vendors/images/img.jpg" alt="" />
                                    <h3>John Doe</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed...
                                    </p>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <img src="<?php echo site_url(); ?>public/backend/vendors/images/photo3.jpg"
                                        alt="" />
                                    <h3>John Doe</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed...
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="user-info-dropdown">
            <div class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                    <span class="user-icon">
                        <img src="<?php echo site_url(); ?>public/backend/vendors/images/photo3.jpg" alt="" />
                    </span>
                    <span class="user-name">Admin</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                    <a class="dropdown-item" href="profile.html"><i class="dw dw-user1"></i> Profile</a>
                    <a class="dropdown-item" href="profile.html"><i class="dw dw-settings2"></i> Setting</a>
                    <a class="dropdown-item" href="faq.html"><i class="dw dw-help"></i> Help</a>
                    <a class="dropdown-item" href="<?php echo base_url("admin/logout"); ?>"><i class="dw dw-logout"></i>
                        Log
                        Out</a>
                </div>
            </div>
        </div>
        <!-- <div class="github-link">
                <a href="https://github.com/dropways/deskapp" target="_blank"><img
                        src="<?php echo site_url(); ?>public/backend/vendors/images/github.svg" alt="" /></a>
            </div> -->
    </div>
</div>
<!-- /header -->
<!-- right sidebar -->
<div class="right-sidebar">
    <div class="sidebar-title">
        <h3 class="weight-600 font-16 text-blue">
            Layout Settings
            <span class="btn-block font-weight-400 font-12">User Interface Settings</span>
        </h3>
        <div class="close-sidebar" data-toggle="right-sidebar-close">
            <i class="icon-copy ion-close-round"></i>
        </div>
    </div>
    <!-- right sidebar content -->
    <div class="right-sidebar-body customscroll">
        <div class="right-sidebar-body-content">
            <h4 class="weight-600 font-18 pb-10">Header Background</h4>
            <div class="sidebar-btn-group pb-30 mb-10">
                <a href="#" class="btn btn-outline-primary header-white active">White</a>
                <a href="#" class="btn btn-outline-primary header-dark">Dark</a>
            </div>

            <h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
            <div class="sidebar-btn-group pb-30 mb-10">
                <a href="#" class="btn btn-outline-primary sidebar-light">White</a>
                <a href="#" class="btn btn-outline-primary sidebar-dark active">Dark</a>
            </div>

            <h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
            <div class="sidebar-radio-group pb-10 mb-10">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input"
                        value="icon-style-1" checked="" />
                    <label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input"
                        value="icon-style-2" />
                    <label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input"
                        value="icon-style-3" />
                    <label class="custom-control-label" for="sidebaricon-3"><i
                            class="fa fa-angle-double-right"></i></label>
                </div>
            </div>

            <h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
            <div class="sidebar-radio-group pb-30 mb-10">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebariconlist-1" name="menu-list-icon" class="custom-control-input"
                        value="icon-list-style-1" checked="" />
                    <label class="custom-control-label" for="sidebariconlist-1"><i class="ion-minus-round"></i></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebariconlist-2" name="menu-list-icon" class="custom-control-input"
                        value="icon-list-style-2" />
                    <label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o"
                            aria-hidden="true"></i></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebariconlist-3" name="menu-list-icon" class="custom-control-input"
                        value="icon-list-style-3" />
                    <label class="custom-control-label" for="sidebariconlist-3"><i class="dw dw-check"></i></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebariconlist-4" name="menu-list-icon" class="custom-control-input"
                        value="icon-list-style-4" checked="" />
                    <label class="custom-control-label" for="sidebariconlist-4"><i
                            class="icon-copy dw dw-next-2"></i></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebariconlist-5" name="menu-list-icon" class="custom-control-input"
                        value="icon-list-style-5" />
                    <label class="custom-control-label" for="sidebariconlist-5"><i
                            class="dw dw-fast-forward-1"></i></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebariconlist-6" name="menu-list-icon" class="custom-control-input"
                        value="icon-list-style-6" />
                    <label class="custom-control-label" for="sidebariconlist-6"><i class="dw dw-next"></i></label>
                </div>
            </div>

            <div class="reset-options pt-30 text-center">
                <button class="btn btn-danger" id="reset-settings">
                    Reset Settings
                </button>
            </div>
        </div>
    </div>
    <!-- /right sidebar content -->
</div>
<!-- /right sidebar -->
<!-- left sidebar -->
<div class="left-side-bar">
    <!-- left sidebar logo -->
    <div class="brand-logo">
        <a href="index.html">
            <img src="<?php echo site_url(); ?>public/backend/vendors/images/deskapp-logo.svg" alt=""
                class="dark-logo" />
            <img src="<?php echo site_url(); ?>public/backend/vendors/images/deskapp-logo-white.svg" alt=""
                class="light-logo" />
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <!-- /left sidebar logo -->
    <!-- left sidebar content -->
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <!-- dashboard -->
                <li class="dropdown">
                    <a href="<?php echo base_url('admin/dashboard'); ?>" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-house"></span><span class="mtext">Dashboard</span>
                    </a>
                </li>
                <!-- /dashboard -->
                <!-- Reservation -->
                <li class="dropdown">
                    <a href="<?php echo base_url('reservations/'); ?>" class="dropdown-toggle no-arrow">
                        <span class="micon fa fa-calendar-check-o"></span><span class="mtext">Reservations</span>
                    </a>

                </li>
                <!-- /Reservation -->
                <!-- Room management -->
                <li class="dropdown">
                    <a href="<?php echo base_url('room/'); ?>" class="dropdown-toggle no-arrow">
                        <span class="micon fa fa-bed"></span><span class="mtext">Rooms</span>
                    </a>

                </li>
                <!-- /Room management -->
                <!-- Guest management -->
                <li class="dropdown">
                    <a href="<?php echo base_url('guest/'); ?>" class="dropdown-toggle no-arrow">
                        <span class="micon fa fa-group"></span><span class="mtext">Guest</span>
                    </a>

                </li>
                <!-- /Guest management -->
                <!-- staff management -->
                <li class="dropdown">
                    <a href="<?php echo base_url('staff/'); ?>" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-file-person"></span><span class="mtext">Staff</span>
                    </a>

                </li>
                <!-- /staff management -->
                <!-- reports -->
                <li class="dropdown">
                    <a href="<?php echo base_url('reports/'); ?>" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-file-earmark-text"></span><span class="mtext">Reports</span>
                    </a>
                </li>
                <!-- /reports -->
                <!-- calendar -->
                <li>
                    <a href="<?php echo base_url('calendar/'); ?>" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-calendar4-week"></span><span class="mtext">Calendar</span>
                    </a>
                </li>
                <!-- /calendar -->
                <!-- settings -->
                <li class="dropdown">
                    <a href="<?php echo base_url('settings/'); ?>" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-gear-fill"></span><span class="mtext">Settings</span>
                    </a>
                </li>
                <!-- /settings -->
            </ul>
        </div>
    </div>
    <!-- left sidebar content -->
    <div class="mobile-menu-overlay show"></div>
</div>
<!-- /left sidebar -->
<!-- main container -->
<div class="main-container">
    <!-- inner content -->
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Dashboard</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="<?php echo base_url('admin/dashboard'); ?>">Home</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">
                                Staff
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 col-sm-12">
                    <span class="pull-right">
                        <?php if (session()->getFlashdata('success')): ?>
                            <div class="alert alert-success">
                                <?= session()->getFlashdata('success') ?>
                            </div>
                        <?php endif; ?>
                        <?php if (session()->getFlashdata('error')): ?>
                            <div class="alert alert-danger">
                                <?= session()->getFlashdata('error') ?>
                            </div>
                        <?php endif; ?>
                    </span>
                    <span class="pull-right" id="responseMessage">
                    </span>
                </div>
            </div>
            <!-- Datatable start -->
            <div class="pd-20 card-box mb-30">
                <div class="clearfix mb-20">
                    <div class="col-md-6 col-sm-12 text-right pull-right">
                        <div class="btn btn-primary" data-toggle="modal" data-target="#AddStaff-modal">
                            Add Details <i class="micon fa fa-plus"></i>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered" id="stafftablelist">
                    <thead>
                        <tr>
                            <th colspan="7" class="text-primary">Staff List</th>
                        </tr>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Employee Id</th>
                            <th scope="col">Email Id</th>
                            <th scope="col">Mobile No.</th>
                            <th scope="col">Post</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <!-- tbody start -->
                    <tbody id="staffTableBody">
                        <?php if (!empty($staff)): ?>
                            <?php foreach ($staff as $row): ?>

                                <td><?= esc($row['id']); // Display the counter and increment it ?></td>
                                <!-- Row number -->
                                <td><?= esc($row['fullname']); ?></td>
                                <td><?= esc($row['empid']); ?></td>
                                <td><?= esc($row['email']); ?></td>
                                <td><?= esc($row['mobile']); ?></td>
                                <td><?= esc($row['post']); ?></td>
                                <td>
                                    <div class="table-actions">
                                        <!-- Edit  -->
                                        <a href="<?= base_url('staff/update' . $row['id']); ?>" data-toggle="modal"
                                            data-target="#updateStaff-modal" class="edit-staff"
                                            style="color: rgb(38, 94, 215);">
                                            <i class="icon-copy dw dw-edit2"></i>
                                        </a>
                                        <!-- Delete-->
                                        <a href="<?= base_url('staff/delete_details/' . $row['id']); ?>" class="delete-staff"
                                            style="color: rgb(233, 89, 89);">
                                            <i class="icon-copy dw dw-delete-3"></i>
                                        </a>
                                    </div>
                                </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="7" class="text-center text-danger">No records found.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                    <!-- /tbody end -->
                </table>
            </div>
            <!-- Datatable End -->
            <!-- Add-staff modal -->
            <div class="modal fade" id="AddStaff-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                style="display: none;">
                <div class="modal-dialog modal-dialog-centered modal-medium">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h4 class="modal-title text-white" id="myLargeModalLabel">Add New
                            </h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                ×
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="AddStaffDetailsform"> <!-- modal form id  -->
                                <div class="content clearfix">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input class="form-control" type="text" id="fullname"
                                                    placeholder="Full Name" value="" name="fullname" required>
                                                <div class="text-danger" id="fullnameError"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input class="form-control" type="text" id="empid" maxlength="8"
                                                    placeholder="Enter Staff id" value="" name="empid" required>
                                                <div class="text-danger" id="empidError"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input class="form-control" type="text" id="email" placeholder="Email"
                                                    value="" name="email" required>
                                            </div>
                                            <div class="text-danger" id="emailError"></div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input class="form-control" type="tel" id="mobile" maxlength="10"
                                                    placeholder="Mobile No." value="" name="mobile" required>
                                                <div class="text-danger" id="mobileError"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class=" form-group">
                                                <select class="form-control" id="post" name="post" value="post"
                                                    required>
                                                    <option data-select2-id="11" value="wp" selected>Select
                                                        Post
                                                    </option>
                                                    <option data-select2-id="12" value="Helpdesk Asstt.">Helpdesk
                                                        Asstt.
                                                    </option>
                                                    <option data-select2-id="13" value="HR">HR</option>
                                                    <option data-select2-id="14" value="Manager">Manager</option>
                                                </select>
                                                <div class="text-danger" id="postError"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" id="saveformdetails" onclick="" class="btn btn-primary">
                                <!-- modal form save button id  -->
                                Save
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Add-staff modal -->
            <!-- update-staff modal -->
            <div class="modal fade" id="updateStaff-modal" tabindex="-1" role="dialog"
                aria-labelledby="myLargeModalLabel" style="display: none;">
                <div class="modal-dialog modal-dialog-centered modal-medium">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h4 class="modal-title text-white" id="myLargeModalLabel">Update Details
                            </h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                ×
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- staff details update form -->
                            <form id="updateStaffDetailsform">
                                <div class="content clearfix">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input class="form-control" type="text" id="fullname"
                                                    placeholder="Full Name" value="" name="fullname" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input class="form-control" type="text" id="empid" maxlength="8"
                                                    placeholder="Enter Staff id" value="" name="empid" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input class="form-control" type="text" id="email" placeholder="Email"
                                                    value="" name="email" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input class="form-control" type="tel" id="mobile" maxlength="10"
                                                    placeholder="Mobile No." value="" name="mobile" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class=" form-group">
                                                <select class="form-control" id="post" name="post" value="post"
                                                    required>
                                                    <option data-select2-id="11" value="wp" selected>Select
                                                        Post
                                                    </option>
                                                    <option data-select2-id="12" value="ha">Helpdesk Asstt.
                                                    </option>
                                                    <option data-select2-id="13" value="hr">HR</option>
                                                    <option data-select2-id="14" value="mg">Manager</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" id="updateDetails" onclick="" class="btn btn-primary">
                                Save
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /update-staff modal -->
            <!-- confirm delete details modal -->
            <div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="confirmDeleteModalLabel"> Are you sure you want to delete
                                this record?</h5>
                        </div>
                        <!-- <div class="modal-body">
                                Are you sure you want to delete this record?
                            </div> -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                            <button type="button" class="btn btn-danger" href="" id="confirmDelete">Yes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /confirm delete details modal -->
        </div>
        <!-- footer wrap -->
        <div class="footer-wrap pd-20 mb-20 mt-3 card-box">
            This theme design by
            <a href="https://github.com/dropways" target="_blank">ABC</a>
        </div>
        <!-- footer wrap -->
    </div>
    <!-- /inner content -->
</div>
<!-- /main container -->
</body>
<!-- Include jQuery and Bootstrap JS (if not already included) by ritika-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- add details script -->
<script>
    $(document).ready(function () {
        $('#saveformdetails').on('click', function (e) {
            e.preventDefault(); // Prevent the default form submission
            $.ajax({
                type: 'POST',
                url: '<?= base_url('staff/add_form_details') ?>', // Adjust to your controller method
                data: $('#AddStaffDetailsform').serialize(),
                dataType: 'json',
                success: function (response) {
                    if (response.success) {
                        $('#responseMessage').html('<div class="alert alert-success"><i class="fa fa-check"></i>' + response.message + '</div>');
                        $('#AddStaffDetailsform')[0].reset(); // Reset the form
                        $('#AddStaff-modal').modal('hide'); // Hide the modal
                        // Hide success message after 3 seconds
                        setTimeout(function () {
                            $('#responseMessage').fadeOut('slow', function () {
                                $(this).html('').show(); // Clear the message and show it again for next use
                            });
                        }, 3000); // 3000 milliseconds = 3 seconds
                    } else {
                        $('#responseMessage').html('<div class="alert alert-danger"><i class="fa fa-cancel"></i>' + response.message + '</div>');
                        // Close modal if there are validation errors
                        $('#AddStaff-modal').modal('hide');

                        // Hide error message after 3 seconds
                        setTimeout(function () {
                            $('#responseMessage').fadeOut('slow', function () {
                                $(this).html('').show(); // Clear the message and show it again for next use
                            });
                        }, 3000); // 3000 milliseconds = 3 seconds
                    }
                },
                error: function (xhr) {
                    $('#responseMessage').html('<div class="alert alert-danger">An error occurred: ' + xhr.responseText + '</div>');
                }
            });
        });
    });
</script>
<!-- update details script -->
<script>
    $(document).ready(function () {
        $('#updateDetails').click(function () {
            var formData = $('#updateStaffDetailsform').serialize();
            $.ajax({
                type: "POST",
                url: "staff/update", // Adjust this URL based on your routing
                data: formData,
                success: function (response) {
                    // Handle success (e.g., show a success message, close the modal)
                    alert('Details updated successfully!');
                    $('#updateStaff-modal').modal('hide'); //modal
                    // Optionally, refresh your staff list or update the UI
                },
                error: function (xhr, status, error) {
                    // Handle error (e.g., show error messages)
                    var errors = xhr.responseJSON.errors;
                    if (errors) {
                        $.each(errors, function (key, value) {
                            $('#' + key + 'Error').text(value);
                        });
                    } else {
                        alert('An error occurred. Please try again.');
                    }
                }
            });
        });
    });
</script>
<!-- delete details script -->
<!-- Example HTML button for deleting a staff member -->
<!-- <button class="delete-button" data-id="1">Delete Staff</button> -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('.delete-staff').click(function () {
            const staffId = $(this).data('id'); // Get the staff ID from the button

            // Confirm deletion
            if (confirm('Are you sure you want to delete this staff member?')) {
                $.ajax({
                    url: '/path/to/your/staff/delete_details/($id)', // Update with your route
                    type: 'POST',
                    data: { id: staffId },
                    success: function (response) {
                        if (response.success) {
                            alert(response.message);
                            // Optionally, remove the item from the UI
                            // $(this).closest('.staff-item').remove();
                        } else {
                            alert(response.message);
                        }
                    },
                    error: function () {
                        alert('An error occurred while trying to delete the staff member.');
                    }
                });
            }
        });
    });
</script>

<!-- session messages hide  -->
<!-- <script>
    document.addEventListener('DOMContentLoaded', function () {
        // Select all alert divs
        const alerts = document.querySelectorAll('.alert');

        // Loop through each alert and set a timeout to hide it
        alerts.forEach(alert => {
            setTimeout(() => {
                alert.style.transition = 'opacity 0.5s ease';
                alert.style.opacity = '0';
                setTimeout(() => {
                    alert.remove(); // Remove from DOM after fade-out
                }, 500); // Match this duration with the CSS transition time
            }, 3000); // Show the alert for 3000 milliseconds (3 seconds)
        });
    });
</script> -->
<?php include('template/dashboard-footer.php'); ?>