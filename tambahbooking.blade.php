@extends('layout.mainlayout')

@section('title','Add Booking')

@section('content')

<div class="container">
    <div row>
    <form action="insertbooking" method="POST">
        @csrf
        
        <div>
            <label for="Nama" class="form-label">Nama</label>
            <input type="text" name=Nama id="Nama" class="form-control" placeholder="Nama Pemesan"
            value="{{Auth::user()->username}}">
        </div>
        <div>
            
            <label for="Kode" class="form-label" >Kode Ruangan</label>
            <select name=ruangan_id class="form-control" required>
                <option value="">Pilih Ruangan</option>
                @foreach ($data as $item)
                    <option value="{{ $item->id}}">{{ $item->Kode }}</option>
                @endforeach
                {{-- <option value="A001">A001</option> --}}

            </select>
        </div>
        <div>
            <label for="tanggal" class="form-label" required >Tanggal</label>
            <input type="date"  name=Tanggal class="form-control" >
        </div>
        <div>
            <label for="Jam_Masuk" class="form-label" required>Jam Masuk</label>
            <input type="time" name=Jam_Masuk class="form-control" required>
        </div>
        <div>
            <label for="Jam_Masuk" class="form-label" required>Jam Keluar</label>
            <input type="time"  name=Jam_Keluar class="form-control" required>
        </div>
        <div>
            <label for="No_Telpon" class="form-label" required>No Handphone</label>
            <input type="number"  name=No_Telpon class="form-control" required>
        </div>

        <div>
            
            <input type="hidden"  name=Status value="pending" class="form-control">
        </div>
        
        
        <div class="mt-3">
            <button class="btn btn-success" type="submit">Simpan</button>
        </div>
    </div>
</div>
    </form>
</div>
@endsection