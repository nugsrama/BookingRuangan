@extends('layout.mainlayout')

@section('title','Edit Booking')

@section('content')

<div class="container">
    <div row>
    <form action="/booking/{{$booking->id}}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="Nama" class="form-label">Nama</label>
            <input type="text" name=Nama id="Nama" class="form-control" placeholder="Nama Pemesan"
            value="{{$booking->Nama}}">
        </div>
        <div>
            <label for="ruangan" class="form-label">Kode Ruangan</label>
            <input type="text" name=ruangan id="name" class="form-control" placeholder="Kode Ruangan"
            value="{{$booking->ruangan}}">
        </div>
        <div>
            <label for="Tanggal" class="form-label">Tanggal</label>
            <input type="date"  name=Tanggal class="form-control" 
            value="{{$booking->Tanggal}}">
        </div>
        <div>
            <label for="Jam_Masuk" class="form-label">Jam Masuk</label>
            <input type="time" name=Jam_Masuk class="form-control" 
            value="{{$booking->Jam_Masuk}}">
        </div>
        <div>
            <label for="Jam_Masuk" class="form-label">Jam Keluar</label>
            <input type="time"  name=Jam_Keluar class="form-control" 
            value="{{$booking->Jam_Keluar}}">
        </div>
        <div>
            <label for="No_Telpon" class="form-label">No Handphone</label>
            <input type="number"  name=No_Telpon class="form-control" 
            value="{{$booking->No_Telpon}}">
        </div>

        <div>
            <label for="Status" class="form-label">Status</label>
            <select name=Status value="pending" class="form-control" >
            <option value="{{$booking->Status}}">{{$booking->Status}}</option>
         @if ($booking->Status== "pending")
         <option value="Approve">Approve</option>
         @else <option value="pending">pending</option>
         
         @endif
        
            
        </select>
        </div>
        
        
        <div class="mt-3">
            <button class="btn btn-success" type="submit">Simpan</button>
        </div>
    </div>
</div>
    </form>
</div>
@endsection