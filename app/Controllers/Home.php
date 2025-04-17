<?php

namespace App\Controllers;

use App\Models\CandidatesModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('landingpage');
    }
}
