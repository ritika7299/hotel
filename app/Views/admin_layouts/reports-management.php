<?php include('template/dashboard-header.php'); ?>

<body>
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
                <!-- page header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"> <a
                                            href="<?php echo base_url('admin/dashboard'); ?>">Home</a></li>
                                    <li class="breadcrumb-item" aria-current="page">
                                        Reports
                                    </li>
                                </ol>
                            </nav>
                        </div>

                    </div>
                </div>
                <!-- page header -->
                <!-- Simple Datatable start -->
                <div class="card-box mb-30">
                    <div class="pd-20">
                        <h4 class="text-blue h4">Reports</h4>
                    </div>
                    <!-- paste report content here  -->
                    <!-- /paste report content here  -->
                </div>
                <!-- Simple Datatable End -->
                <!-- add modal -->
                <div class="modal fade" id="addroom-modal" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-success">
                                <h4 class="modal-title text-white" id="myLargeModalLabel">
                                    Add
                                </h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    ×
                                </button>
                            </div>
                            <div class="modal-body">
                                <form class="tab-wizard wizard-circle wizard clearfix" role="application"
                                    action="<?php echo base_url('room/add'); ?>" method="POST" id="steps-uid-0">
                                    <div class="content clearfix">
                                        <!-- row 1 -->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <select class="custom-select2 form-control select2-hidden-accessible"
                                                    name="room_floor" style="width: 100%; height: 38px"
                                                    data-select2-id="1" tabindex="-1" aria-hidden="true" required>
                                                    <option data-select2-id="01" value="">Select Floor</option>
                                                    <option data-select2-id="02" value="Ground">Ground</option>
                                                    <option data-select2-id="03" value="First">First </option>
                                                    <option data-select2-id="04" value="Second">Second</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <select class="custom-select2 form-control select2-hidden-accessible"
                                                    name="room_no" style="width: 100%; height: 38px" data-select2-id="2"
                                                    tabindex="-1" aria-hidden="true" required>
                                                    <option data-select2-id="05" value="">Select Room no.</option>
                                                    <option data-select2-id="06" value="G101">G101</option>
                                                    <option data-select2-id="07" value="G102">G102</option>
                                                    <option data-select2-id="08" value="G103">G103</option>
                                                    <option data-select2-id="09" value="G104">G104</option>
                                                    <option data-select2-id="10" value="FA101">FA101</option>
                                                    <option data-select2-id="11" value="FA102">FA102</option>
                                                    <option data-select2-id="12" value="FA103">FA103</option>
                                                    <option data-select2-id="13" value="FA104">FA104</option>
                                                    <option data-select2-id="14" value="FB101">FB101</option>
                                                    <option data-select2-id="15" value="FB102">FB102</option>
                                                    <option data-select2-id="16" value="FB103">FB103</option>
                                                    <option data-select2-id="17" value="FB104">FB104</option>
                                                    <option data-select2-id="18" value="FC101">FC101</option>
                                                    <option data-select2-id="19" value="FC102">FC102</option>
                                                    <option data-select2-id="20" value="FC103">FC103</option>
                                                    <option data-select2-id="21" value="FC104">FC104</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- row 1 -->
                                        <!-- row 2 -->
                                        <div class="col-md-12">
                                            <div class="form-gropu">
                                                <select
                                                    class="custom-select2 form-control select2-hidden-accessible bg-info"
                                                    name="status" style="width: 100%; height: 38px" data-select2-id="3"
                                                    tabindex="-1" aria-hidden="true" required>
                                                    <option data-select2-id="22">Select status</option>
                                                    <option data-select2-id="23">Book</option>
                                                    <option data-select2-id="24">Booked</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- row 2 -->
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                    Close
                                </button>
                                <a href="<?php echo base_url('room/create'); ?>"><button type="submit"
                                        class="btn btn-success" href="">
                                        Save
                                    </button></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /modal -->
        </div>
    </div>

    <!-- /inner content -->
    </div>
    <!-- /main container -->
</body>


<?php include('template/dashboard-footer.php'); ?>