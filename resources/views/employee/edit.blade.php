@extends('master')

@section('title')
    <title>{{ $title }}</title>
@stop

@section('content')
       
    <div class='text-center'>
        <h2>{{ $employee->emp_firstname.' '.$employee->emp_middlename.' '.$employee->emp_lastname }}</h2>
    </div>

    <div class='clearfix'>&nbsp;</div>

    
    <span class='text-right'>
    {!! Form::open(['route' => ['employeedelete',$employee->emp_id],'method' => 'DELETE']) !!}    
        {!! Form::submit('Delete', array('class' => 'btn btn-danger btn-lg')) !!}
    {!! Form::close() !!}
    </span>
    
    {!! Form::open(['route' => ['employeeupdate',$employee->emp_id],'method' => 'PATCH']) !!}

    <div class="row form-group">
        <div class="col-md-4 {{ $errors->has('emp_firstname') ? 'has-error' : '' }}"> 
            {!! Form::label('emp_firstname','First Name:') !!}
            {!! Form::text('emp_firstname',$employee->emp_firstname,['class' => 'form-control']) !!}
            {!! $errors->first('emp_firstname','<span class="text-danger">:message</span>') !!}
        </div>
        <div class="col-md-4  {{ $errors->has('emp_middlename') ? 'has-error' : '' }}"> 
            {!! Form::label('emp_middlename','Middle Name:') !!}
            {!! Form::text('emp_middlename',$employee->emp_middlename,['class' => 'form-control']) !!}
            {!! $errors->first('emp_middlename','<span class="text-danger">:message</span>') !!}
        </div>
        <div class="col-md-4  {{ $errors->has('emp_lastname') ? 'has-error' : '' }}"> 
            {!! Form::label('emp_lastname','Last Name:') !!}
            {!! Form::text('emp_lastname',$employee->emp_lastname,['class' => 'form-control']) !!}
            {!! $errors->first('emp_lastname','<span class="text-danger">:message</span>') !!}
        </div>
    </div>
    
    <div class="row form-group">
        <div class="col-md-4  {{ $errors->has('emp_gender') ? 'has-error' : '' }}"> 
            {!! Form::label('emp_gender','Gender:') !!}
            {!! Form::select('emp_gender', array('Male' => 'Male','Female' => 'Female'), $employee->emp_gender , array('class' => 'form-control')); !!}
            {!! $errors->first('emp_gender','<span class="text-danger">:message</span>') !!}
        </div>
        <div class="col-md-4  {{ $errors->has('emp_email') ? 'has-error' : '' }}"> 
            {!! Form::label('emp_email','Email:') !!}
            {!! Form::text('emp_email',$employee->emp_email,['class' => 'form-control']) !!}
            {!! $errors->first('emp_email','<span class="text-danger">:message</span>') !!}
        </div>
        <div class="col-md-4"> &nbsp; </div>
    </div>

    <div class='clearfix'>&nbsp;</div>
    
    <span class='text-center'>
        {!! Form::submit('Update', array('class' => 'btn btn-primary btn-lg')) !!}
    {!! Form::close() !!}
        <a href="{{ route('employee') }}" class="btn btn-warning btn-lg">Back</a>
    </span>

    
    
    <div class='clearfix'>&nbsp;</div>
    
    
    
    

    
    
@stop


