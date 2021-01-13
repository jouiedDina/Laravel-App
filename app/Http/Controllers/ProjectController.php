<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $id = Auth::id();
        $projects = User::find($id)->project()->get();
        return view('projects.index', ['projects' => $projects, 'id' => $id]);
    }
    
    public function show($id){
        $project = Project::findorfail($id);
        return view('projects.show', ['project' => $project]);
    }

    public function add(){
        return view ('projects.create');
    }

    public function store(){
        $project = new Project();
        $project->name = request('name');
        $project->projectManager = request('projectManager');
        $project->startDate = request('startDate');
        $project->endDate = request('endDate');
        $project->status = request('status');
        $project->user_id =  Auth::id();; 
    

        $project->save();
        return redirect('/projects')->with('msg' ,'project added succesfully');

    }

    public function destroy($id){
        $project = Project::findorfail($id);
        $project->delete();
        return redirect('/projects')->with('msg' ,'project deleted succesfully');

    }
    public function edit($id){
        $project = Project::findorfail($id);
        return view('projects.edit', ['project'=> $project]);
    }
    public function update($id){
        $project = Project::findorfail($id);
        $project->name = request('name');
        $project->projectManager = request('projectManager');
        $project->startDate = request('startDate');
        $project->endDate = request('endDate');
        $project->status = request('status');

        $project->update();
        return view('projects.show', ['project' => $project, 'msg' => 'project updated succesfully']);
        //return view('projects.show', ['msg' => 'project updated succesfully']);
    }
}
