<?php

namespace App\Http\Controllers;

use App\Http\Middleware\user;
use App\Models\detail_rental;
use App\Models\detail_user;
use App\Models\mobil;
use App\Models\rental;
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
        // $data = mobil::all();
        // $data = detail_user::all();
        $data = detail_rental::all();
        if (Auth::user()->role == 'admin') {
            return redirect('contact');
        }elseif (Auth::user()->role =='rental'){
            return redirect('detail_rental');
        }else {
            return redirect('/page/detailuser');
        }
    }
}
