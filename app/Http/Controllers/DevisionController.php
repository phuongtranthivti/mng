<?php


namespace App\Http\Controllers;


use App\Branch;
use App\Company;
use App\Devision;
use Illuminate\Http\Request;


class DevisionController
{
    function getHome(){
        $devisions = Devision::all();
        return view('devision', ['devisions' => $devisions]);
    }

    function getSearch(Request  $request){
        $condition = $request->all();

        $query = \DB::table('devision');
        foreach ($condition as $key => $value) {
            $query = $query->Where($key, 'LIKE', $value);
        }
        $bindings = $query->getBindings();


        dump($bindings);
//        $devisions = $query->get();

        dd($query->toSql());


//        array:10 [▼
//  "cpn" => "company_id"
//  "cpn_name" => "company_name"
//  "br_code" => "branch_id"
//  "br_name" => "branch_name"
//  "code" => "devision_id"
//  "name" => "devision_name"
//  "email" => "email@abc.com"
//  "phone" => "phone_number"
//  "status" => "pending"
//  "search" => null
//]


        return view('devision', ['devisions' => $devisions]);
    }

    function getRegister(){
        return view('devision_register');
    }

    function postRegister(Request  $request){
        $devision = new Devision();
        $devision->code = $request->code;
        $devision->name = $request->name;
        $devision->cpn_code = $request->cpn_code;
        $devision->br_code = $request->br_code;
        $devision->address = $request->address;
        $devision->area = $request->area;
        $devision->email = $request->email;
        $devision->phone = $request->phone;
        $devision->status = "Stopped";
        $devision->save();
        return redirect()->route('devision.get');
    }

    function getDvsDetail(Request $request)
    {
        $devision = Devision::find($request->code);
        $company = Company::find($devision->cpn_code);
        $branch = Branch::find($devision->br_code);
        return view('devision_detail', ['devision' => $devision, 'company'=>$company, 'branch'=>$branch]);
    }

    function  postUpdate(Request  $request){

        $devision = Devision::find($request->code);

        $devision->dvs_address = $request->address;
        $devision->area = $request->area;
        $devision->email= $request->email;
        $devision->phone = $request->phone;
        $devision->status = $request->status;

        $devision->save();
        return redirect()->route('devision.get');

    }

}