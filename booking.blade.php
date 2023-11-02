@extends('layout.mainlayout')

@section('tittle','booking')

@section('content')
<div class="my-5 d-flex justify-content-end">
    @if (Auth::user()->role_id == 1)
    <a href="tambahbooking" class="btn btn-primary">+ Tambah Booking</a>
    @endif
</div>
<div class="mt-5">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status')}}
    </div>
@endif
</div>
    <div class="my-5">
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th> No </th>
            <th> Nama </th>   
            <th> Kode Ruangan</th> 
            <th> Tanggal</th> 
            <th> Jam Masuk</th>
            <th> Jam Keluar </th>
            <th> Status</th>
           
            

        </tr>
    </thead>
    <body>
        @php 
        $no=1;
        @endphp
        @foreach ($dataBooking as $item)
     
        <tr> 
            <th scope="item">{{$no++}}</th>
            <td>{{$item->Nama }} </td>
            <td>A00{{ $item->ruangan_id }}</td>
            <td>{{ $item->Tanggal}}</td>
            <td>{{ $item->Jam_Masuk }}</td>
            <td>{{ $item->Jam_Keluar}}</td>
            <td>

                @if ($item->Status == "pending" )
                <button type="button" class="btn btn-danger">Pending</button>
                
                @else
                <button type="button" class="btn btn-success">Approve</button>
                @endif
            </td>
            <td>
                @if (Auth::user()->role_id == 1)
                <a href="booking-edit/{{$item->id}}" class="btn btn-info"></button>edit</a>
                <a href="/hapus/{{$item->id}}" class="btn btn-danger"></button>delete</a>
                @endif
            </td>
        </tr>
            
        @endforeach
</table>
    </div>
</body>
@endsection
    