@extends('master')

@section('title')
    <title>{{ $title }}</title>
@stop

@section('content')
       
    <div class='text-center'>
        <h2>{{ $employee->emp_firstname.' '.$employee->emp_middlename.' '.$employee->emp_lastname }}</h2>
    </div>

    <div class='clearfix'>&nbsp;</div>
    
    <div class="row">
        <div class="col-md-4"> 
            {!! Form::label('emp_firstname','Firstname') !!}
            <div class='text-center'>{{ $employee->emp_firstname }}</div>
            
        </div>
        <div class="col-md-4"> 
            {!! Form::label('emp_middlename','Middlename') !!}
            <div class='text-center'>{{ $employee->emp_middlename }}</div>
        </div>
        <div class="col-md-4">
            {!! Form::label('emp_lastname','Lastname') !!}
            <div class='text-center'>{{ $employee->emp_lastname }}</div>
        </div>
        
    </div>
    
    <div class="row">
        <div class="col-md-4"> 
            {!! Form::label('emp_gender','Gender') !!}
            <div class='text-center'>{{ $employee->emp_gender }}</div>
        </div>
        <div class="col-md-4"> 
            {!! Form::label('emp_email','Email') !!}
            <div class='text-center'>{{ $employee->emp_email }}</div>
        </div>
        <div class="col-md-4"> &nbsp;</div>
    </div>
    
    <div class='clearfix'>&nbsp;</div>
    
    <div class='text-center'>
        <a href="{{ route('employeeedit',[$employee->emp_id]) }}"><button class='btn btn-primary btn-lg'>Edit</button></a>
        <a href="{{ route('employee') }}" class='btn btn-warning btn-lg'>Back</a>
    </div>
    
    <div class='clearfix'>&nbsp;</div>

@stop


