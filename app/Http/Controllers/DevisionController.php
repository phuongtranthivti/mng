<?php


namespace App\Http\Controllers;



use App\Company;
use App\Devision;
use Illuminate\Http\Request;


class DevisionController
{
    function getHome(){
        //$branches = DB::table('branch')->get();
        $devisions = Devision::all();

        return view('devision', ['devisions' => $devisions]);
    }

    function getSearch(Request  $request){
        $devisions = Devision::where('name', 'LIKE', $request->name)->get();
        return view('devision', ['devisions' => $devisions]);
    }

    function getRegister(){
        return view('devision_register');
    }

    function postRegister(Request  $request){
        $devision = new Devision();

        $devision->status = "Stop";
        $devision->save();
        return redirect()->route('devision.get');
    }

    function getDetail(Request $request)
    {
        $devision = Devision::find($request->code);
        return view('devision_detail', ['devision' => $devision]);
    }

}