<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\EmployeeRequest;
use App\Http\Controllers\Controller;
use App\Employee;

class EmployeeController extends Controller
{
    
    private $employee;
    

    public function __construct(Employee $employee){
        $this->employee = $employee;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $title = 'Employees Page';
        $cnt = 1;
        $employee = $this->employee->get();

        return view('employee.index', compact('title','employee','cnt'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        
        $title = "Create | Employees Page";
        return view('employee.create',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(EmployeeRequest $request)
    {
        $employee = $this->employee;
        $employee->create($request->all());
        
        return redirect('employee');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        
        $employee = $this->employee->where('emp_id', '=', $id)->first();
        
        $name = $employee->emp_firstname.' '.$employee->emp_middlename.' '.$employee->emp_lastname;
        $title = $name.' | Employees Page';
        
        return view('employee.show',  compact('title','employee'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $employee = $this->employee->where('emp_id', '=', $id)->first();
        
        $name = $employee->emp_firstname.' '.$employee->emp_middlename.' '.$employee->emp_lastname;
        $title = 'Edit | '.$name.' | Employees Page';
        
        return view('employee.edit',  compact('title','employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(EmployeeRequest $request, $id)
    {

        $employee = $this->employee->where('emp_id', '=', $id)->first();
         
        $employee->fill($request->input())->save();
        
        return redirect('employee/'.$employee->emp_id.'/edit');
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $employee = $this->employee->where('emp_id', '=', $id)->first();
        $employee->delete();
        
        return redirect('employee');
    }
}
