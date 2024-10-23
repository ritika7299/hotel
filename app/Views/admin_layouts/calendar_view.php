<?php include('template/dashboard-header.php'); ?>
<style>
    .calendar-wrap {
        margin-bottom: 30px;
    }

    .fc-day {
        text-align: center;
        padding: 10px;
        border: 1px solid #ddd;
    }

    .fc-day-number {
        font-weight: bold;
    }

    .fc-toolbar {
        margin-bottom: 20px;
    }

    .btn {
        padding: 10px 20px;
        margin: 5px;
        cursor: pointer;
        background-color: #007bff;
        color: white;
        border: none;
    }

    .today {
        background-color: #90ee90;
        color: black;
        font-weight: bold;
    }

    .sunday {
        background-color: #ffcccb;
        color: black;
    }

    .festival-name-box {
        background-color: #ffcccb;
        border: 1px solid #d9534f;
        border-radius: 5px;
        padding: 5px;
        margin-top: 5px;
        text-align: center;
    }

    .festival-name {
        font-size: 0.8em;
        color: #d9534f;
    }



    .fc-day {
        padding: 10px;
        height: 60px;
        vertical-align: middle;
        text-align: center;
    }

    .fc-day {
        padding: 10px;
        height: 60px;
        vertical-align: middle;
        text-align: center;
    }

    .fc-day-number {
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 1.2em;
        height: 100%;
        font-weight: normal;
    }




    .btn:hover {
        background-color: #0056b3;
        /* Change color on hover */
    }

    .fc-toolbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .calendar-content {
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }
    .sameer{
        color: black;
    }
</style>

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
                                <i class="ion-arrow-down-c"></i>
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
                <!-- page header -->
                <div class="page-header">
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
                                        Calendar
                                    </li>
                                </ol>
                            </nav>
                        </div>
                       
                    
                </div>
                <!-- /page header -->
            </div>

            <?php
            // Array of month names
            $months = [
                1 => 'January',
                2 => 'February',
                3 => 'March',
                4 => 'April',
                5 => 'May',
                6 => 'June',
                7 => 'July',
                8 => 'August',
                9 => 'September',
                10 => 'October',
                11 => 'November',
                12 => 'December'
            ];

            //   Array of days in a week
            $weekDays = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

            // Get current month and year
            $currentMonth = date('n');
            $currentYear = date('Y');
            ?>
            <div class="pd-20 card-box mb-30">
                <div class="calendar-wrap">
                    <div id="calendar" class="fc fc-bootstrap4 fc-ltr">
                        <div class="fc-toolbar fc-header-toolbar">
                            <div class="fc-left">
                                <h2 id="calendar-title" class="calendar-title">
                                    <?= $months[$currentMonth] . " " . $currentYear; ?>
                                </h2>
                            </div>
                            <div class="fc-right">
                                <button id="prevMonth" class="btn prev-btn">Previous</button>
                                <button id="nextMonth" class="btn next-btn">Next</button>
                            </div>
                        </div>
                        <div class="fc-view-container calendar-container">
                            <div id="calendar-content" class="sameer">
                                <!-- Calendar will be loaded here dynamically using JavaScript -->
                            </div>
                        </div>

                        <!-- New section for displaying festival names -->
                        <div id="festival-list" class="festival-list-box">
                            <!-- Festival names will be loaded here -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- calendar modal -->
            <!-- view-event -->
            <div id="modal-view-event" class="modal modal-top fade calendar-modal">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <h4 class="h4">
                                <span class="event-icon weight-400 mr-3"></span><span class="event-title"></span>
                            </h4>
                            <div class="event-body"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /view-event -->
            <!-- view-event-add -->
            <div id="modal-view-event-add" class="modal modal-top fade calendar-modal">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <form id="add-event">
                            <div class="modal-body">
                                <h4 class="text-blue h4 mb-10">Add Event Detail</h4>
                                <div class="form-group">
                                    <label>Event name</label>
                                    <input type="text" class="form-control" name="ename">
                                </div>
                                <div class="form-group">
                                    <label>Event Date</label>
                                    <input type="text" class="datetimepicker form-control" name="edate">
                                </div>
                                <div class="form-group">
                                    <label>Event Description</label>
                                    <textarea class="form-control" name="edesc"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Event Color</label>
                                    <select class="form-control" name="ecolor">
                                        <option value="fc-bg-default">fc-bg-default</option>
                                        <option value="fc-bg-blue">fc-bg-blue</option>
                                        <option value="fc-bg-lightgreen">
                                            fc-bg-lightgreen
                                        </option>
                                        <option value="fc-bg-pinkred">fc-bg-pinkred</option>
                                        <option value="fc-bg-deepskyblue">
                                            fc-bg-deepskyblue
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Event Icon</label>
                                    <select class="form-control" name="eicon">
                                        <option value="circle">circle</option>
                                        <option value="cog">cog</option>
                                        <option value="group">group</option>
                                        <option value="suitcase">suitcase</option>
                                        <option value="calendar">calendar</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                                <button type="button" class="btn btn-primary" data-dismiss="modal">
                                    Close
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /view-event-add -->
            <!-- /calendar modal -->
        </div>
        <!-- footer wrap -->
        <div class="footer-wrap pd-20 mb-20 card-box">
            This theme design by
            <a href="https://github.com/dropways" target="_blank">ABC</a>
        </div>
        <!-- footer wrap -->
    </div>
    <!-- /inner content -->
    </div>
    <!-- /main container -->
</body>
<script>
    // Get the current month, year, and day from PHP
    let currentMonth = <?= $currentMonth; ?>;
    let currentYear = <?= $currentYear; ?>;
    let today = new Date(); // Get today's date

    const months = <?= json_encode($months); ?>;
    const weekDays = <?= json_encode($weekDays); ?>;

    // Array of festival dates with names (format: { date: "MM-DD", name: "Festival Name" })
    const festivalDates = [
        //     {
        //     date: "01-01",
        //     name: "New Year's Day"
        // },
        // {
        //     date: "12-25",
        //     name: "Christmas"
        // },
        // {
        //     date: "11-28",
        //     name: "Thanksgiving"
        // },
        // {
        //     date: "10-31",
        //     name: "Halloween"
        // },
        // Add more festival dates as needed
    ];


    // Function to generate the calendar for a given month and year
    function generateCalendar(month, year) {
        const firstDayOfMonth = new Date(year, month - 1, 1).getDay(); // Day of the week (0 for Sunday)
        const daysInMonth = new Date(year, month, 0).getDate(); // Number of days in the month

        // Set calendar title
        document.getElementById('calendar-title').innerHTML = `${months[month]} ${year}`;

        // Generate table for the calendar
        let calendarHtml = '<table class="table-bordered">';
        calendarHtml += '<thead class="fc-head"><tr>';

        // Print the week day headers
        weekDays.forEach(day => {
            calendarHtml += `<th class="fc-day-header">${day}</th>`;
        });

        calendarHtml += '</tr></thead><tbody class="fc-body"><tr>';

        let day = 1;

        // Loop through 6 weeks (maximum weeks in a month)
        for (let week = 0; week < 6; week++) {
            calendarHtml += "<tr>";

            // Loop through 7 days (Sunday to Saturday)
            for (let d = 0; d < 7; d++) {
                // Print empty cells before the first day of the month or after the last day
                if ((week === 0 && d < firstDayOfMonth) || day > daysInMonth) {
                    calendarHtml += '<td class="fc-day"></td>';
                } else {
                    // Check if the current day matches today's date
                    let isToday = (day === today.getDate() && month === today.getMonth() + 1 && year === today.getFullYear());
                    let isSunday = (d === 0); // Check if the day is Sunday (0 is Sunday)

                    // Check if the current day is a festival date
                    let formattedDate = `${month < 10 ? '0' + month : month}-${day < 10 ? '0' + day : day}`;
                    let festival = festivalDates.find(f => f.date === formattedDate); // Find the festival by date

                    // Apply classes for today, Sunday, and festival
                    let festivalHtml = festival ? `<div class="festival-name-box">${festival.name}</div>` : '';
                    calendarHtml += `<td class="fc-day ${isToday ? 'today' : ''} ${isSunday ? 'sunday' : ''}">
                        <span class="fc-day-number">${day}</span>${festivalHtml}</td>`;

                    day++;
                }
            }

            calendarHtml += "</tr>";

            // Break out of the loop if we've printed all days
            if (day > daysInMonth) break;
        }

        calendarHtml += '</tbody></table>';

        // Insert the generated calendar into the calendar content div
        document.getElementById('calendar-content').innerHTML = calendarHtml;
    }


    // Initial generation of the calendar
    generateCalendar(currentMonth, currentYear);

    // Handle the Next button click
    document.getElementById('nextMonth').addEventListener('click', () => {
        currentMonth++;
        if (currentMonth > 12) {
            currentMonth = 1;
            currentYear++;
        }
        generateCalendar(currentMonth, currentYear);
    });

    // Handle the Previous button click
    document.getElementById('prevMonth').addEventListener('click', () => {
        currentMonth--;
        if (currentMonth < 1) {
            currentMonth = 12;
            currentYear--;
        }
        generateCalendar(currentMonth, currentYear);
    });
</script>






<?php include('template/dashboard-footer.php'); ?>