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

        // Get election results for each election
        $results = [];
        foreach ($elections as $election) {
            $results[$election['election_id']] = $this->votesModel
                ->select('candidates_table.candidate_id, candidates_table.candidate_first_name, candidates_table.candidate_last_name, candidates_table.candidate_position, COUNT(*) as vote_count')
                ->join('candidates_table', 'votes_table.candidate_id = candidates_table.candidate_id')
                ->where('candidates_table.election_id', $election['election_id'])
                ->groupBy('votes_table.candidate_id')
                ->findAll();
        }

        $data = [
            'user' => $user,

            'elections' => $elections,

            'president' => $president,
            'vice_president' => $vice_president,
            'secretary' => $secretary,
            'treasurer' => $treasurer,
            'auditor' => $auditor,

            'results' => $results,

            // Title for the page
            'title' => 'User Page'
        ];

        return view('user/user_page', $data); // Load the user page view
    }

    public function vote_logic()
    {
        $user_id = session()->get('user_id');
        $election_id = $this->request->getPost('election_id');

        $allReadyVoted = $this->votesModel
            ->where('user_id', $user_id)
            ->where('election_id', $election_id)
            ->countAllResults();

        if ($allReadyVoted > 0) {
            return redirect()->to(base_url('/user-page'))->with('message', ['error' => 'You have already voted in this election.']);
        }

        $candidates = [
            'president' => $this->request->getPost('president'),
            'vice_president' => $this->request->getPost('vice_president'),
            'secretary' => $this->request->getPost('secretary'),
            'treasurer' => $this->request->getPost('treasurer'),
            'auditor' => $this->request->getPost('auditor')
        ];

        foreach ($candidates as $candidate_id) {
            $this->votesModel->insert([
                'candidate_id' => $candidate_id,
                'user_id' => $user_id,
                'election_id' => $election_id
            ]);
        }
        return redirect()->to(base_url('/user-page'))->with('message', ['success' => 'Successfully voted! Thank you']);
    }

    public function updateProfile()
    {
        $user_id = session()->get('user_id');
        $data = [
            'first_name' => $this->request->getPost('first_name'),
            'last_name' => $this->request->getPost('last_name'),
            'email' => $this->request->getPost('email'),
            'phone_no' => $this->request->getPost('phone_no'),
        ];

        if ($this->userModel->update($user_id, $data)) {
            return redirect()->to(base_url('/user-page'))->with('message', ['success' => 'Profile updated successfully!']);
        } else {
            return redirect()->to(base_url('/user-page'))->with('message', ['error' => 'Failed to update profile.']);
        }
    }
}
