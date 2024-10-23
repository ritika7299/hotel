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