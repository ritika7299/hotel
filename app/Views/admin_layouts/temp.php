<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('#AddRoomDetailsform').on('submit', function (e) {
            e.preventDefault(); // Prevent the default form submission

            // Gather form data
            var formData = {
                floor: $('#floor').val(),
                room_no: $('#room_no').val(),
                room_type: $('#room_type').val(),
                status: $('#status').val(),
                price: $('#price').val(),
            };

            $.ajax({
                url: '/your-controller/submitForm', // Adjust the URL accordingly
                type: 'POST',
                data: formData,
                dataType: 'json',
                success: function (response) {
                    if (response.success) {
                        alert('Room details added successfully!');
                        // Optionally, clear the form or redirect
                    } else {
                        alert('Error: ' + response.message);
                    }
                },
                error: function (xhr, status, error) {
                    alert('An error occurred: ' + error);
                }
            });
        });
    });
</script>

<!-- backend controller -->
<!-- namespace App\Controllers;

use App\Models\RoomModel; // Assuming you have a model named RoomModel
use CodeIgniter\Controller;

class YourController extends Controller
{
    public function submitForm()
    {
        // Set validation rules
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'floor' => 'required',
            'room_no' => 'required',
            'room_type' => 'required',
            'status' => 'required',
            'price' => 'required|numeric'
        ]);

        if (!$this->validate($validation->getRules())) {
            return $this->response->setJSON([
                'success' => false,
                'message' => $this->validator->getErrors()
            ]);
        }

        // If validation passes, save to the database
        $model = new RoomModel();
        $data = [
            'floor' => $this->request->getPost('floor'),
            'room_no' => $this->request->getPost('room_no'),
            'room_type' => $this->request->getPost('room_type'),
            'status' => $this->request->getPost('status'),
            'price' => $this->request->getPost('price'),
        ];

        if ($model->insert($data)) {
            // Optionally set session data
            session()->setFlashdata('success', 'Room details added successfully!');
            return $this->response->setJSON(['success' => true]);
        } else {
            return $this->response->setJSON(['success' => false, 'message' => 'Failed to add room details.']);
        }
    }
}
 -->
<!-- backend modal -->
<!-- namespace App\Models;

use CodeIgniter\Model;

class RoomModel extends Model
{
    protected $table = 'rooms'; // Your database table
    protected $primaryKey = 'id'; // Your primary key
    protected $allowedFields = ['floor', 'room_no', 'room_type', 'status', 'price'];
}
 -->
<!-- ------------------------------ -->
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
                            <a href="<?php echo base_url('auth/dashbord') ?>">Home</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                            Reservation
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- form area -->
        <div class="pd-20 card-box mb-30">
            <div class="content clearfix">
                <div class="row">
                    <!-- check availability details -->
                    <div class="col-lg-6 col-md-12 col-sm-12 mb-30">
                        <div class="pd-30 height-100-p">
                            <h4 class="mb-30 h4">Guest Informations</h4>
                            <div id="guest-information" class="guest-information" data-highcharts-chart="1">
                                <!-- guest details form -->
                                <form action="" method="POST">
                                    <!-- user fullname -->
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Enter Full Name">
                                    </div>
                                    <!-- user email -->
                                    <div class="form-group">
                                        <input class="form-control" value="" type="email" placeholder="Enter Email">
                                    </div>
                                    <!-- user mobile  -->
                                    <div class=" form-group">
                                        <input class="form-control" value="" type="tel" placeholder="Enter Mobile"
                                            maxlength="10">
                                    </div>
                                    <!-- user address -->
                                    <div class=" form-group">
                                        <input class="form-control" value="" type="text" placeholder="Enter Address">
                                    </div>
                                    <!-- user selected id -->
                                    <div class=" form-group">
                                        <select class="form-control">
                                            <option placeholder="">Select ID</option>
                                            <option id="vo">Voter ID</option>
                                            <option id="ac">Aadhaar Card</option>
                                            <option id="pc">Pan Card</option>
                                            <option id="pp">Passport</option>
                                        </select>
                                    </div>
                                    <!-- user id no. -->
                                    <div class=" form-group">
                                        <input class="form-control" value="" type="text" placeholder="Enter ID No.">
                                    </div>
                                </form>
                                <!-- /guest details form -->
                            </div>
                        </div>
                    </div>
                    <!-- /check availability details -->
                    <!-- details table -->
                    <div class="col-lg-6 col-md-12 col-sm-12 mb-30">
                        <div class="pd-30 height-100-p">
                            <h4 class="mb-30 h4">Room Informations</h4>
                            <div id="guest-reservation" class="guest-reservation" data-highcharts-chart="1">
                                <!-- guest details form -->
                                <form action="" method="POST">
                                    <div class="form-group">
                                        <select class="form-control" id="floor" required>
                                            <option value="">Select floor</option>
                                            <option value="ground">Ground</option>
                                            <option value="first">First</option>
                                            <option value="second">Second</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" id="room_no" required>
                                            <option value="">Select Room no.</option>
                                            <!-- Room options will be populated dynamically -->
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" id="room_type" required>
                                            <option value="">Select Room type</option>
                                            <option value="Single">Single</option>
                                            <option value="Double">Double</option>
                                            <option value="Deluxe">Deluxe</option>
                                        </select>
                                    </div>
                                </form>
                                <!-- /guest details form -->
                            </div>
                        </div>
                    </div>
                    <!-- /details table -->
                </div>
                <div class="form-group">
                    <div class="pull-right">
                        <a href="#" class="btn btn-primary btn-sm scroll-click" rel="content-y" data-toggle="modal"
                            data-target="#submit-success-modal" role="button">Submit <i
                                class="icon-copy fa fa-paper-plane"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /form area -->
    </div>
</div>
<!-- /inner content -->