<?php

namespace App\Controllers;

use App\Models\RoomModel;

class Room extends BaseController
{
    // index function
    public function index()
    {
        $model = new RoomModel();
        $data['rooms'] = $model->orderBy('created_at', 'DESC')->findAll(); // Fetch all rooms records
        return view('admin_layouts/rooms_view', $data); // Pass data to the view
    }
    // add details function 
    /*public function addRoom()
    {
        // automatically session start
        session()->start();

        $model = new RoomModel();
        $existingRoom = RoomModel->checkRoomExists($floor, $room_no);

        if ($existingRoom) {
            // If room already exists, return error
            echo json_encode([
                'status' => 'error',
                'message' => 'This room already exists in the database.'
            ]);
            return;
        }
        // Get data from the AJAX request
        $data = [
            'floor' => $this->request->getPost('floor'),
            'room_no' => $this->request->getPost('room_no'),
            'room_type' => $this->request->getPost('room_type'),
            'members' => $this->request->getPost('members'),
            'status' => $this->request->getPost('status'),
            'price' => $this->request->getPost('price'),
        ];
        // Insert data into the database
        if ($model->insert($data)) {
            // Set a flashdata message
            session()->setFlashdata('success', 'Room added successfully!');
            return $this->response->setJSON([
                'status' => 'success',
                'message' => 'Room added successfully'
            ]);
        } else {
            session()->setFlashdata('error', 'Failed to add room details.');
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Failed to add room details.'
            ]);
        }
    }*/
    public function addRoom()
    {
        // Automatically start session (if not already started)
        session()->start();

        // Initialize RoomModel
        $model = new RoomModel();

        // Get floor and room_no from POST data
        $floor = $this->request->getPost('floor');
        $room_no = $this->request->getPost('room_no');

        // Check if the room already exists in the database
        $existingRoom = $model->checkRoomExists($floor, $room_no);  // Fix here: Use $model instance

        if ($existingRoom) {
            // If the room already exists, return an error message
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'This room already exists in the database, try another one.'
            ]);
        }

        // Get all other data from the POST request
        $data = [
            'floor' => $floor,
            'room_no' => $room_no,
            'room_type' => $this->request->getPost('room_type'),
            'members' => $this->request->getPost('members'),
            'status' => $this->request->getPost('status'),
            'price' => $this->request->getPost('price'),
        ];

        // Insert the room into the database
        if ($model->insert($data)) {
            // Set flashdata for success
            session()->setFlashdata('success', 'Room added successfully!');

            // Return success response in JSON format
            return $this->response->setJSON([
                'status' => 'success',
                'message' => 'Room added successfully.'
            ]);
        } else {
            // Set flashdata for error
            session()->setFlashdata('error', 'Failed to add room details.');

            // Return error response in JSON format
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Failed to add room details.'
            ]);
        }
    }
    public function deleteRoom($roomId)
    {
        $model = new RoomModel();

        try {
            // Delete the room by ID
            $deleted = $model->delete($roomId);

            if ($deleted) {
                return $this->response->setJSON([
                    'success' => true,
                    'message' => 'The room has been successfully deleted.'
                ]);
            } else {
                return $this->response->setJSON([
                    'success' => false,
                    'message' => 'Failed to delete the room. Please try again.'
                ]);
            }
        } catch (\Exception $e) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'An error occurred while deleting the room.'
            ]);
        }
    }

}

