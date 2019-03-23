<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;

class UserController extends Controller
{
    public function user($id)
    {
        $users = User::find($id);
        return view('user', ['users' => $users]);
    }
}
