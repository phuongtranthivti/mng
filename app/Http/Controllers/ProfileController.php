<?php


namespace App\Http\Controllers;


use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class ProfileController extends Model
{
    function getProcess(Request $request){
        return view('profile');
    }

    function getInformation(){
        return view('profile_information');
    }

    function postInformation(Request $request ){


    }

    function getSkill(Request  $request){
        return view('profile_skill');

    }

    function getCertificate(Request $request){
        return view('profile_certificate');
    }

    function getSkillUpdate(Request $request){
        return view('profile_skillupd');
    }

    function getCertificateUpdate(Request  $request){
        return view('profile_cerupdate');
    }

}