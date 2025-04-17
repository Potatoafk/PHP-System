<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\CandidatesModel;

class Candidates extends BaseController
{
    public function admin_dashboard(): string
    {
        $model = new CandidatesModel();
        $data['candidates'] = $model->findAll(); // fetch all candidates dashboard
        return view('admin/admin', $data, ['title' => 'Dashboard']);
    }

    public function candidates_view(): string
    {   
        $model = new CandidatesModel();
        $data['candidates'] = $model->findAll(); // fetch all candidates vandidates table view
        return view('admin/candidates_view', $data, ['title' => 'Candidates']);
    }
}
