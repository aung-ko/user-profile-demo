<?php

namespace App\Http\Controllers;

use App\UserProfile;
use App\Respositories\UserProfiles;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{

    public function index(UserProfiles $userProfiles)
    {
        $userProfiles = $userProfiles->all();
        return response()->json($userProfiles);
    }

    public function create()
    {
        return view('profiles.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'birthday' => 'required|date|date_format:Y-m-d',
            'gender' => 'required',
            'marital_status' => 'required',
            'occupation' => 'required',
            'email' => 'required|email|unique:user_profiles,email',
            'phone' => 'required|regex:/[0-9]{9,11}/',
            'address' => 'required'
        ]);

        UserProfile::create($validatedData);
        return redirect('/');
    }
}
