<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'admininfo';
    protected $primaryKey = 'id';
    protected $allowedFields = ['email', 'password'];
}