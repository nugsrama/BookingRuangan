<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\User;
use App\Models\Booking;
use App\Models\Ruangan;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {

        $ruanganCount = Ruangan::count();
        $userCount = User::count();
        $bookingCount = Booking::count();
        return view('dashboard', [

            'booking_count' => $bookingCount, 'ruangan_count' => $ruanganCount, 'user_count' => $userCount
        ]);
    }
}
