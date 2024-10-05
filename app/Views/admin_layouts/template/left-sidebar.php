<!-- left sidebar -->
<div class="left-side-bar">
    <!-- left sidebar logo -->
    <div class="brand-logo">
        <!-- Add Dashboard hyperlink to both images -->
        <a href="<?php echo base_url('admin/dashboard'); ?>">
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