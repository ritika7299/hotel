<?php
namespace App\Controllers;

use App\Models\RoomModel;
use CodeIgniter\Controller;

class RoomController extends Controller
{
    public function index()
    {
        $roomModel = new RoomModel();
        $data['rooms'] = $roomModel->findAll(); // Fetch all rooms from the database
        return view('admin_layouts/room-management', $data);// Make sure this matches your view file
    }
    public function saveRoomDetails()
    {
        $roomModel = new RoomModel();
        // Validate incoming request (you can customize this part)
        $validation = \Config\Services::validation();
        $validation->setRules([
            'floor' => 'required',
            'room_no' => 'required',
            'room_type' => 'required',
            'status' => 'required',
            'price' => 'required|decimal',
        ]);
        if (!$this->validate($validation->getRules())) {
            return $this->response->setJSON(['success' => false, 'message' => $validation->getErrors()]);
        }
        // Save data
        $data = [
            'floor' => $this->request->getPost('floor'),
            'room_no' => $this->request->getPost('room_no'),
            'room_type' => $this->request->getPost('room_type'),
            'status' => $this->request->getPost('status'),
            'price' => $this->request->getPost('price'),
        ];
        if ($roomModel->insert($data)) {
            return $this->response->setJSON(['success' => true]);   // if condition is true
        } else {
            return $this->response->setJSON(['success' => false, 'message' => 'Failed to save room details']); // if condition is false
        }
        // $roomModel->insert($data);
        // return $this->response->setJSON(['success' => true]);
    }
    // Function to edit room
    public function editRoom($id)
    {
        $roomModel = new RoomModel();
        $data = [
            'floor_type' => $this->request->getPost('floor_type'),
            'room_no' => $this->request->getPost('room_no'),
            'room_type' => $this->request->getPost('room_type'),
            'status' => $this->request->getPost('status'),
            'price' => $this->request->getPost('price'),
        ];
        $roomModel->update($id, $data);
        return redirect()->to('/roomcontroller');
    }

    // Function to delete room
    public function deleteRoom($id)
    {
        $roomModel = new RoomModel();
        $data['rooms'] = $roomModel->find($id);
        return view('admin_layouts/room-management', $data);
    }



}
