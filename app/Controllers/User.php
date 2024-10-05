<?php

namespace App\Controllers;
use App\Models\UserModel;


class User extends BaseController
{
    public $helpers = ['form'];
    public function index()
    {
        echo view('admin_layouts/staff-management');
    }
    public function register()
    {
        echo view('users_layouts/register');
    }
    public function store() // Registration data store into the database
    {
        // Start the session
        session();

        // Load the form helper
        helper('form');

        // Get the validation service
        $validation = \Config\Services::validation();

        // Set validation rules
        $validation->setRules([
            'name' => 'required|min_length[1]',
            'email' => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[6]',
            'cpass' => 'required|matches[password]'
        ]);

        // Check if validation fails
        if (!$validation->withRequest($this->request)->run()) {
            // Return to the registration form with validation errors
            return view('users_layouts/register', ['validation' => $validation]);
        }

        // Get the password from the request
        $password = $this->request->getPost('password');
        $cpass = $this->request->getPost('cpass');

        // Validate passwords again
        if (empty($password) || empty($cpass)) {
            return view('users_layouts/register', ['validation' => $validation, 'error' => 'Password or confirm password is not received']);
        }

        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Check if password hashing was successful
        if (!$hashedPassword) {
            return view('users_layouts/register', ['validation' => $validation, 'error' => 'Password hashing failed']);
        }

        // Create a new instance of the UserModel
        $userModel = new UserModel();

        // Save the user data, including the hashed password
        $userModel->save([
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'password' => $hashedPassword
        ]);

        // Store user data in session
        session()->set([
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email')
        ]);

        // Set flash data for success message
        session()->setFlashdata('success', '<i class="fa fa-check"></i> Signup successfully');

        // Redirect to the registration page with a success message
        return redirect()->to('user/register');
    }

    public function do_login()
    {
        // Load the form helper
        helper('form');

        // Get the validation service
        $validation = \Config\Services::validation();

        // Set validation rules
        $validation->setRules([
            'email' => 'required|valid_email',
            'password' => 'required'
        ]);

        // Check if validation fails
        if (!$validation->withRequest($this->request)->run()) {
            // Return to the login form with validation errors
            return view('users_layouts/login', ['validation' => $validation]);
        }
        // Get the email and password from the request
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Create a new instance of the UserModel
        $userModel = new UserModel();

        // Retrieve user by email
        $user = $userModel->where('email', $email)->first();

        if ($user && password_verify($password, $user['password'])) {
            // Password is correct
            // Store user data in session
            session()->set([
                'name' => $user['name'],
                'email' => $user['email']
            ]);

            // Set flash data for success message
            // session()->setFlashdata('success', '<i class="fa fa-check"></i> Login successful');

            // Redirect to a protected page or dashboard
            return redirect()->to('user/dashboard');
        } else {
            // Password is incorrect
            session()->setFlashdata('msg', 'Invalid email or password');
            return redirect()->to('user');
        }
    }


    public function logout()
    {
        // Start the session
        session();

        // Destroy the session
        session()->destroy();

        // Optionally set a flash message
        session()->setFlashdata('success', '<i class="fa fa-check"></i> You have been logged out successfully');

        // Redirect to the login page or home page
        return redirect()->to('user');
    }



    public function reset_password()
    {
        return view('users_layouts/reset-password');

    }

    public function dashboard()
    {
        return view('users_layouts/dashboard');

    }
    public function invoice()
    {
        return view('users_layouts/invoice');

    }
    public function reservation()
    {
        return view('users_layouts/reservation');

    }

}