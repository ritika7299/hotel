<div class="main-container">
    <!-- inner content -->
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <!-- page header -->
            <!-- <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>Dashboard</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Dashboard
                                    </li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-md-6 col-sm-12 text-right">
                            <div class="dropdown">
                                <a class="btn btn-primary dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown">
                                    January 2018
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Export List</a>
                                    <a class="dropdown-item" href="#">Policies</a>
                                    <a class="dropdown-item" href="#">View Assets</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            <!-- page header -->

            <!--customer and bookings details -->
            <div class="pd-20 card-box mb-30">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 mb-30">
                        <div class="pd-30 height-100-p">
                            <h4 class="mb-30 h4">Guest Details</h4>
                            <div id="guest-information" class="guest-information" data-highcharts-chart="1">
                                <form>
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Enter Name">
                                    </div>
                                    <div class="form-group">

                                        <input class="form-control" value="" type="email" placeholder="Enter Email">
                                    </div>
                                    <div class=" form-group">
                                        <input class="form-control" value="" type="tel" placeholder="Enter Mobile">
                                    </div>
                                    <div class=" form-group">
                                        <select class="form-control">
                                            <option placeholder="">Select ID</option>
                                            <option id="vo">Voter ID</option>
                                            <option id="ac">Aadhaar Card</option>
                                            <option id="pc">Pan Card</option>
                                            <option id="pp">Passport</option>
                                        </select>
                                    </div>
                                    <div class=" form-group">
                                        <input class="form-control" value="" type="tel" placeholder="Enter Id numbers">
                                    </div>
                                    <div class=" form-group">
                                        <input class="form-control" value="" type="tel" placeholder="Enter Address">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 mb-30">
                        <div class="pd-30 height-100-p">
                            <h4 class="mb-30 h4">Booking Information</h4>
                            <div id="chart" class="chart" data-highcharts-chart="0">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class=" form-group">
                                                <label>Check-In</label>
                                                <input class="form-control" value="" type="date">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class=" form-group">
                                                <label>Check-Out</label>
                                                <input class="form-control" value="" type="date">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class=" form-group">
                                                <select class="form-control">
                                                    <option placeholder="">Select Room type</option>
                                                    <option id="vo">Single</option>
                                                    <option id="ac">Double</option>
                                                    <option id="pc">Deluxe</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                                <div class="row mt-1">
                                    <div class="col-md-12 col-sm-12">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-bold">Check-In</th>
                                                    <th class="text-bold">Check-Out</th>
                                                    <th class="text-bold">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>07.08.2024</td>
                                                    <td>08.08.2024</td>
                                                    <td>1 day</td>

                                                </tr>
                                                <tr>
                                                    <td>1000/-</td>
                                                    <td>1000/-</td>
                                                    <td>2000/-</td>


                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="actions clearfix">
                    <a class="btn btn-primary float-right mt-2" href="#finish" role="menuitem" data-toggle="modal"
                        data-target="#booking-modal">Submit
                        <i class="icon-copy fa fa-paper-plane" aria-hidden="true"></i></a>
                </div>
            </div>
            <!--/customer and bookings details -->
            <!-- table of rooms -->
            <div class="card-box pb-10">
                <div class="h5 pd-20 mb-0">User List</div>
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <div class="row">
                        <div class="col-sm-12 col-md-6"></div>
                        <div class="col-sm-12 col-md-6"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="data-table table nowrap dataTable no-footer dtr-inline"
                                id="DataTables_Table_0" role="grid">
                                <thead>
                                    <tr role="row">
                                        <th class="table-plus" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="Name: activate to sort column descending">
                                            Name</th>
                                        <th class="" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="Gender: activate to sort column ascending">Email
                                        </th>
                                        <th class="" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="Weight: activate to sort column ascending">
                                            Mobile
                                            No.
                                        </th>
                                        <th class="" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="Assigned Doctor: activate to sort column ascending">
                                            Address</th>
                                        <th class="" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="Admit Date: activate to sort column ascending">
                                            Check-In</th>
                                        <th class="" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="Disease: activate to sort column ascending">
                                            Check-Out
                                        </th>
                                        <th class="datatable-nosort sorting_disabled" rowspan="1" colspan="1"
                                            aria-label="Actions">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr role="row" class="odd">
                                        <td class="table-plus sorting_1" tabindex="0">
                                            <div class="name-avatar d-flex align-items-center">
                                                <div class="txt">
                                                    <div class="weight-600">Doris L. Larson</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>dyer@gmail.com</td>
                                        <td>9958311017</td>
                                        <td>H.no. 40 Post office wali gali, Bazaria, Ghaziabad</td>
                                        <td>16-08-2024</td>
                                        <td>
                                            18-08-2024
                                        </td>
                                        <td>
                                            <div class="table-actions">
                                                <a href="#" data-color="#265ed7" style="color: rgb(38, 94, 215);"><i
                                                        class="icon-copy dw dw-edit2"></i></a>
                                                <a href="#" data-color="#e95959" style="color: rgb(233, 89, 89);"><i
                                                        class="icon-copy dw dw-delete-3"></i></a>
                                                <a href="#" data-color="#708090" style="color: rgb(112, 128, 144);"><i
                                                        class="icon-copy dw dw-eye"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /table of rooms -->

            <!-- Booking successfully modal -->
            <div class="modal fade" id="booking-modal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body text-center font-18">
                            <h3 class="mb-20">Booking successfully!</h3>
                            <div class="mb-30 text-center">
                                <img src="<?php echo site_url(); ?>public/backend/vendors/images/success.png">
                            </div>
                        </div>
                        <div class="modal-footer justify-content-center">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">
                                Done
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Booking successfully modal -->
            <!-- footer wrap -->
            <div class="footer-wrap pd-20 mb-20 mt-3 card-box">
                This theme design by
                <a href="https://github.com/dropways" target="_blank">ABC</a>
            </div>
            <!-- footer wrap -->

        </div>

    </div>
    <!-- /inner content -->
</div>