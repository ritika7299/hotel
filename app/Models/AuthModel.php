<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $table = 'users'; // table name
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'password', 'reset_token']; // fields want to insert

}
