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
        'election_id',
    ];

    public function getCandidatesByPosition($position)
    {
        return $this->where('candidate_position', $position)->findAll();
    }

    public function getAllCandidates()
    {
        return $this->findAll();
    }
}
