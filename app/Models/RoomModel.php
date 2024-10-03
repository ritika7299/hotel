<?php

namespace App\Models;

use CodeIgniter\Model;

class RoomModel extends Model
{
    protected $table = 'rooms';
    protected $primaryKey = 'id';
    protected $allowedFields = ['floor_type', 'room_no', 'room_type', 'status', 'price'];

}