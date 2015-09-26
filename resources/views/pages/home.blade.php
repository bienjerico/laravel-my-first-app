@extends('master')

@section('title')
      <title>{{ $title }}</title>
@stop


@section('content')
    Home Page
        
    @foreach($lessons as $list)
        <h2>{{ $list }}</h2>
    @endforeach
    
@stop


