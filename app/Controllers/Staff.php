<?php

namespace App\Controllers;

use App\Models\StaffModel;

class Staff extends BaseController
{
    // staff index function 
    public function index()
    {
        $model = new StaffModel();
        $data['staff'] = $model->findAll(); // Fetch all staff records
        return view('admin_layouts/staff_view', $data); // Pass data to the view
    }
    // this is add staff details function 
    public function add_form_details()
    {
        helper(['form', 'url']);
        $response = ['success' => false, 'message' => ''];
        // input validation 
        if (
            !$this->validate([
                'fullname' => 'required|min_length[3]',
                'empid' => 'required|max_length[8]',
                'email' => 'required|valid_email',
                'mobile' => 'required|exact_length[10]',
                'post' => 'required',
            ])
        ) {
            $response['message'] = implode(', ', $this->validator->getErrors());
            return $this->response->setJSON($response);
        }
        // Process and save the data
        $model = new StaffModel();
        $data = [
            'fullname' => $this->request->getPost('fullname'),
            'empid' => $this->request->getPost('empid'),
            'email' => $this->request->getPost('email'),
            'mobile' => $this->request->getPost('mobile'),
            'post' => $this->request->getPost('post'),
        ];
        if ($model->save($data)) {
            $response['success'] = true;
            $response['message'] = 'Staff details added successfully!';
        } else {
            $response['message'] = 'Failed to add staff details.';
        }
        return $this->response->setJSON($response);
    }
    // this is update staff details
    public function update()
    {
        $staffModel = new StaffModel();

        $data = [
            'fullname' => $this->request->getPost('fullname'),
            'empid' => $this->request->getPost('empid'),
            'email' => $this->request->getPost('email'),
            'mobile' => $this->request->getPost('mobile'),
            'post' => $this->request->getPost('post'),
        ];

        // You might want to validate the data here

        $staffId = $this->request->getPost('staffId');

        if ($staffModel->update($staffId, $data)) {
            return $this->response->setJSON(['success' => true]);
        } else {
            return $this->response->setJSON(['success' => false, 'errors' => $staffModel->errors()]);
        }
    }
    public function delete_details()
    {
        $response = ['success' => false, 'message' => ''];

        // Get the ID from the POST request
        $id = $this->request->getPost('id');

        // Check if ID is provided and is a valid integer
        if (!$id || !is_numeric($id)) {
            $response['message'] = 'Invalid ID provided.';
            return $this->response->setJSON($response);
        }

        // Initialize the model
        $model = new StaffModel();

        // Attempt to find the record by ID
        $staff = $model->find($id);
        if (!$staff) {
            $response['message'] = 'Staff details not found.';
            return $this->response->setJSON($response);
        }

        // Attempt to delete the record
        if ($model->delete($id)) {
            $response['success'] = true;
            $response['message'] = 'Staff details deleted successfully!';
        } else {
            $response['message'] = 'Failed to delete staff details.';
        }

        return $this->response->setJSON($response);
    }

}

