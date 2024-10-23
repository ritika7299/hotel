<?php

namespace App\Controllers;

use App\Models\RoomModel;

class Room extends BaseController
{
    // index function
    public function index()
    {
        $model = new RoomModel();
        $data['rooms'] = $model->findAll(); // Fetch all staff records
        return view('admin_layouts/rooms_view', $data); // Pass data to the view
        // return view('admin_layouts/staff_view');
    }
    // add details function 
    public function add_form_details()
    {
        $validation = \Config\Services::validation();
        helper(['form', 'url']);
        $response = ['success' => false, 'message' => ''];
        // Validate the input
        if (
            !$this->validate([
                'floor' => 'required',
                'room_no' => 'required',
                'room_type' => 'required',
                'status' => 'required',
                'price' => 'required|decimal',
            ])
        ) {
            $response['message'] = implode(', ', $this->validator->getErrors());
            return $this->response->setJSON($response);
        }
        // Process and save the data
        $model = new RoomModel();
        $data = [
            'floor' => $this->request->getPost('floor'),
            'room_no' => $this->request->getPost('room_no'),
            'room_type' => $this->request->getPost('room_type'),
            'status' => $this->request->getPost('status'),
            'price' => $this->request->getPost('price'),
        ];
        if ($model->save($data)) {
            $response['success'] = true;
            $response['message'] = 'Staff details added successfully!';
        } else {
            $response['message'] = 'Failed to add staff details.';
        }
        return $this->response->setJSON($response);
    }
    // insert data to the database 
    public function insert_data()
    {
        $session = session();

        // Basic session validation
        if (!$session->get('logged_in')) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Unauthorized access']);
        }

        $model = new RoomModel();

        $data = [
            'floor' => $this->request->getPost('floor'),
            'room_no' => $this->request->getPost('room_no'),
            'room_type' => $this->request->getPost('room_type'),
            'status' => $this->request->getPost('status'),
            'price' => $this->request->getPost('price'),
        ];

        // Validate data here
        if ($model->insert($data)) {
            return $this->response->setJSON(['status' => 'success']);
        } else {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Failed to insert data']);
        }
    }

    // delete room details
    public function delete($id)
    {
        $model = new RoomModel();

        if ($model->find($id)) {
            $model->delete($id);
            return $this->response->setJSON(['success' => true]);
        } else {
            return $this->response->setJSON(['success' => false, 'message' => 'Item not found.']);
        }
    }



}

