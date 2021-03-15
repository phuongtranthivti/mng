<?php


namespace App\Http\Controllers;


use App\Company;
use Illuminate\Http\Request;

class CompanyController
{
    function getCompany()
    {
        $companies = Company::all();
        return view('company', ['companies' => $companies]);
    }

    function getSearchCompany(Request $request)
    {
        $companies = Company::where('Name', 'LIKE', $request->cpn_name)->get();
        return view('company', ['companies' => $companies]);
    }

    function getRegister()
    {
        return view('company_register');
    }

    function postRegister(Request $request){
        $request->validate([
            'email' =>  'unique:company',
        ]);
        $company = new Company();
        $company->Code = $request->Code;
        $company->Name = $request->cpn_name;
        $company->address=$request->address;
        $company->Email = $request->email;
        $company->Phone = $request->phone;
        $company->website= $request->website;
        $company->Status = "Stop";
        $company->save();

        return redirect()->route('company.get');
    }

    function getCpnDetail(Request $request)
    {
        $company = Company::find($request->Code);
        return view('company_detail', ['company' => $company]);
    }

    function getHome(){
        return view('management');
    }
}