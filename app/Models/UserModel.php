<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'user_id';
    protected $allowedFields = [
        'first_name',
        'last_name',
        'email',
        'phone_no',
        'date_of_birth',
        'password',
    ];

}
