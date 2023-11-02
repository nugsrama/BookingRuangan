<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Booking;
use App\Models\Ruangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RuanganController extends Controller
{
    public function index(Request $request)
    {

        $book = Booking::with('booking')->where('Status')->get();
        $data = Ruangan::all();

        $todayDate = Carbon::now()->format('Y-m-d');
        $data = Ruangan::when($request->date != null, function ($q) use ($request) {
            return $q->whereDate('created_at', $request->date);
        }, function ($q) use ($todayDate) {
            return $q->whereDate('created_at', $todayDate);
        })
            ->when($request->status != null, function ($q) use ($request) {
                return $q->where('status', $request->status);
            })
            ->when($request->Kode != null, function ($q) use ($request) {
                return $q->where('Kode', $request->Kode);
            })

            ->paginate(10);
        return view('ruangan',  compact('data', 'book'));
    }
    public function tambahruangan()
    {
        return view('tambahruangan');
    }
    public function insertruangan(Request $request)
    {

        Ruangan::create($request->all());
        return redirect('ruangan')->with('status', 'Berhasil Menambah Ruangan');
    }

    public function edit(Request $Request, $id)

    {
        $ruangan = Ruangan::findOrFail($id);
        return view('ruangan-edit', ['ruangan' => $ruangan]);
    }
    public function update(Request $request, $id)
    {

        $ruangan = Ruangan::findOrFail($id);
        $ruangan->update($request->all());

        return redirect('ruangan')->with('status', 'Berhasil Mengupdate Ruangan');
    }
    public function delete($id)
    {
        $ruangan = Ruangan::findOrFail($id);
        $ruangan->delete();

        return redirect('ruangan')->with('status', 'Ruangan Berhasil Dihapus');
    }
}
