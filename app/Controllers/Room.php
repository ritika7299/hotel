<?php

namespace App\Controllers;

use App\Models\RoomModel;

class Room extends BaseController
{
    public function index()
    {
        $model = new RoomModel();
        $data['rooms'] = $model->findAll();
        return view('admin_layouts/room-management', $data);
    }
    public function add()
    {
        // Load the model
        $model = new RoomModel();

        // Validate the input
        if ($this->request->getMethod() === 'post') {
            $rules = [
                "floor_type" => ["rules" => "required|in_list[ground,first,second]"],
                "room_no" => ["rules" => "required|in_list[101,102,103,104,201,202,203,204,301,302,304]"],
                "room_type" => ["rules" => "required|in_list[single,double,deluxe]"],
                "status" => ["rules" => "required|in_list[available,not-available]"],
                "price" => ["rules" => "required|min_length[2]"],
            ];

            if ($this->validate($rules)) {
                // Insert data into database
                $data = [
                    'floor_type' => $this->request->getPost('floor_type'),
                    'room_no' => $this->request->getPost('room_no'),
                    'room_type' => $this->request->getPost('room_type'),
                    'status' => $this->request->getPost('status'),
                    'price' => $this->request->getPost('price'),
                ];

                $model->insert($data);

                return $this->response->setJSON(['success' => true]);
            } else {
                return $this->response->setJSON(['success' => false, 'message' => implode(", ", $this->validator->getErrors())]);
            }
        }
    }

    public function edit($id)
    {
        $model = new RoomModel();
        $data['room'] = $model->find($id);
        return view('admin_layouts/room-management', $data);
    }

    public function update($id)
    {
        $model = new RoomModel();
        $data = [
            'floor_type' => $this->request->getPost('floor_type'),
            'room_no' => $this->request->getPost('room_no'),
            'room_type' => $this->request->getPost('room_type'),
            'status' => $this->request->getPost('status'),
            'price' => $this->request->getPost('price'),
        ];
        $model->update($id, $data);
        return redirect()->to('/room');
    }
    public function delete($id)
    {
        $model = new RoomModel();
        $model->delete($id);
        return redirect()->to('/room');
    }
}
