<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\UserModel;

class AuthController extends BaseController
{
    public function user_login()
    {
        return view('auth/user_login');
    }

    public function user_register()
    {
        $userModel = new UserModel();
        $data = [
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        ];
        $userModel->insert($data);
        return redirect()->to('/login')->with('success', 'User registered successfully.');
    }

    public function login_process()
    {
        $userModel = new UserModel();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $userModel->where('email', $email)->first();

        if ($user && password_verify($password, $user['password'])) {
            session()->set('logged_in', true);
            session()->set('user_id', $user['id']);
            return redirect()->to('/admin_dashboard')->with('success', 'Login successful.');
        } else {
            return redirect()->to('/login')->with('error', 'Invalid email or password.');
        }
    }

    // public function logout()
    // {
    //     session()->destroy();
    //     return redirect()->to('/login');
    // }
}