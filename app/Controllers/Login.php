<?php

namespace App\Controllers;
use App\Models\ReceptionistModel;

class Login extends BaseController
{

    public function index()
    {

        return view('helpdesk_layouts/login');
    }
    public function loginAuth()
    {
        $session = session();
        $model = new ReceptionistModel();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $admin = $model->where('email', $email)->first();
        if ($admin && $admin['password'] === $password) {
            $session->set('logged_in', true);
            return redirect()->to('login/dashboard');
        } else {
            $session->setFlashdata('error', 'Invalid username or password');
            return redirect()->to('login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('login');
    }

    public function dashboard()
    {
        return view('helpdesk_layouts/dashboard');
    }

    // public function data_table()
    // {
    //     return view('helpdesk_layouts/data');

    // }
    // public function rooms_availability()
    // {
    //     return view('admin_layouts/rooms-available');
    // }


}