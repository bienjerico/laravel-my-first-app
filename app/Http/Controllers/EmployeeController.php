<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\EmployeeRequest;
use App\Http\Controllers\Controller;
use Validator;
use App\Employee;
use App\Projects;

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
        
        $empactive =  "class=active";
        
        $title = 'Employees Page';
        $cnt = 1;
        $employee = $this->employee->get();
        $projects = Projects::get();


        return view('employee.index', compact('title','employee','cnt','projects','empactive'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        
        $empactive =  "class=active";
        $title = "Create | Employees Page";
        return view('employee.create',compact('title','empactive'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {

        Validator::make($request->all(),[
            'emp_firstname' => 'required',
            'emp_middlename' => 'required',
            'emp_lastname' => 'required',
            'emp_gender' => 'required',
            'emp_email' => 'required|email']);
        $employee = $this->employee;
        $employee->create($request->all());
        
        return redirect('employee')->with('status', 'Successfully Created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        
        $empactive =  "class=active";
        $employee = $this->employee->where('emp_id', '=', $id)->first();
        
        $name = $employee->emp_firstname.' '.$employee->emp_middlename.' '.$employee->emp_lastname;
        $title = $name.' | Employees Page';
        
        return view('employee.show',  compact('title','employee','empactive'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $empactive =  "class=active";

        $employee = $this->employee->where('emp_id', '=', $id)->first();
        
        $name = $employee->emp_firstname.' '.$employee->emp_middlename.' '.$employee->emp_lastname;
        $title = 'Edit | '.$name.' | Employees Page';
        
        return view('employee.edit',  compact('title','employee','empactive'));
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
        
        return redirect('employee/'.$employee->emp_id.'/edit')->with('status','Successfully Updated.');
     
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
        
        return redirect('employee')->with('status', 'Successfully Deleted.');
    }
}
