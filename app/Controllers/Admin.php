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
            $session->setFlashdata('error', 'Invalid username or password');
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
    public function room()
    {
        return view('admin_layouts/room-management');
    }
    // guest function
    public function guest()
    {
        return view('admin_layouts/guest-management');
    }
    // staff function
    public function staff()
    {
        return view('admin_layouts/staff-management');
    }
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