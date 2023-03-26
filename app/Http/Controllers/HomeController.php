<?php

namespace App\Http\Controllers;

use App\Models\ProjectsBiddig;
use Illuminate\Http\Request;

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
        $title = "Dashboard";
        $projects = ProjectsBiddig::with('project','user')->get();

        return view('home', compact('title','projects'));
    }
}
