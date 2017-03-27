<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getProfile()
    {
        $viewData = [
            'currentUser' => auth()->user()
        ];

        return view('profile', $viewData);
    }

    public function getUpdateProfile()
    {
        $viewData = [
            'currentUser' => auth()->user()
        ];

        return view('editProfile', $viewData);
    }

    public function updateProfile(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|alpha',
            'email' => 'required|email'
        ]);

        $user = auth()->user();
        $user->fill($request->all());
        $user->save();

        return redirect('/profile');
    }
}
