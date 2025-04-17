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
}
