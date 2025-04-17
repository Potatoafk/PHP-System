<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\CandidatesModel;

class User extends BaseController
{
    public function user(): string
    {
        return view('user/user_mainpage');
    }
}
