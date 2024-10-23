<?php include('template/dashboard-header.php'); ?>

<body>
    <!-- loader -->
    <!-- <div class="pre-loader">
        <div class="pre-loader-box">
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
        <!-- header-left -->
        <div class="header-left">
            <div class="menu-icon bi bi-list"></div>
            <div class="search-toggle-icon bi bi-search" data-toggle="header_search"></div>
            <div class="header-search">
                <form action="<?php echo site_url('') ?>" method="post">
                    <div class="form-group mb-0">
                        <i class="dw dw-search2 search-icon"></i>
                        <input type="text" class="form-control search-input" placeholder="Search Here" />
                        <div class="dropdown">
                            <a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
                                <i class="icon-arrow-down-c"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label" id="fromInput">From</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control form-control-sm form-control-line" type="text" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label" id="toInput">To</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control form-control-sm form-control-line" type="text" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Subject</label>
                                    <div class="col-sm-12 col-md-10" id="fromInput">
                                        <input class="form-control form-control-sm form-control-line" type="text" />
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button class="btn btn-primary" onclick="performSearch()">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /header-left -->
        <!-- header-right -->
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
                                    <a href="notification1.html">
                                        <img src="<?php echo site_url(); ?>public/backend/vendors/images/img.jpg"
                                            alt="" />
                                        <h3>John Doe</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit, sed...
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="notification2.html">
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
                        <a class="dropdown-item" href="<?php echo base_url("admin/logout"); ?>"><i
                                class="dw dw-logout"></i> Log
                            Out</a>
                    </div>
                </div>
            </div>
            <!-- <div class="github-link">
                <a href="https://github.com/dropways/deskapp" target="_blank"><img
                        src="<?php echo site_url(); ?>public/backend/vendors/images/github.svg" alt="" /></a>
            </div> -->
        </div>
        <!-- header-right -->
    </div>
    <!-- /header -->
    <!-- right sidebar -->
    <div class="right-sidebar">
        <!-- sidebar-title -->
        <div class="sidebar-title">
            <h3 class="weight-600 font-16 text-blue">
                Layout Settings
                <span class="btn-block font-weight-400 font-12">User Interface Settings</span>
            </h3>
            <div class="close-sidebar" data-toggle="right-sidebar-close">
                <i class="icon-copy ion-close-round"></i>
            </div>
        </div>
        <!-- /sidebar-title -->
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
                        <label class="custom-control-label" for="sidebariconlist-1"><i
                                class="ion-minus-round"></i></label>
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
                                    Room
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-5">
                        <div class="message-box pull-right">
                            <span class="" id="message-text"></span>
                        </div>
                    </div>
                </div>
                <div class="pd-20 card-box mb-30">
                    <div class="clearfix mb-20">
                        <div class="col-md-12 col-sm-12 ">
                            <div class="col-md-6" id="message-box" role="alert">
                                <div id="message-text"></div>
                            </div>
                            <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#addroom-modal">
                                Add Room <i class="micon fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <!-- datatable start -->
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th colspan="7" class="text-primary">Room List</th>
                            </tr>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Floor</th>
                                <th scope="col">Room No.</th>
                                <th scope="col">Room Type</th>
                                <th scope="col">Status</th>
                                <th scope="col">Price</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody id="roomsTableBody">
                            <?php if (!empty($rooms)): ?>
                                <?php foreach ($rooms as $room): ?>
                                    <tr>
                                        <td><?= esc($room['id']) ?></td>
                                        <td><?= esc($room['floor']) ?></td>
                                        <td><?= esc($room['room_no']) ?></td>
                                        <td><?= esc($room['room_type']) ?></td>
                                        <td>
                                            <span
                                                class="badge <?= esc($room['status']) == 'Available' ? 'badge-success' : 'badge-danger' ?>">
                                                <?= esc($room['status']) ?>
                                            </span>
                                        </td>
                                        <td><?= esc($room['price']) ?>/-</td>
                                        <td>
                                            <div class="table-actions">
                                                <!-- Edit Room -->
                                                <a href="<?= base_url("roomsController/editRoom/{$room['id']}") ?>"
                                                    data-toggle="modal" data-target="#update-room-modal" data-room-id=""
                                                    class="edit-room" style="color: rgb(38, 94, 215);">
                                                    <i class="icon-copy dw dw-edit2"></i>
                                                </a>
                                                <!-- Delete Room -->
                                                <a href="<?= base_url("roomsController/deleteRoom/{$room['id']}") ?>"
                                                    data-room-id="" class="delete-room" style="color: rgb(233, 89, 89);">
                                                    <i class="icon-copy dw dw-delete-3"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="7" class="text-center text-danger">No rooms available</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                    <!--  /datatable end -->
                </div>
                <!-- add room details modal -->
                <div class="modal fade" id="addroom-modal" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <h4 class="modal-title text-white" id="myLargeModalLabel">
                                    Add Room Details
                                </h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <form id="addRoomDetailsForm">
                                    <div class="content clearfix">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <select class="form-control" id="floor" required>
                                                    <option value="">Select floor</option>
                                                    <option value="ground">Ground</option>
                                                    <option value="first">First</option>
                                                    <option value="second">Second</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <select class="form-control" id="room_no" required>
                                                    <option value="">Select Room no.</option>
                                                    <!-- Room options will be populated dynamically -->
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <select class="form-control" id="room_type" required>
                                                    <option value="">Select Room type</option>
                                                    <option value="Single">Single</option>
                                                    <option value="Double">Double</option>
                                                    <option value="Deluxe">Deluxe</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <select class="form-control" id="status" required>
                                                    <option value="">Select status</option>
                                                    <option value="Available">Available</option>
                                                    <option value="Not Available">Not Available</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input class="form-control" type="text" id="price"
                                                    placeholder="Add Price" required>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" id="saveRoomDetails">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /add room details modal -->
                <!-- Update room modal -->
                <div class="modal fade" id="update-room-modal" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <h4 class="modal-title text-white" id="myLargeModalLabel">
                                    Update Room Details
                                </h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    ×
                                </button>
                            </div>
                            <div class="modal-body">
                                <form class="tab-wizard wizard-circle wizard clearfix" role="application" method="POST"
                                    id=" steps-uid-0">
                                    <div class="content clearfix">
                                        <div class="col-md-12">
                                            <div class=" form-group">
                                                <select class="form-control" id="floor" required>
                                                    <option data-select2-id="11" value="">
                                                        Select
                                                        floor
                                                    </option>
                                                    <option data-select2-id="12" value="ground">Ground
                                                    </option>
                                                    <option data-select2-id="13" value="first">First
                                                    </option>
                                                    <option data-select2-id="13" value="second">Second
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <select class="form-control" id="room_no" required>
                                                    <option data-select2-id="14" value="">
                                                        Select
                                                        Room no.
                                                    </option>
                                                    <!-- ground -->
                                                    <option data-select2-id="15" value="">101</option>
                                                    <option data-select2-id="16" value="">102</option>
                                                    <option data-select2-id="17" value="">103</option>
                                                    <option data-select2-id="18" value="">104</option>
                                                    <!-- first -->
                                                    <option data-select2-id="19" value="">201</option>
                                                    <option data-select2-id="20" value="">202</option>
                                                    <option data-select2-id="21" value="">203</option>
                                                    <option data-select2-id="22" value="">204</option>
                                                    <!-- second -->
                                                    <option data-select2-id="23" value="">301</option>
                                                    <option data-select2-id="24" value="">302</option>
                                                    <option data-select2-id="25" value="">303</option>
                                                    <option data-select2-id="26" value="">304</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class=" form-group">
                                                <select class="form-control" id="room_type" required>
                                                    <option data-select2-id="27" value="">Select
                                                        Room type
                                                    </option>
                                                    <option data-select2-id="28" value="ground">Single
                                                    </option>
                                                    <option data-select2-id="29" value="first">Double
                                                    </option>
                                                    <option data-select2-id="30" value="second">Deluxe
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class=" form-group">
                                                <select class="form-control" id="status" value="" required>
                                                    <option data-select2-id="22" value="">Select status
                                                    </option>
                                                    <option data-select2-id="23" value="avl">Available
                                                    </option>
                                                    <option data-select2-id="24" value="not-avl">Not
                                                        Available</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input class="form-control" type="text" id="price"
                                                    placeholder="Add Price" value="" required>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                    Close
                                </button>
                                <a href="#" class="btn btn-primary" type="submit" data-toggle="modal"
                                    data-target="#addroomdetails-modal" form="updateRoomDetailsForm">
                                    Save
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Update room modal -->
            </div>
            <!--/customer and bookings details -->
            <!-- table of rooms -->
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    // add modal form url to js file
    var adminUrl = "<?php echo base_url('admin/') ?>";
</script>
<!-- script by sameer -->
<script>
    document.getElementById('saveRoomDetails').addEventListener('click', function () {
        const formData = new FormData();
        ['floor', 'room_no', 'room_type', 'status', 'price'].forEach(id => {
            formData.append(id, document.getElementById(id).value);
        });

        fetch('<?= site_url('RoomController/saveRoomDetails'); ?>', {
            method: 'POST',
            body: formData
        })
            .then(response => response.json())
            .then(data => {
                const messageBox = $('#message-box');
                const messageText = $('#message-text');
                messageText.empty();
                if (data.success) {
                    $('#addroom-modal').modal('hide'); // Close modal
                    messageText.html('<span class="alert alert-success"><i class="fa fa-check"></i> Room details added successfully!</span>');
                    messageBox.removeClass('alert-danger').addClass('alert-success').show();
                    // alert('Room details added successfully!'); // Show success message
                } //this else condition is not working properly
                else {
                    messageText.html('<span class="alert alert-danger"><i class="fa fa -times"></i> ' + (data.message || 'There was an error adding room details.') + '</span>');
                    messageBox.removeClass('alert-success').addClass('alert-danger').show();
                    // alert('An error occurred while adding room details.');
                }
                setTimeout(() => messageText.fadeOut(), 3000);
            })
            .catch(error => {
                console.error('Error:', error);
                $('#message-text').html('<span class="alert alert-danger"><i class="fa fa-times"></i> An error occurred while adding room details.</span>');
                $('#message-box').removeClass('alert-success').addClass('alert-danger').show();
                // alert('Error: ' + data.message); // Show error message
            });
    });
    // Delete Room
    $(document).on('click', '.delete-room', function () {
        const roomId = $(this).data('room-id');
        if (confirm('Are you sure you want to delete this room?')) {
            $.ajax({
                type: 'POST',
                url: '<?= base_url('RoomController/deleteRoom') ?>' + roomId,
                success: function (response) {
                    if (response.success) {
                        alert(response.message);
                        $('#room_' + roomId).remove();
                    } else {
                        alert('Error deleting room');
                    }
                }
            });
        }
    });
</script>
<?php include('template/dashboard-footer.php'); ?>