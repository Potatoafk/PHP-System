<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\AdminModel;

class AuthController extends BaseController
{
    protected $userModel;
    protected $adminModel;

    // Constructor to initialize the UserModel
    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->adminModel = new AdminModel();
    }

    public function user_login()
    {

        return view('auth/user_login', [
            'title' => 'User Login'
        ]);
    }

    public function process_login()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $this->userModel->where('email', $email)->first();

        if ($user && password_verify($password, $user['password'])) {
            // Start session and store user data
            $session = session();
            $session->set([
                'user_id' => $user['user_id'],
            ]);

            $data = [
                'first_name' => $user['first_name'],
            ];

            return redirect()->to(base_url('/user-page'))->with('success', 'Login successful');
        }

        return redirect()->back()->with('error', 'Invalid credentials');
    }



    // User Registration
    public function user_register()
    {
        return view('auth/user_signin', [
            'title' => 'User Registration'
        ]);
    }

    public function process_register()
    {
        $data = [
            'first_name' => $this->request->getPost('first_name'),
            'last_name' => $this->request->getPost('last_name'),
            'email' => $this->request->getPost('email'),
            'phone_no' => $this->request->getPost('phone_no'),
            'date_of_birth' => $this->request->getPost('date_of_birth'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
        ];

        $this->userModel->insert($data);
        return redirect()->to(base_url('/login'))->with('success', 'Registration successful');
    }


    public function logout()
    {
        $session = session();
        $session->destroy(); // Destroy the session to log out the user

        return redirect()->to(base_url('/login'))->with('success', 'Logged out successfully');
    }











    public function admin_login()
    {
        return view('auth/admin_login', [
            'title' => 'Admin Login'
        ]);
    }
    public function process_admin_login()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $admin = $this->adminModel->where('username', $username)->first();

        // log_message('debug', 'Admin login attempt with username: ' . $username);

        if ($admin && password_verify($password, $admin['password'])) {
            // Start session and store admin data
            $session = session();
            $session->set([
                'admin_id' => $admin['admin_id'],
                'username' => $admin['username'],
            ]);

            // log_message('debug', 'Admin ID from session: ' . $admin['admin_id']);

            return redirect()->to(base_url('/management'))->with('success', 'Login successful');
        }
        return redirect()->back()->with('error', 'Invalid credentials');
    }

    public function admin_logout()
    {
        $session = session();
        $session->destroy(); // Destroy the session to log out the admin

        return redirect()->to(base_url('/admin'))->with('success', 'Logged out successfully');
    }
}
