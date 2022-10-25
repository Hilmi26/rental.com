<?php

namespace App\Http\Controllers;

use App\Models\detail_user;
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
        $data = detail_user ::all();
        return view('home');
        // if (Auth:: user()->username) {
        //     return redirect ('page/detailuser/create');
        // } else {
        //     return redirect ('register'); 
        // } 
    }
}
