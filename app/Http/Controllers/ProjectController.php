<?php

namespace App\Http\Controllers;
use App\Models\Projects;
use Illuminate\Support\Facades\Storage;
use Database\Factories\ProjectsFactory;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function show(){
        return view('project.show', ['projects' => Projects::all() ]);
    }
    public function create(){
        $request = request();
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time().'.'.request()->file('image')->getClientOriginalExtension();
        request()->file('image')->move(public_path('images'), $imageName);
        
        $project = new Projects();
        $project->title = $request->input('title');
        $project->description = $request->input('description');
        $project->image = 'images/'.$imageName;
        $project->save();

        return redirect()->route('dash_project')->with('success', 'Project created successfully.');
    }
    public function edit($id){
         $project = Projects::find($id);
         return view('project.edit', ['project' => $project ]);
    }
    public function upload_edit(Request $request)
    {
        Storage::put('projects', $request->image );
        
        dd('ok');
      
        // TODO STORE IMAGE AND UPDATE IMAGE

    }
}
