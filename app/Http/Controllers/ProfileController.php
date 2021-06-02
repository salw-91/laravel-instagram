<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class ProfileController extends Controller
{
    public function index($user)
    {
        $user = User::findOrfail($user);

        return view('profiles.index', [
            'user' => $user,
        ]);
    }
}
