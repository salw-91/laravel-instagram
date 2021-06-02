<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $userId = Auth::user()->id;
        $user = User::findOrfail($userId);
        // dd($user->id);

        return view('profiles.index', [
            'user' => $user,
        ]);
    }
}
