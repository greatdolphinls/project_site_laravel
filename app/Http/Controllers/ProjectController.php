<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use URL;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Input;
class ProjectController extends Controller
{
    public function projectDetail($id)
    {
        $project = Project::find($id);
        return view('project.detail')
        ->with('project', $project);
    }

    public function projectEditShow($id)
    {
        $project = Project::find($id);
        return view('project.edit')
        ->with('project', $project);
    }
    
    public function projectUpdate(Request $request, $id)
    {
        $project = Project::find($id);
        $project->project_name = $request->input('project_name');
        $project->client_name = $request->input('client_name');
        $project->hour_rate = $request->input('hour_rate');
        $project->project_type ='fixed';
        $project->fixed_price = $request->input('fixed_price');
        $project->phone = $request->input('phone');
        $project->description = $request->input('description');
        $file = Input::file('attachement'); 
        if($file != null){
            $destination_path = 'uploads';
            $attachement_name = $project->project_name.$project->client_name.'.pdf';
            $project->attachement = $attachement_name;
            $file->move($destination_path, $attachement_name);
        }
        $project->save();
        return redirect('/project/list');
    }
    public function createProject(Request $request)
    {
        $project = new Project;
        $project->project_name = $request->input('project_name');
        $project->client_name = $request->input('client_name');
        $project->hour_rate = $request->input('hour_rate');
        $project->project_type ='fixed';
        $project->fixed_price = $request->input('fixed_price');
        $project->phone = $request->input('phone');
        $project->description = $request->input('description');
        $file = Input::file('attachement'); 
        if($file != null){
            $destination_path = 'uploads';
            $attachement_name = $project->project_name.$project->client_name.'.pdf';
            $project->attachement = $attachement_name;
            $file->move($destination_path, $attachement_name);
        }
        $project->save();
        return redirect('/project/list');
    }

    public function getProjectsList()
    {
        $projects = Project::all();
        return $projects;
    }
}
