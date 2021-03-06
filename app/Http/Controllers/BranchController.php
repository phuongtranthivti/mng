<?php


namespace App\Http\Controllers;

use App\Branch;
use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;

class BranchController
{
    function getHome(){
        $branches = DB::table('branch')->paginate(5);
        //$branches = Branch::all()->paginate(1);

        return view('branch', ['branches' => $branches]);
    }

    function getSearch(Request  $request){
        $branches = Branch::where('br_name', 'LIKE', $request->name)->get();
        return view('branch', ['branches' => $branches]);
    }

    function getRegister(){
        return view('branch_register');
    }

    function postRegister(Request  $request){
        $branch = new Branch();
        $branch->br_code = $request->code;
        $branch->br_name = $request->name;
        $branch->cpn_code = $request->cpn_code;
        $branch->br_address = $request->address;
        $branch->br_area = $request->area;
        $branch->br_email = $request->email;
        $branch->br_phone = $request->phone;
        $branch->br_website = $request->website;
        $branch->br_status = "Stop";
        $branch->save();
        return redirect()->route('branch.get');
    }

    function getBrDetail(Request $request)
    {
        $branch = Branch::find($request->br_code);
        $company = Company::find($branch->cpn_code);
        return view('branch_detail', ['branch' => $branch , 'company'=>$company]);
    }

    function postUpdate(Request $request)
    {
        $branch = Branch::find($request->br_code);

        $branch->br_address = $request->address;
        $branch->br_area = $request->area;
        $branch->br_email = $request->email;
        $branch->br_phone = $request->phone;
        $branch->br_website = $request->website;
        $branch->br_status = $request->status;
        $branch->save();

        return redirect('branch');


    }
}