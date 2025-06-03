<?php

namespace App\Models;

use CodeIgniter\Model;

class CandidatesModel extends Model
{
    protected $table = 'candidates_table';
    protected $primaryKey = 'candidate_id';
    protected $allowedFields = [
        'candidate_first_name',
        'candidate_last_name',
        'candidate_position',
        'candidate_vote_count',
    ];

    public function getCandidatesByPosition($position)
    {
        return $this->where('candidate_position', $position)->findAll();
    }

    public function getAllCandidates()
    {
        return $this->findAll();
    }

    // incremets the vote count for a candidate
    public function incrementVoteCount($candidateId)
    {
        $this->set('candidate_vote_count', 'candidate_vote_count + 1', false);
        $this->where('candidate_id', $candidateId);
        return $this->update();
    }
}
