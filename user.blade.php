@extends('layout.mainlayout')

@section('tittle','users')

@section('content')

<h1> Halaman User</h1>
<div class="my-5 d-flex justify-content-end">
    <a href="user-add" class="btn btn-primary">+ Tambah User</a>
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
            <th> Username </th>   
            <th> Email</th> 
            <th> Action</th>

        </tr>
    </thead>
    <body>
        @php 
        $no=1;
        @endphp
        @foreach ($users as $item)
        <tr> 
            <th scope="item">{{$no++}}</th>
            <td>{{ $item->username}} </td>
            <td> {{ $item->email}} </td>
            <td>
                <a href="user-edit/{{$item->id}}" class="btn btn-info"></button>edit</a>
                <a href="/hilang/{{$item->id}}" class="btn btn-danger"></button>delete</a>
                
            </td>
        </tr>
            
        @endforeach
</table>
    </div>
</body>
@endsection
    
