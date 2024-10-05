<?= $this->section('content') ?>
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
                            Reservation
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Simple Datatable start -->
        <div class="pd-20 card-box mb-30">
            <div class="clearfix mb-20">
                <div class="col-md-6 col-sm-12 text-right pull-right">
                    <div class="btn btn-info" data-toggle="modal" data-target="#reservation-modal">
                        Reservation <i class="micon fa fa-plus"></i>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th colspan="11" class="text-info">List</th>
                    </tr>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Mobile No.</th>
                        <th scope="col">ID</th>
                        <th scope="col">ID No.</th>
                        <th scope="col">Room Type</th>
                        <th scope="col">Members</th>
                        <th scope="col">Price</th>
                        <th scope="col">status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Ritika</td>
                        <td>ritika7@gmail.com</td>
                        <td>9958311017</td>
                        <td><span class="badge badge-secondary">Voter Card</span></td>
                        <td><span class="badge rounded-pill badge-info">VID1234</span></td>
                        <td>Single</td>
                        <td>4</td>
                        <td>1500/-</td>
                        <td><span class="badge badge-danger">
                                Check-In <i class="icon-copy fa fa-calendar-check-o"></i></span></td>
                        <td>
                            <div class="table-actions">
                                <a href="" data-color="#265ed7" data-toggle="modal" data-target="#update-room-modal"
                                    style="color: rgb(38, 94, 215)">
                                    <i class="icon-copy dw dw-edit2"></i>
                                </a>
                                <a href="#" data-color="#e95959" style="color: rgb(233, 89, 89)">
                                    <i class="icon-copy dw dw-delete-3"></i>
                                </a>

                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Sakshi</td>
                        <td>sakshi1@gmail.com</td>
                        <td>8851734531</td>
                        <td><span class="badge badge-secondary">Passport Card</span></td>
                        <td><span class="badge rounded-pill badge-info">Passport1234</span></td>
                        <td>Double</td>
                        <td>1</td>
                        <td>1000/-</td>
                        <td><span class="badge badge-success">
                                Check-Out <i class="icon-copy fa fa-calendar-check-o"></i></span></td>
                        <td>
                            <div class="table-actions">
                                <a href="" data-color="#265ed7" data-toggle="modal" data-target="#update-room-modal"
                                    style="color: rgb(38, 94, 215)">
                                    <i class="icon-copy dw dw-edit2"></i>
                                </a>
                                <a href="#" data-color="#e95959" style="color: rgb(233, 89, 89)">
                                    <i class="icon-copy dw dw-delete-3"></i>
                                </a>

                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- Simple Datatable End -->
        <!-- Models -->
        <!-- reservation modal -->
        <div class="modal fade" id="reservation-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg w-100">
                <div class="modal-content">
                    <div class="modal-header bg-info">
                        <h4 class="modal-title text-white" id="myLargeModalLabel">
                            Reservation
                        </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            ×
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- add form open function here -->
                        <div class="content clearfix">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12 mb-30">
                                    <div class="pd-30 height-100-p">
                                        <h4 class="mb-30 h4">Guest Details</h4>
                                        <div id="guest-information" class="guest-information" data-highcharts-chart="1">
                                            <form action="" method="POST">
                                                <div class="form-group">
                                                    <input class="form-control" type="text" placeholder="Enter Name">
                                                </div>
                                                <div class="form-group">
                                                    <input class="form-control" value="" type="email"
                                                        placeholder="Enter Email">
                                                </div>
                                                <div class=" form-group">
                                                    <input class="form-control" value="" type="tel"
                                                        placeholder="Enter Mobile">
                                                </div>
                                                <div class=" form-group">
                                                    <input class="form-control" value="" type="text"
                                                        placeholder="Enter Address">
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
                                                    <input class="form-control" value="" type="text"
                                                        placeholder="Enter ID No.">
                                                </div>


                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 mb-30">
                                    <div class="pd-30 height-100-p">
                                        <h4 class="mb-30 h4">Guest Details</h4>
                                        <div id="guest-information" class="guest-information" data-highcharts-chart="1">
                                            <form action="" method="POST">
                                                <div class="form-group">
                                                    <label class="mt-0">Check-In</label>
                                                    <input class="form-control" value="" type="date">
                                                </div>
                                                <div class="form-group">
                                                    <label class="mt-0">Check-Out</label>
                                                    <input class="form-control" value="" type="date">
                                                </div>
                                                <div class="form-group">
                                                    <input class="form-control" value="" type="text"
                                                        placeholder="No. of members">
                                                </div>
                                                <div class=" form-group">
                                                    <select class="form-control">
                                                        <option placeholder="">Select Room type</option>
                                                        <option id="vo">Single</option>
                                                        <option id="ac">Double</option>
                                                        <option id="pc">Deluxe</option>
                                                    </select>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /add form open function here  -->
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info" form="addRoomDetailsForm" id="#addroomdetails-modal">
                            Submit <i class="icon-copy fa fa-paper-plane"></i>
                        </button>
                    </div>
                    <!-- add close form -->
                </div>
            </div>
        </div>
        <!-- /add room details modal -->
        <!-- Update reservation modal -->
        <div class="modal fade" id="update-room-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            style="display: none;" aria-hidden="true">
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
                                        <select class="form-control" id="floor_type" required="">
                                            <option data-select2-id="11" value="">Select
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
                                        <select class="form-control" id="room_no" required="">
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
                                        <select class="form-control" id="room_type" required="">
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
                                        <select class="form-control" id="status" value="" required="">
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
                                        <input class="form-control" type="text" id="price" placeholder="Add Price"
                                            value="" required="">
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
        <!-- details-modal -->
        <div class="modal fade" id="roomdetails-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myLargeModalLabel">
                            Large modal
                        </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            ×
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Details</th>
                                </tr>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /details-modal -->
        <!-- models -->
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
<?= $this->endSection() ?>