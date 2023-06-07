<?php

namespace App\Http\Controllers\Fuga;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        return view('fuga.users.index', ['users' => User::all()]);
    }
}
