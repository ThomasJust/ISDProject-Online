<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.welcome')

@section('title', 'Page Title bla')

@section('content')
<p>Please insert your personal data to create a new Account:</p>    
	@include('auth/passwords/reset')
@endsection
