<?php

namespace App\Controllers;

use App\Models\CandidatesModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function admin(): string
    {
        $model = new CandidatesModel();
        $data['candidates'] = $model->findAll(); // fetch all candidates
        return view('admin/admin', $data);
    }

    public function candidates(): string
    {   
        $model = new CandidatesModel();
        $data['candidates'] = $model->findAll(); // fetch all candidates
        return view('admin/candidates_view', $data);
    }
}
