<?php

namespace App\Controllers;

// use App\Models\RoomModel;

class Reservations extends BaseController
{
    public function index()
    {
        return view('admin_layouts/reservations-management');
    }
}