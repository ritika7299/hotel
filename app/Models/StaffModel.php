<?php

namespace App\Models;

use CodeIgniter\Model;

class StaffModel extends Model
{
    protected $table = 'staff';
    protected $primaryKey = 'id';
    protected $allowedFields = ['firstname', 'lastname', 'gender', 'age', 'email', 'mobile', 'address', 'post', 'card_id', 'idno'];

}