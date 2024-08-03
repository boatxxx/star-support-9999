<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        return view('admin', compact('user'));
    }

    public function index1()
    {
        $user = Auth::user();
        return view('user', compact('user'));
    }
}
