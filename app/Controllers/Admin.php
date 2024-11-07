<?php

namespace App\Controllers;
use App\Models\AdminModel;

class Admin extends BaseController
{
    // view admin login page 
    public function index()
    {

        return view('admin_layouts/login');
    }
    // admin registration 
    public function register()
    {
        return view('admin_layouts/register');
    }
    public function create()
    {
        helper(['form']);
        if ($this->request->getMethod() === 'post') {
            // $validation = \Config\Services::validation();
            // Validate form input
            $this->validate([
                'name' => 'required|min_length[3]',
                'email' => 'required|valid_email|is_unique[users.email]',
                'password' => 'required|min_length[8]',
                'cpass' => 'matches[password]'
            ]);
            if ($this->validator->getErrors()) {
                return redirect()->back()->withInput()->with('validation', $this->validator);
            }
            // Save user data
            $adminModel = new AdminModel();
            $data = [
                'name' => $this->request->getPost('name'),
                'email' => $this->request->getPost('email'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            ];
            $adminModel->save($data);
            session()->setFlashdata('success', 'Registration successful! Please log in.');

            return redirect()->to('/admin'); // Change to your desired redirect after registration
        }
        return view('admin/register'); // Load the registration view
    }

    // admin login function 
    public function loginAuth()
    {
        $session = session();
        $model = new AdminModel();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $admin = $model->where('email', $email)->first();

        if ($admin && $admin['password'] === $password) {
            $session->set('logged_in', true);
            return redirect()->to('admin/dashboard');
        } else {
            $session->setFlashdata('error', '<i class="fa fa-warning"></i> Invalid username or password');
            return redirect()->to('admin');
        }
    }

    // admin logout function
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('admin');
    }

    // admin dashboard function
    public function dashboard()
    {
        return view('admin_layouts/dashboard');
    }
    // reservations function
    public function reservations()
    {
        return view('admin_layouts/reservations-management');
    }
    // room function
    // public function room()
    // {
    //     return view('admin_layouts/room-management');
    // }
    // guest function
    public function guest()
    {
        return view('admin_layouts/guest-management');
    }
    // staff functions start from here 

    // staff functions end from here 
    // calender function
    public function calendar()
    {
        return view('admin_layouts/calendar_view');
    }
    // report function
    public function report()
    {
        return view('admin_layouts/reports-management');
    }
    // settings function
    public function settings()
    {
        return view('admin_layouts/settings');
    }
    // test function 
    public function test()
    {
        return view('layouts/default');
    }
    // running function 
    // public function test()
    // {
    //     return view('admin_layouts/main');
    // }
}