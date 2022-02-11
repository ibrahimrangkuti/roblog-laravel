<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = User::where('id', Auth::user()->id)->first();
        return view('profile.index', compact('profile'));
    }

    public function update(Request $request)
    {
        $profile = User::where('id', Auth::user()->id)->first();
        $profile->name = $request->name;
        $profile->email = $request->email;
        if(!empty($request->password)) {
            $profile->password = Hash::make($request->password);
        }
        $profile->update();

        return redirect(route('profile'));
    }
}
