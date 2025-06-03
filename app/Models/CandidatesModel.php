<?php

namespace App\Models;

use CodeIgniter\Model;

class CandidatesModel extends Model
{
    protected $table = 'candidates';
    protected $primaryKey = 'ID';
    protected $allowedFields = [
        'candidate_name',
        'candidate_position',
        'candidate_party'
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


