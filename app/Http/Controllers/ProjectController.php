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
        $file1 = Input::file('attachement1'); 
        $file2 = Input::file('attachement2'); 
        $file3 = Input::file('attachement3'); 
        $file4 = Input::file('attachement4'); 
        $file5 = Input::file('attachement5'); 
        $destination_path = 'uploads';
        if($file1 != null){
            $attachement_name = $project->project_name.$project->client_name.' attachment1.pdf';
            $project->attachement1 = $attachement_name;
            $file1->move($destination_path, $attachement_name);
        }
        if($file2 != null){
            $attachement_name = $project->project_name.$project->client_name.' attachment2.pdf';
            $project->attachement2 = $attachement_name;
            $file2->move($destination_path, $attachement_name);
        }
        if($file3 != null){
            $attachement_name = $project->project_name.$project->client_name.' attachment3.pdf';
            $project->attachement3 = $attachement_name;
            $file3->move($destination_path, $attachement_name);
        }
        if($file4 != null){
            $attachement_name = $project->project_name.$project->client_name.' attachment4.pdf';
            $project->attachement4 = $attachement_name;
            $file4->move($destination_path, $attachement_name);
        }
        if($file5 != null){
            $attachement_name = $project->project_name.$project->client_name.' attachment5.pdf';
            $project->attachement5 = $attachement_name;
            $file5->move($destination_path, $attachement_name);
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
        $file1 = Input::file('attachement1'); 
        $file2 = Input::file('attachement2'); 
        $file3 = Input::file('attachement3'); 
        $file4 = Input::file('attachement4'); 
        $file5 = Input::file('attachement5'); 
        $destination_path = 'uploads';
        if($file1 != null){
            $attachement_name = $project->project_name.$project->client_name.' attachment1.pdf';
            $project->attachement1 = $attachement_name;
            $file1->move($destination_path, $attachement_name);
        }
        if($file2 != null){
            $attachement_name = $project->project_name.$project->client_name.' attachment2.pdf';
            $project->attachement2 = $attachement_name;
            $file2->move($destination_path, $attachement_name);
        }
        if($file3 != null){
            $attachement_name = $project->project_name.$project->client_name.' attachment3.pdf';
            $project->attachement3 = $attachement_name;
            $file3->move($destination_path, $attachement_name);
        }
        if($file4 != null){
            $attachement_name = $project->project_name.$project->client_name.' attachment4.pdf';
            $project->attachement4 = $attachement_name;
            $file4->move($destination_path, $attachement_name);
        }
        if($file5 != null){
            $attachement_name = $project->project_name.$project->client_name.' attachment5.pdf';
            $project->attachement5 = $attachement_name;
            $file5->move($destination_path, $attachement_name);
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
