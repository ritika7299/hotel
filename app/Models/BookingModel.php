<?php
namespace App\Models;

use CodeIgniter\Model;

class BookingModel extends Model
{
    protected $table = 'booking_info'; // table name
    protected $primaryKey = 'booking_id'; // primary key
    protected $allowedFields = ['room_id', 'guest_fullname', 'guest_email', 'guest_mobile', 'guest_address', 'guest_id_type', 'guest_idNo', 'check_in', 'check_out', 'status'];

    // Create a new booking
    public function createBooking($data)
    {
        return $this->insert($data);
    }

}
