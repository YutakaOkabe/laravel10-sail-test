<?php

namespace App\Http\Controllers\Fuga;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        return Inertia::render('Home/Index', [
            'users' => User::all(),
        ]);
    }

    public function about()
    {
        return Inertia::render('Home/About', [
            'users' => User::all(),
        ]);
    }
}
