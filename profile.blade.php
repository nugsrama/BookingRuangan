@extends('layout.mainlayout')
@section ('title', 'profile')
@section ('link','/post/create')

@section('content')
<h1>Welcome, {{Auth::user()->username}}</h1>

@endsection

    
