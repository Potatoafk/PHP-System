<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'admin_table';
    protected $primaryKey = 'admin_id';
    protected $allowedFields = [
        'username',
        'password',
    ];

}
