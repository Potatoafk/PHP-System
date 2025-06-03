<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('homepage', [
            'title' => 'Home'
        ]); // Load the homepage view
    }

    public function user_page()
    {
        return view('user/user_page', [
            'title' => 'User Page'
        ]); // Load the user page view
    }
}
