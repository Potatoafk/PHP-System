<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\ElectionModel;
use App\Models\CandidatesModel;
use App\Models\VotesModel;

class Home extends BaseController
{

    protected $userModel;
    protected $electionModel;
    protected $candidatesModel;
    protected $votesModel;

    // Constructor to initialize models
    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->electionModel = new ElectionModel();
        $this->candidatesModel = new CandidatesModel();
        $this->votesModel = new VotesModel();
    }


    public function index()
    {
        return view('homepage', [
            'title' => 'Home'
        ]); // Load the homepage view
    }


    public function user_page()
    {
        //User Model to get user data
        $user_id = session()->get('user_id');
        $user = $this->userModel->find($user_id);

        // Election Model to get election data
        $elections = $this->electionModel->orderBy('election_id', 'DESC')->findAll();


        // Candidates Model to get candidates data
        $president = $this->candidatesModel->getCandidatesByPosition('President');
        $vice_president = $this->candidatesModel->getCandidatesByPosition('Vice-President');
        $secretary = $this->candidatesModel->getCandidatesByPosition('Secretary');
        $treasurer = $this->candidatesModel->getCandidatesByPosition('Treasurer');
        $auditor = $this->candidatesModel->getCandidatesByPosition('Auditor');

        $data = [
            'user' => $user,

            'elections' => $elections,

            'president' => $president,
            'vice_president' => $vice_president,
            'secretary' => $secretary,
            'treasurer' => $treasurer,
            'auditor' => $auditor,

            // Title for the page
            'title' => 'User Page'
        ];

        return view('user/user_page', $data); // Load the user page view
    }
}
