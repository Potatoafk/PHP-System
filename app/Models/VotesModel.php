<?php

namespace App\Models;

use CodeIgniter\Model;

class VotesModel extends Model
{
    protected $table = 'votes_table';
    protected $primaryKey = 'vote_id';
    protected $allowedFields = [
        'user_id',
        'candidate_id',
        'election_id',
        'vote_time',
    ];

}
