<?php

namespace App\Controllers;

use App\Models\StaffModel;

class Staff extends BaseController
{
    // staff index function 
    public function index()
    {
        $model = new StaffModel();
        $data['staff'] = $model->orderBy('created_at', 'DESC')->findAll(); // Fetch all staff records
        return view('admin_layouts/staff_view', $data); // Pass data to the view
    }

    //    staff details add function
    public function add_form_details()
    {
        helper(['form', 'url']);
        $response = ['success' => false, 'message' => ''];

        // Combined input validation rules
        $validationRules = [
            'fullname' => 'required|min_length[3]',
            'email' => 'required|valid_email',
            'mobile' => 'required|exact_length[10]',
            'post' => 'required',
        ];

        if (!$this->validate($validationRules)) {
            $response['message'] = implode(', ', $this->validator->getErrors());
            return $this->response->setJSON($response);
        }

        // Generate a unique empid
        $empid = $this->generate_unique_empid();

        // Process and save the data
        $model = new StaffModel();
        $data = [
            'fullname' => $this->request->getPost('fullname'),
            'empid' => $empid,
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
    // Function to generate a unique empid
    private function generate_unique_empid()
    {
        $model = new StaffModel();
        $year = date('Y'); // Get the current year

        // Get the last employee ID of the current year
        $lastEmpId = $model->where('empid LIKE', "EMP$year%")->orderBy('empid', 'DESC')->first();

        // Determine the next sequence number
        if ($lastEmpId) {
            // Extract the numeric part and increment it
            $lastNumber = (int) substr($lastEmpId['empid'], -4);
            $nextNumber = $lastNumber + 1;
        } else {
            // Start from 1 if no entries exist
            $nextNumber = 1;
        }

        // Format the number to be four digits (e.g., 0001)
        $empidNumber = str_pad($nextNumber, 4, '0', STR_PAD_LEFT);
        $empid = "EMP$year$empidNumber";

        return $empid;
    }
    // get staff details function 
    public function get_staff_details($id)
    {
        $model = new StaffModel();
        $staff = $model->find($id); // Fetch staff details by ID

        if ($staff) {
            return $this->response->setJSON(['success' => true, 'staff' => $staff]);
        } else {
            return $this->response->setJSON(['success' => false, 'message' => 'Staff not found.']);
        }
    }
    // staff details update function
    public function update_staff()
    {
        helper(['form', 'url']);
        $response = ['success' => false, 'message' => ''];

        // Validation rules
        $validationRules = [
            'id' => 'required',
            'fullname' => 'required|min_length[3]',
            'email' => 'required|valid_email',
            'mobile' => 'required|exact_length[10]',
            'post' => 'required',
        ];

        // Validate input
        if (!$this->validate($validationRules)) {
            $response['message'] = implode(', ', $this->validator->getErrors());
            return $this->response->setJSON($response);
        }
        // Retrieve validated data
        $id = $this->request->getPost('id');
        $fullname = $this->request->getPost('fullname');
        $email = $this->request->getPost('email');
        $mobile = $this->request->getPost('mobile');
        $post = $this->request->getPost('post');

        // Update staff details
        $model = new StaffModel();
        $data = [
            'fullname' => $fullname,
            'email' => $email,
            'mobile' => $mobile,
            'post' => $post
        ];

        if ($model->update($id, $data)) {
            $response['success'] = true;
            $response['message'] = 'Staff details updated successfully!';
        } else {
            $response['message'] = 'Failed to update staff details.';
        }
        return $this->response->setJSON($response);
    }
    // staff details delete function

    public function delete_staff($id)
    {
        $model = new StaffModel();

        if ($model->delete($id)) {
            return $this->response->setJSON(['success' => true, 'message' => 'Staff deleted successfully!']);
        } else {
            return $this->response->setJSON(['success' => false, 'message' => 'Failed to delete staff.']);
        }
    }





}

