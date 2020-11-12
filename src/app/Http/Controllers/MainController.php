<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MainController extends Controller
{
    public function index()
    {
        return response()->view('home');
    }

    public function info()
    {
        return response()->view('info');
    }

    public function members()
    {
        return response()->view('members');
    }

    public function administration()
    {
        $admins = User::where('isAdministrator', 1)->get();
//        $admins = User::all();
        return response()->view('administration', ['data' => $admins]);
    }
}
