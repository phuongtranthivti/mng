<?php

namespace App\Http\Controllers;


use App\Company;
use App\Devision;
use App\Profile;
use App\Project;
use App\Branch;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController
{
    function getHome()
    {
        $projects = Project::all();
        return view('project', ['projects' => $projects]);
    }

    function getSearch(Request $request)
    {
        $projects = Project::where('name', 'LIKE', $request->name)->get();
        return view('project', ['projects' => $projects]);
    }

    function getDetail(Request $request)
    {
        $project = Project::find($request->code);
        $company = Company::find($project->cpn_code);
        $branch = Branch::find($project->br_code);
        $devision = Devision::find($project->dvs_code);
        return view('project_detail', ['project' => $project, 'devision' => $devision, 'company' => $company, 'branch' => $branch]);

    }

    function getRegister()
    {
        $devisions = Devision::where('br_code', Auth::user()->profile->project->devision->branch->br_code)->get();
        return view('project_register', ['devisions' => $devisions]);
    }

    function getAjaxGetPM(Request $request)
    {
        $profiles = Profile::where('dvs_code', $request->code)->get();
        foreach ($profiles as $p) {
            echo $p->user->name;
        }
    }

    function postRegister(Request $request)
    {

        $project = new Project();

        $project->code = $request->code;
        $project->name = $request->name;
        $project->cpn_code = $request->cpn_code;
        $project->br_code = $request->br_code;
        $project->dvs_code = $request->dvs_code;
        $project->pm = $request->pm;
        $project->start_date = $request->start_date;
        $project->tool = $request->tool;
        $project->documentation = $request->documentation;
        $project->description = $request->description;
        $project->status = "Stopping";
        $project->quality = "";
        $project->save();

        return redirect()->route('project.get');
    }
}