<?php

namespace App\Http\Controllers;

use Hash;
use App\User;
use App\UserDetails;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::where('id','!=',auth()->user()->id)->get();

        return view('admin.users.index')->with(['users' => $users]);
    }
    public function store(Request $request)
    {
        $user = new User();

        // dd($user->validate_user_registration());

        $this->validate($request, $user->validate_user_registration());

        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        $details = new UserDetails();
        $details->user_id = $details->user_id();
        $details->role = $details->role();
        $details->avatar = $details->avatar();
        $details->avatar_extension = 'jpg';
        $details->save();

        return redirect('/login')->with('Success', 'Registered successfully');
    }
}
