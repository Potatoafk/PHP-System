<?php
namespace App\Controllers;

use App\Models\CandidatesModel;

class Candidates extends BaseController
{
    public function index()
    {
        $model = new CandidatesModel();
        $data['candidates'] = $model->findAll(); // fetch all users

        return view('admin/admin', $data);
    }
}
