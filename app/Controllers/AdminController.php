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
        $elections = $this->electionModel->findall();

        $data = [
            'title' => 'Admin Dashboard',
            'voters' => $voters,
            'elections' => $elections,
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
    // Update a voter's information
    public function updateVoter($id)
    {
        // Prepare the data to update
        $data = [
            'first_name' => $this->request->getPost('first_name'),
            'last_name' => $this->request->getPost('last_name'),
            'email' => $this->request->getPost('email'),
        ];

        // Update the voter in the UserModel with where clause
        $this->userModel->where('user_id', $id)->update($id, $data);

        return redirect()->to(base_url('/voters'))->with('success', 'Voter updated successfully.');
    }

    // delete a voter
    public function deleteVoter($id)
    {
        // Delete the voter by ID
        $this->userModel->delete($id);
        return redirect()->to(base_url('/voters'))->with('success', 'Voter deleted successfully.');
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

    // Delete an election
    public function deleteElection($id)
    {
        // Delete the election by ID
        $this->electionModel->delete($id);
        return redirect()->to(base_url('/elections'))->with('success', 'Election deleted successfully.');
    }

    // update an election
    public function updateElection()
    {
        // Get the election ID from the request
        $electionId = $this->request->getPost('election_id');

        // Prepare the data to update
        $data = [
            'election_title' => $this->request->getPost('election_title'),
            'election_description' => $this->request->getPost('election_description'),
        ];

        // Update the election in the ElectionModel with where clause
        $this->electionModel->where('election_id', $electionId)->update($electionId, $data);

        return redirect()->to(base_url('/elections'))->with('success', 'Election updated successfully.');
    }

    // Create a new election
    public function createElection()
    {
        // Prepare the data to insert
        $data = [
            'election_title' => $this->request->getPost('election_title'),
            'election_description' => $this->request->getPost('election_description'),
        ];

        // Insert the new election into the ElectionModel
        $this->electionModel->insert($data);

        return redirect()->to(base_url('/elections'))->with('success', 'Election created successfully.');
    }





    // Candidates method to load the candidates management view
    public function candidates()
    {
        // Fetch all candidates from the CandidatesModel
        $candidates = $this->candidatesModel->select('candidates_table.*, election_table.election_title, election_table.election_id')
                    ->join('election_table', 'candidates_table.election_id = election_table.election_id')
                    ->orderBy('candidate_id', 'DESC')
                    ->findAll();

        // Fetch all elections to populate the dropdown in the view
        $elections = $this->electionModel->findAll();
        log_message('debug', json_encode($candidates));
        $data = [
            'title' => 'Candidates Management',
            'candidates' => $candidates,
            'elections' => $elections
        ];

        return view('admin/admin_candidates', $data); // Load the candidates management view
    }
    // Create a new candidate
    public function createCandidate()
    {
        // Prepare the data to insert
        $data = [
            'candidate_first_name' => $this->request->getPost('candidate_first_name'),
            'candidate_last_name' => $this->request->getPost('candidate_last_name'),
            'candidate_position' => $this->request->getPost('candidate_position'),
            'election_id' => $this->request->getPost('election_id'),
        ];
        log_message('debug', json_encode($data));

        // Insert the new candidate into the CandidatesModel
        $this->candidatesModel->insert($data);

        return redirect()->to(base_url('/candidates'))->with('success', 'Candidate created successfully.');
    }

    // Delete a candidate
    public function deleteCandidate($id)
    {
        // Delete the candidate by ID
        $this->candidatesModel->delete($id);
        return redirect()->to(base_url('/candidates'))->with('success', 'Candidate deleted successfully.');
    }
    // Update a candidate
    public function updateCandidate($id)
    {
        // Prepare the data to update
        $data = [
            'candidate_first_name' => $this->request->getPost('candidate_first_name'),
            'candidate_last_name' => $this->request->getPost('candidate_last_name'),
            'candidate_position' => $this->request->getPost('candidate_position'),
            'election_id' => $this->request->getPost('election_id'),
        ];

        // Update the candidate in the CandidatesModel with where clause
        $this->candidatesModel->where('candidate_id', $id)->update($id, $data);

        return redirect()->to(base_url('/candidates'))->with('success', 'Candidate updated successfully.');
    }

}
