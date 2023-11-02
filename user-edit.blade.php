@extends('layout.mainlayout')

@section('title','Add User')

@section('content')
<div class="mt-5 w-58">
<form action="/user/{{$user->id}}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="name" class="form-label">Nama</label>
        <input type="text" name=username id="name" class="form-control" placeholder="user name" 
        value="{{$user->username}}">
    </div>
    <div>
        <label for="password" class="form-label">Password</label>
        <input type="text" name=password id="name" class="form-control" placeholder="password"
        value="{{$user->password}}">
    
    </div>
    <div>
        <label for="email" class="form-label">Email</label>
        <input type="text" name=email id="email" class="form-control" 
        value="{{$user->email}}">
    
    </div>
    <div>
        <label for="status" class="form-label">Status</label>
        <select name=status class="form-control" >
            <option value="{{$user->status}}">{{$user->status}}</option>
         @if ($user->status == "Active")
         <option value="Inactive">Inactive</option>
         @else <option value="Inactive">Inactive</option>
         @endif
        </select>
    </div>
    
    <div class="mt-3">
        <button class="btn btn-success" type="submit">Update</button>
    </div>
</div>
</form>
    
    
@endsection