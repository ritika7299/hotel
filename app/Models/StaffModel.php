<?php

namespace App\Models;

use CodeIgniter\Model;

class StaffModel extends Model
{
    protected $table = 'staff';
    protected $primaryKey = 'id';
    protected $foreignKey = 'empid';
    protected $allowedFields = ['fullname', 'empid', 'email', 'mobile', 'post'];

    public function deleteStaff($id)
    {
        return $this->db->table('staff')->delete(['id' => $id]); // Adjust table name as necessary
    }

}
