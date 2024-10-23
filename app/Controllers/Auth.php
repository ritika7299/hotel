<?php

namespace App\Controllers;

use App\Models\AuthModel;
use CodeIgniter\Controller;

class Auth extends Controller
{
    // register page view here 
    public function index()
    {
        return view('user_layouts/register');
    }
    public function store()
    {
        $session = session();

        // Validate input
        $validation = \Config\Services::validation();
        $validation->setRules([
            'name' => 'required|min_length[3]',
            'email' => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[6]',
            'cpass' => 'required|matches[password]',
        ]);

        if (!$this->validate($validation->getRules())) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $authModel = new AuthModel();

        // Hash the password
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        ];

        // Insert user data
        $authModel->insert($data);
        $session->setFlashdata('success', '<i class="fa fa-user-check"></i> Registration successfully!');
        return redirect()->to(site_url('auth/')); // Redirect to login
    }
    public function login()
    {
        return view('user_layouts/login');
    }
    public function authlogin()
    {
        $session = session();

        // Validate input
        $validation = \Config\Services::validation();
        $validation->setRules([
            'email' => 'required|valid_email',
            'password' => 'required|min_length[6]',
        ]);

        if (!$this->validate($validation->getRules())) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $authModel = new AuthModel();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Check if the user exists
        $user = $authModel->where('email', $email)->first();

        if ($user && password_verify($password, $user['password'])) {
            // Set session data
            $session->set([
                'id' => $user['id'],
                'name' => $user['name'],
                'email' => $user['email'],
                'isLoggedIn' => true
            ]);

            return redirect()->to(site_url('auth/dashboard')); // Redirect to a protected area
        } else {
            $session->setFlashdata('error', 'Invalid email or password');
            return redirect()->back()->withInput();
        }
    }
    public function logout()
    {
        $session = session();
        $session->destroy(); // Destroy session
        return redirect()->to(site_url('auth/login')); // Redirect to login page
    }

    public function forgotPassword()
    {
        return view('user_layouts/forgot_password');
    }
    public function do_forgotPassword()
    {
        // Validate input
        $validation = \Config\Services::validation();
        $validation->setRules(['email' => 'required|valid_email']);

        if (!$this->validate($validation->getRules())) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $email = $this->request->getPost('email');
        $authModel = new AuthModel();

        // Check if email exists
        $user = $authModel->where('email', $email)->first();
        if (!$user) {
            return redirect()->back()->with('error', 'Email not found.');
        }

        // Generate token
        $token = bin2hex(random_bytes(50)); // Generate a random token
        $authModel->saveToken($user['id'], $token); // Implement this method to save the token and expiration

        // Send email with reset link
        $resetLink = site_url('auth/resetPassword/' . $token);
        // Send email logic here...

        return redirect()->to('/')->with('success', 'Check your email for a password reset link.');
    }

    public function resetPassword($token)
    {
        // Validate the token and check expiration
        $authModel = new AuthModel();
        $user = $authModel->validateToken($token); // Implement this method to validate the token

        if (!$user) {
            return redirect()->to('/')->with('error', 'Invalid or expired token.');
        }

        // If valid, show the reset password form
        return view('reset_password_form', ['token' => $token]);
    }
    public function updatePassword()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'password' => 'required|min_length[6]',
            'cpass' => 'required|matches[password]',
        ]);

        if (!$this->validate($validation->getRules())) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $token = $this->request->getPost('token');
        $newPassword = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);

        $authModel = new AuthModel();
        $user = $authModel->validateToken($token); // Validate token again

        if ($user) {
            $authModel->updatePassword($user['id'], $newPassword); // Update the user's password
            $authModel->deleteToken($token); // Clean up the token

            return redirect()->to('/')->with('success', 'Password successfully updated.');
        }

        return redirect()->to('/')->with('error', 'Failed to update password.');
    }
    public function dashboard()
    {
        return view('user_layouts/dashboard');

    }
    public function availability()
    {
        return view('user_layouts/checkRooms_view');
    }
    public function reservation()
    {
        return view('user_layouts/reservation_view');

    }
    public function booking()
    {
        return view('user_layouts/booking_view');

    }
    public function invoice()
    {
        return view('user_layouts/invoice_view');

    }
    public function complaints()
    {
        return view('user_layouts/complaints_view');

    }




}
