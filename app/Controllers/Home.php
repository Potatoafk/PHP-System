<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function admin(): string
    {
        return view('admin/admin');
    }

    public function candidates(): string
    {
        return view('admin/candidates_view');
    }
}
