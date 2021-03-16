<?php

namespace App\Http\Controllers;



use App\Company;
use Illuminate\Http\Request;
class ProjectController
{
    function getHome(){
        return view('project');
    }

}