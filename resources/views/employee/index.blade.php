@extends('master')

@section('title')
    <title>{{ $title }}</title>
@stop

@section('content')
    
    <div class='clearfix'>&nbsp;</div>

    <div class='text-right'><a href="{{ route('employeecreate') }}" class='btn btn-success btn-lg'>New Employee</a></div>
    
    <div class='clearfix'>&nbsp;</div>
    
    <div class='table-responsive'>
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th class='text-center'>#</th>
                    <th class='text-center'>First Name</th>
                    <th class='text-center'>Middle Name</th>
                    <th class='text-center'>Last Name</th>
                    <th class='text-center'>Gender</th>
                    <th class='text-center'>Email</th>
                </tr>
            </thead>
            <tbody>
                
                @foreach($employee as $list)
                <tr>
                    <td class='text-center'>{{ $cnt++ }}</td>
                    <td><a href="{{ route('employeedetail',[$list->emp_id]) }}">{{ $list->emp_firstname }}</a></td>
                    <td><a href="{{ route('employeedetail',[$list->emp_id]) }}">{{ $list->emp_middlename }}</a></td>
                    <td><a href="{{ route('employeedetail',[$list->emp_id]) }}">{{ $list->emp_lastname }}</a></td>
                    <td><a href="{{ route('employeedetail',[$list->emp_id]) }}">{{ $list->emp_gender }}</a></td>
                    <td><a href="{{ route('employeedetail',[$list->emp_id]) }}">{{ $list->emp_email }}</a></td>
                </tr>
                
                @endforeach
                
            </tbody>
                
                
                
        </table>
    </div>
@stop


