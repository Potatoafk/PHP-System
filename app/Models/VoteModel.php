<?php

namespace App\Models;

use CodeIgniter\Model;

class VoteModel extends Model
{
    protected $table = 'vote';
    protected $primaryKey = 'vote_id';
    protected $allowedFields = [
        'vote_id',
        'president',
        'vice_president',
        'secretary',
        'treasurer',
        'auditor',
        'pio'
    ];

    public function saveVote($data)
    {
        return $this->insert($data);
    }

    // public function getVotedCandidates()
    // {
    //     return $this->selectMax('vote_id')->first();
    // }

    // public function deleteVote($vote_id)
    // {
    //     return $this->delete($vote_id);
    // }
}
