<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(User $user)
    {   
        return view('profiles.index', compact('user'));
    }

    public function edit(User $user){
        $this->authorize('update', $user->profile);
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user){
        $this->authorize('update', $user->profile);

        $data = request()->validate([
            'title' => '',
            'description' => '',
            'url' => 'url',
            'image' => '',
        ]);
        
        if (request('image')) {
            $imagePath = request('image')->store('profile', 'public');
            
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 1000);
            $image->save();
        }

        $user->profile->update(array_merge(
            $data,
            ['image' => $imagePath]
        ));
        
        return view('profiles.index', compact('user'));
    }
}
