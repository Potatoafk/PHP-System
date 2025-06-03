<?php

namespace App\Models;

use CodeIgniter\Model;

class ElectionModel extends Model
{
    protected $table = 'election_table';
    protected $primaryKey = 'election_id';
    protected $allowedFields = [
        'election_title',
        'election_description',
        'election_created',
        'election_status'
    ];
}
