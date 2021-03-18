<?php


namespace App\Http\Controllers;


use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Model
{
    function getProcess(Request $request)
    {
        return view('profile');
    }

    function getInformation()
    {
        return view('profile_information');
    }

    function postInformation(Request $request)
    {
        echo "hi";
        $profile = Profile::where('user_id', Auth::id())->first();
        var_dump($profile);
        $profile->phone = $request->phone;
        $profile->email = $request->email;
        $profile->address = $request->address;
        $profile->join_date = $request->join_date;
        $profile->experience = $request->experience;
        $profile->contract = $request->contract;
        $profile->birthday = $request->birthday;
        $profile->email_work = $request->work_email;
        $profile->passport = $request->passpost;
        $profile->date_passport = $request->date_passpost;
        $profile->save();
        return redirect('profile_information');
    }

    function getSkill(Request $request)
    {
        return view('profile_skill');

    }

    function getCertificate(Request $request)
    {
        return view('profile_certificate');
    }

    function getSkillUpdate(Request $request)
    {
        return view('profile_skillupd');
    }

    function getCertificateUpdate(Request $request)
    {
        return view('profile_cerupdate');
    }

}