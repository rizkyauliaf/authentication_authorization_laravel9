<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        return view('home', ['user' => $user]);
    }

    public function login()
    {
        return view('login_lte');
    }
    public function index_admin()
    {
        return 'Halaman Index Admin';
    }

    public function index_user()
    {
        return 'Halaman Index User';
    }
}
