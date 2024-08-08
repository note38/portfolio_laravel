<?php

namespace App\Http\Controllers;
use App\Models\Projects;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    
    public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'description' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $imageName = time().'.'.request()->file('image')->getClientOriginalExtension();
    request()->file('image')->move(public_path('images'), $imageName);

    $project = new Projects();
    $project->user_id = auth()->id();
    $project->title = $request->input('title');
    $project->description = $request->input('description');
    $project->image = 'images/'.$imageName;
    $project->save();

    $request->session()->flash('status', 'Project created successfully!');

    return redirect()->route('dash_project')->with('success', 'Project created successfully.');
}
    
public function update(Request $request, $id)
{
    $request->validate([
        'title' => 'required',
        'description' => 'required',
    ]);

    $project = Projects::find($id);
    $project->title = $request->input('title');
    $project->description = $request->input('description');

    if ($request->hasFile('image')) {
        $imageName = time().'.'.request()->file('image')->getClientOriginalExtension();
        request()->file('image')->move(public_path('images'), $imageName);
        $project->image = 'images/'.$imageName;

    }

    $project->save();
    $request->session()->flash('status', 'Project updated successfully!');

    return redirect()->route('dash_project')->with('success', 'Project updated successfully.');
}
    
    
    
public function destroy($id)
    {
    $project = Projects::find($id);
    if (!$project) {
        // Handle the case when the project is not found
        session()->flash('error', 'Project not found!');
        return redirect()->route('dash_project');
    }
    if (file_exists(public_path($project->image))) {
        unlink(public_path($project->image));
    }
    $project->delete();

    session()->flash('status', 'Project deleted successfully!');

    return redirect()->route('dash_project')->with('success', 'Project deleted successfully.');
    }  
    
public function show()
    {      
    $showProjectData = Projects::latest()->paginate(10);

    return view('project.show', compact('showProjectData'));
    
    }
    
    public function edit($id)
    {
         $project = Projects::find($id);
         return view('project.edit', ['project' => $project ]);
    }
    public function showCreate(){
        $showProjectData = Projects::latest()->paginate(5);
        return view('project.create', compact('showProjectData'));
    }
}
