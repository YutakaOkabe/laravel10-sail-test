<?php

namespace App\Http\Controllers\Hoge;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        return view('hoge.users.index', ['users' => User::all()]);
    }
}
