@extends('layout.mainlayout')

@section('tittle','ruangan')

@section('content')

<h1>Welcome, {{Auth::user()->username}}</h1>

<div class="my-5 d-flex justify-content-end">
    @if (Auth::user()->role_id == 1)
    <a href="tambahruangan" class="btn btn-primary">+ Tambah Ruangan</a>
    @endif
</div>
@if (Auth::user()->role_id == 2)
    <form action="" method="GET">
        <div class="row pb-3">
            <div class="col-md-3">
                <label > Cari berdasarkan tanggal</label>
             
                <input type="date" required value="{{ Request::get('date') ?? date('Y-m-d')}}" class="form-control">
            </div>
        
            
            <div class="col-md-3">
                <label > Cari berdasarkan status</label>
                <select name="status"  class="form-select">
                    <option value="">Pilih Status</option>
                
                    <option value="Ready" {{ Request::get('status') == 'Ready' ? 'selected':''}}>Ready</option>
                    <option value="On Booking"{{ Request::get('status') == 'On Booking' ? 'selected':''}}>On Booking</option>
                </select>
                
            </div>
          
            <div class="col-md-3 pt-4">
                <button type="submit" class="btn btn-primary">Cari Ruangan</button>
            </div>
        </div>

    </form>
@endif

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
                <th> Kode Ruangan </th>   
                <th> Lokasi</th> 
                <th> Kapasitas</th> 
                
                <th> Tanggal</th>
                <th> Action </th>
                
            </tr>
        </thead>

   
        <body>
           
            
            
            @foreach ($data as $item )
           
            
            
            <tr> 
                <td> {{$loop->iteration}}</td>
                <td>{{ $item->Kode}} </td>
                <td>{{ $item->lokasi }}</td>
                <td>{{ $item->Kapasitas }} Orang</td>
                
                <td>{{ $item->tanggal }}</td>
                <td>
                   {{-- {{ $item->status }}  --}}
                    @if ($item->booking->Status != 'Approve')
                    <a href="tambahbooking" class="btn btn-success"></button>Booking</a>
                    @elseif ($item->booking->Status == 'Approve')  
                    <a href="#" class="btn btn-danger"></button> On Booking</a>
                    @endif
              </td>
                <td>
                    @if (Auth::user()->role_id == 1) 
                    <a href="ruangan-edit/{{$item->id}} " class="btn btn-info"></button>edit</a>
                    <a href="/delete/{{$item->id}}" button type="button" class="btn btn-danger"></button>delete</a>
                </td>   
                    
                @endif
              
              
          
        </tr>
  
        @endforeach
     
</table>
    </div>
</body>
@endsection