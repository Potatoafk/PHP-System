<?php

namespace App\Controllers;
use App\Models\UserModel;

class Home extends BaseController
{

    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        return view('homepage', [
            'title' => 'Home'
        ]); // Load the homepage view
    }

    public function user_page()
    {
        $user_id = session()->get('user_id');
        $user = $this->userModel->find($user_id);

        $data = [
            'user' => $user,
            'title' => 'User Page'
        ];

        return view('user/user_page', $data); // Load the user page view
    }
}
