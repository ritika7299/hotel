<?php
namespace App\Models;

use CodeIgniter\Model;

class RoomModel extends Model
{
    protected $table = 'rooms'; // Replace with your actual table name
    protected $primaryKey = 'id'; // Replace with your primary key
    protected $allowedFields = ['floor', 'room_no', 'room_type', 'status', 'price']; // List of fields that can be inserted/updated
}
