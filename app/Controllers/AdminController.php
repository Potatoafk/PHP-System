<?php

namespace App\Controllers;
use App\Controllers\BaseController;

use App\Models\UserModel;
use App\Models\ElectionModel;
use App\Models\CandidatesModel;



class AdminController extends BaseController
{
    protected $userModel;
    protected $electionModel;
    protected $candidatesModel;

    // Constructor to initialize models
    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->electionModel = new ElectionModel();
        $this->candidatesModel = new CandidatesModel();
    }


    // Dashboard method to load the admin dashboard view
    public function management()
    {

        $voters = $this->userModel->findAll();

        $data = [
            'title' => 'Admin Dashboard',
            'voters' => $voters,
        ];

        return view('admin/admin_management', $data); // Load the admin dashboard view
    }


    // Voters method to load the voters list view
    public function voters()
    {
        // Fetch all users from the UserModel
        $voters = $this->userModel->findAll();

        $data = [
            'title' => 'Voters Management',
            'voters' => $voters,
        ];

        return view('admin/admin_voters', $data);
    }




    // Results method to load the election results view
    public function results()
    {
        $elections = $this->electionModel->orderBy('election_id', 'DESC')->findAll();
        $data = [
            'title' => 'Election Results',
            'elections' => $elections
        ];

        return view('admin/admin_results', $data); // Load the election results view
    }





    // Elections method to load the elections management view
    public function elections()
    {
        // Fetch all elections from the ElectionModel
        $elections = $this->electionModel->orderBy('election_id', 'DESC')->findAll();
        $data = [
            'title' => 'Elections Management',
            'elections' => $elections
        ];
        return view('admin/admin_elections', $data); // Load the elections management view
    }





    // Candidates method to load the candidates management view
    public function candidates()
    {
        // Fetch all candidates from the CandidatesModel
        $candidates = $this->candidatesModel->orderBy('candidate_id', 'DESC')->findAll();

        // Fetch all elections to populate the dropdown in the view
        $elections = $this->electionModel->findAll();
        $data = [
            'title' => 'Candidates Management',
            'candidates' => $candidates,
            'elections' => $elections
        ];

        return view('admin/admin_candidates', $data); // Load the candidates management view
    }

}
