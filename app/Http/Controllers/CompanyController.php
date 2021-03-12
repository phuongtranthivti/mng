<?php


namespace App\Http\Controllers;


use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
//Home Company
    //Show All Company
    function getCompany()
    {
        $companies = Company::all();
        return view('company', ['companies' => $companies]);
    }

    //Find Company with Name
    function getSearchCompany(Request $request)
    {
        $companies = Company::where('Name', 'LIKE', $request->cpn_name)->get();
        return view('company', ['companies' => $companies]);
    }

//Register Company
    //Show Company Register
    function getRegister()
    {
        return view('company_register');
    }

    //Create New Company
    function postCompany(Request $request)
    {
        $request->validate([
            'Code' =>  'unique:company',
        ]);
        $company = new Company();
        $company->Code = $company->Code;
        $company->Name = $request->cpn_name;
        $company->address = $request->address;
        $company->Email = $request->email;
        $company->Phone = $request->phone;
        $company->website = $request->website;
        $company->Status = 'Working';
        $company->save();
        return redirect('company');
    }

// Detail Company
    //Show Detail Company
    function getCpnDetail(Request $request)
    {
        $company = Company::find($request->Code);
        return view('company_detail', ['company' => $company]);
    }

    //Update Company Information

}