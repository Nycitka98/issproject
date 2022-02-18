@extends('layouts.app')

@section('content')
    
<h1>{{$title}}</h1>
@if(count($ekonomika) > 0 )
    <ul class="list-group">
        @foreach($ekonomika as $ekonomika)
        <li class="list-group-item">{{$ekonomika}}</li>
        @endforeach
    </ul>
@endif
@endsection
