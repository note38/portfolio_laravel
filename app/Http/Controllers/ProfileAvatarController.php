<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class ProfileAvatarController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time() . '.' . $request->file('avatar')->getClientOriginalExtension();

        // Store the image in the 'avatars' directory using Laravel's filesystem
        $path = $request->file('avatar')->storeAs('avatars', $imageName);

        // Update the user's image attribute with the stored path
        $user = new User();
        $user->image = $path;
        $user->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }
}
