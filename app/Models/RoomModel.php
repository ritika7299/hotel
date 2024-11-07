<?php
namespace App\Models;

use CodeIgniter\Model;

class RoomModel extends Model
{
    protected $table = 'rooms'; // Replace with your actual table name
    protected $primaryKey = 'id'; // Replace with your primary key
    protected $allowedFields = ['floor', 'room_no', 'room_type', 'members', 'status', 'price']; // List of fields that can be inserted/updated
    public function checkRoomExists($floor, $room_no)
    {
        // Query to check if the room already exists based on floor and room_no
        return $this->where('floor', $floor)
            ->where('room_no', $room_no)
            ->first(); // Returns the first matching record or null if none found
    }
    // public function deleteRoom($id)
    // {
    //     return $this->db->table('rooms')->delete(['id' => $id]); // Adjust table name as necessary
    // }

}
