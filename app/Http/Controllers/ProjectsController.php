<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ProjectsRequest;
use App\Http\Controllers\Controller;
use App\Projects;

class ProjectsController extends Controller
{
    
    private $projects;
    
     public function __construct(Projects $projects){
        $this->projects = $projects;
    }
    
    public function index()
    {
        $projectactive =  "class=active";
        $title = "Projects";
        
        return view('projects.index',compact('title','projectactive'));
    }

    /**
     * Show create form fields
     */
    public function create()
    {
        return view('projects.views.create');
    }

    /**
     * Store the post request from create form fields
     * 
     * @param  Request  $request
     */
    public function store(Request $request)
    {
        
        $this->validate($request, 
                ['title' => 'required|unique:projects,title',
                 'description' => 'required'],
                ['title.required' => 'The Title field is required.',
                 'title.unique' => 'The Title is already exist.',
                 'description.required' => 'The Description field is required.']);
       
        $projects = $this->projects;
        $projects->create($request->only('title','description'));
        return "Successfully Created.";
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Request  $request
     */
    public function edit(Request $request)
    {
        
        $projects = $this->projects->where('id',$request->id)->first();
        return view('projects.views.edit',compact('projects'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function update(Request $request)
    {

            $this->validate($request, 
                ['title' => 'required|unique:projects,title,'.$request->id,
                 'description' => 'required'],
                ['title.required' => 'The Title field is required.',
                 'title.unique' => 'The Title is already exist.',
                 'description.required' => 'The Description field is required.']);
                
            $this->projects
                    ->where('id',  $request->id)
                    ->update(['title' => $request->title,
                              'description' => $request->description]);
            
            return 'Successfully Updated.';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return Response
     */
    public function destroy(Request $request)
    {
        $projects = $this->projects->where('id',$request->id)->first();
        $projects->delete();
        return "Successfully Deleted.";
    }
    
    /**
     * Show all project data
     */
    public function projectlist(){
        $cnt = 1;
        $projects = $this->projects->get();       
        return view('projects.views.projectlist',compact('projects','cnt'));
    }
    
    /**
     * 
     */
    public function predestroy(Request $request)
    {
        $projects = $this->projects->where('id',$request->id)->first();
        return view('projects.views.predestroy', compact('projects'));
    }
}
