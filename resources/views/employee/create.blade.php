@extends('master')

@section('title')
    <title>{{ $title }}</title>
@stop

@section('content')
       
    


<div class="text-center"><h2>New Employee</h2></div>
    
    <div class="clearfix">&nbsp;</div>

    {!! Form::open(['route' => 'employeestore']) !!}

    <div class="row form-group">
        <div class="col-md-4 {{ $errors->has('emp_firstname') ? 'has-error' : '' }}"> 
            {!! Form::label('emp_firstname','First Name:') !!}
            {!! Form::text('emp_firstname',null,['class' => 'form-control']) !!}
            {!! $errors->first('emp_firstname','<span class="text-danger">:message</span>') !!}
        </div>
        <div class="col-md-4  {{ $errors->has('emp_middlename') ? 'has-error' : '' }}"> 
            {!! Form::label('emp_middlename','Middle Name:') !!}
            {!! Form::text('emp_middlename',null,['class' => 'form-control']) !!}
            {!! $errors->first('emp_middlename','<span class="text-danger">:message</span>') !!}
        </div>
        <div class="col-md-4  {{ $errors->has('emp_lastname') ? 'has-error' : '' }}"> 
            {!! Form::label('emp_lastname','Last Name:') !!}
            {!! Form::text('emp_lastname',null,['class' => 'form-control']) !!}
            {!! $errors->first('emp_lastname','<span class="text-danger">:message</span>') !!}
        </div>
    </div>
    
    <div class="row form-group">
        <div class="col-md-4  {{ $errors->has('emp_gender') ? 'has-error' : '' }}"> 
            {!! Form::label('emp_gender','Gender:') !!}
            {!! Form::select('emp_gender', array('Male' => 'Male','Female' => 'Female'), null, array('class' => 'form-control')); !!}
            {!! $errors->first('emp_gender','<span class="text-danger">:message</span>') !!}
        </div>
        <div class="col-md-4  {{ $errors->has('emp_email') ? 'has-error' : '' }}"> 
            {!! Form::label('emp_email','Email:') !!}
            {!! Form::text('emp_email',null,['class' => 'form-control']) !!}
            {!! $errors->first('emp_email','<span class="text-danger">:message</span>') !!}
        </div>
        <div class="col-md-4"> &nbsp; </div>
    </div>

    <div class='clearfix'>&nbsp;</div>
    
    <div class='text-center'>
        {!! Form::submit('Create', array('class' => 'btn btn-primary btn-lg')) !!}
        <a href="{{ route('employee') }}" class="btn btn-warning btn-lg">Back</a>
    </div>
    {!! Form::close() !!}
    
    <div class='clearfix'>&nbsp;</div>
@stop


