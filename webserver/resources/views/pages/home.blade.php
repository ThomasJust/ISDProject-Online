<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.default')

@section('title', 'Page Title bla')

@section('content')
$user = Auth::user();
    <p>Hi, This is my body content.</p>
	
	<a href="{{ url('/auth/logout') }}">LOGOUT</a>
@endsection