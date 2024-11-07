<?php

namespace App\Controllers;

use App\Models\RoomModel;
use App\Models\BookingModel;
use Kint\Parser\SplFileInfoPlugin;

class Booking extends BaseController
{
    protected $roomModel;
    protected $bookingModel;

    public function __construct()
    {
        $this->roomModel = new RoomModel();
        $this->bookingModel = new BookingModel();
    }
    public function index()
    {
        return view('booking_list_view');
    }

    // Fetch available rooms based on floor and room type
    public function getAvailableRooms()
    {
        $floor = $this->request->getPost('floor');
        $room_type = $this->request->getPost('room_type');

        $rooms = $this->roomModel->getAvailableRooms($floor, $room_type);

        return $this->response->setJSON([
            'status' => 'success',
            'rooms' => $rooms
        ]);
    }
    // Create a new booking
    public function createBooking()
    {
        $validation = \Config\Services::validation();

        // Define validation rules
        $validation->setRules([
            'guest_fullname' => 'required|min_length[3]',
            'guest_email' => 'required|valid_email',
            'guest_mobile' => 'required|regex_match[/^[0-9]{10}$/]',
            'guest_address' => 'required|min_length[10]',
            'guest_id_type' => 'required',
            'guest_idno' => 'required|min_length[8]|max_length[16]',
            'check_in' => 'required|valid_date',
            'check_out' => 'required|valid_date',
            'floor' => 'required',
            'room_type' => 'required',
            'total_members' => 'required|integer'
        ]);

        if ($this->request->getMethod() === 'post' && $validation->withRequest($this->request)->run()) {
            // Assume the data is processed successfully (you can save data here)
            // Send success response
            return $this->response->setJSON([
                'status' => 'success',
                'message' => 'Booking successfully completed!'
            ]);
        } else {
            // If validation fails
            $errors = $validation->getErrors();
            return $this->response->setJSON([
                'status' => 'error',
                'message' => implode('<br>', $errors)
            ]);
        }
    }
}
