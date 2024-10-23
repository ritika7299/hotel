<?php

namespace App\Controllers;

// use App\Models\RoomModel;

class Guest extends BaseController
{
    public function index()
    {
        return view('admin_layouts/guest-management');
    }
    public function feedback()
    {
        return view('user_layouts/feedback');
    }
}