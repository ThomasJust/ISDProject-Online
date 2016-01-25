
@extends('main_layout')

@section('content')

<h1>All User:</h1>
@foreach($users as $user)        
             <h4>{{$user->first_name}} {{$user->last_name}}</h4>    
			 {{$user->email}} 
@endforeach

@stop