<?php

namespace App\Http\Controllers\Fuga;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UsersController extends Controller
{
    public function index()
    {
        return Inertia::render('User/Index', [
            'users' => User::all(),
        ]);
    }
}
