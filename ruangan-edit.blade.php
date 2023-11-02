@extends('layout.mainlayout')

@section('title','Edit Ruangan')

@section('content')

<div class="container">
    <div row>
    <form action="/ruangan/{{$ruangan->id}}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="ruangan" class="form-label">Kode Ruangan</label>
            <input type="text" name=Kode id="Kode" class="form-control" placeholder="Kode Ruangan"
            value="{{$ruangan->Kode}}">
        </div>
        <div>
            <label for="lokasi" class="form-label">Lokasi</label>
            <input type="text" name=lokasi id="lokasi" class="form-control" placeholder="Lokasi Ruangan"
            value="{{$ruangan->lokasi}}">
        </div>
        <div>
            <label for="Kapasitas" class="form-label">Kapasitas</label>
            <input type="number"  name=Kapasitas class="form-control" 
            value="{{$ruangan->Kapasitas}}">
        </div>
        <div>
            <label for="Status" class="form-label">Status</label>
            <select name=Status value="ready" class="form-control" >
            <option value="{{$ruangan->status}}">{{$ruangan->status}}</option>
         @if ($ruangan->status == "Ready")
         <option value="On Booking" >On Booking</option>
         @else <option value="Ready">Ready</option>
         
         @endif
            </select>
        
        <div class="mt-3">
            <button class="btn btn-success" type="submit">Simpan</button>
        </div>
    </div>
</div>
    </form>
</div>
@endsection