<?php
namespace App\Models;

use CodeIgniter\Model;

class CandidatesModel extends Model
{
    protected $table = 'candidates'; // Your table name in phpMyAdmin
    protected $primaryKey = 'ID'; // Your table’s primary key
    protected $allowedFields = ['candidate_name', 'candidate_position', 'candidate_party']; // Add your actual columns here
}
