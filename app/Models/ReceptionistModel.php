<?php

namespace App\Models;

use CodeIgniter\Model;

class ReceptionistModel extends Model
{
    protected $table = 'receptionist_info';
    protected $primaryKey = 'id';
    protected $allowedFields = ['email', 'password'];

    
    
    
}