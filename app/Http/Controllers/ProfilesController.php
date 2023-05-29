<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($user)
    {
        $user = \App\Models\User::find($user);

        return view('home', [
            'user' => $name,
        ]);
    }
}
