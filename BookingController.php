<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Ruangan;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $dataBooking = Booking::with('ruangan')->get();


        return view('booking',  compact('dataBooking'));
    }

    public function tambahbooking()
    {
        $data = Ruangan::all();

        return view('tambahbooking', compact('data'));
    }
    public function insertbooking(Request $request)
    {

        Booking::create($request->all());


        return redirect('booking')->with('status', 'Permintaan Booking Anda Berhasil Dibuat');
    }
    public function edit(Request $Request, $id)

    {
        $booking = Booking::findOrFail($id);
        return view('booking-edit', ['booking' => $booking]);
    }
    public function update(Request $request, $id)
    {

        $booking = Booking::findOrFail($id);
        $booking->update($request->all());

        return redirect('booking')->with('status', 'Berhasil Mengupdate Data Booking');
    }
    public function hapus($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();

        return redirect('booking')->with('status', 'Data Berhasil Dihapus');
    }
}
