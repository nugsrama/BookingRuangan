<!DOCTYPE html>
<html lang="en">

<head>
 
<link rel="icon" size="100x100" href="{!! asset('image/pertamina.png') !!}" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PGN ROOM @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>


<body>
    <div class="main d-flex flex-column justify-content-end">
        <nav class="navbar navbar-light navbar-expand-lg " style="background-color: #0e2b5a;">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>      
              </div>
          </nav>
        
          <div class="body-content h-100">
         <div class="row g-0 h-100">
             <div class="sidebar col-lg-2 collaps d-lg-block" id="navbarTogglerDemo03"> 
                <li style='list-style-type: none;'><img class="image" src="/image/logopgn.png"  width="200px" style="margin: 1px;padding: 0px color:white"></li>
                
                @if (Auth::user()->role_id == 1)
                <a href="dashboard" @if (request()->route()->uri == 'dashboard') class='active' @endif>Dashboard</a>
                <a href="users" @if (request()->route()->uri == 'users') class='active' @endif>User</a>
                
                
                @endif
                <a href="ruangan" @if(request()->route()->uri == 'ruangan') 
                   class='active' @endif
                    >  @if (Auth::user()->role_id == 2)Dashboard 
                    @else Ruangan @endif</a>
                    <a href="booking" @if (request()->route()->uri == 'booking') class='active' @endif>Booking </a>

                     <a href="logout">Logout</a>
                     
                     
                    
                    {{--
                    <li> Profile </li>
                    <li> Logout </li>
                     --}}

                   
                    
                    
                
             </div>
             <div class="content p-5 col-lg-10">
               @yield('content')
             </div>

         </div>
          </div>
    </div>
    <div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>

</html>