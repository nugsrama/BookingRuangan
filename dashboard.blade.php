@extends('layout.mainlayout')

@section('tittle','Dashboard')

@section('content')
<h1>Welcome, {{Auth::user()->username}}</h1>
  <div class="row mt-5">
   
    <div class="col-lg-4 ">
        <div class="card-data user">
            <div class="row">
                <div class="col-6"><i class="bi bi-people"></i></div>
                <div class="col-6 d-flex flex-column justify-content-center align-item-end">
                    <div class="card-desc">User</div>
                    <div class="card-count">{{$user_count}}</div>
                </div>
            </div>
        </div>
        
    </div>    
    <div class="col-lg-4 ">
      <div class="card-data ruangan">
          <div class="row">
              <div class="col-6"><i class="bi bi-house"></i></div>
              <div class="col-6 d-flex flex-column justify-content-center align-item-end">
                  <div class="card-desc">Ruangan</div>
                  <div class="card-count">{{$ruangan_count}}</div>
              </div>
          </div>
      </div>
      
  </div>    
  <div class="col-lg-4 ">
    <div class="card-data booking">
        <div class="row">
            <div class="col-6"><i class="bi bi-clock-history"></i></div>
            <div class="col-6 d-flex flex-column justify-content-center align-item-end">
                <div class="card-desc">Booking</div>
                <div class="card-count">{{$booking_count}}</div>
            </div>
        </div>
    </div>
    
</div>    
  </div>
  
  
@endsection
    
