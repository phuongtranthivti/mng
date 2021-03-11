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

    function getCpnDetail(Request $request)
    {
        $company = Company::find($request->Code);
        return view('company_detail', ['company' => $company]);
    }
}