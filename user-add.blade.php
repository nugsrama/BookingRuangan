@extends('layout.mainlayout')

@section('title','Add User')

@section('content')
<h1> Menambah User Baru</h1>
<div class="mt-5 w-58">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error}}</li>
            @endforeach
        </ul>

    </div>
    @endif
    <form action="user-add" method="post">
        @csrf
        <div>
            <label for="name" class="form-label">Nama</label>
            <input type="text" name=username id="name" class="form-control" placeholder="user name">
        </div>
        <div>
            <label for="password" class="form-label">Password</label>
            <input type="text" name=password id="name" class="form-control" placeholder="password">
        </div>
        <div>
            <label for="email" class="form-label">Email</label>
            <input type="text" name=email id="name" class="form-control" placeholder="email">
        </div>

        <div>
            <input type="hidden"  name=status value="Inactive" class="form-control" >
        </div>
        
        <div class="mt-3">
            <button class="btn btn-success" type="submit">Simpan</button>
        </div>
        
        
    </form>
</div>
@endsection