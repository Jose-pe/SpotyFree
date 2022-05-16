<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\discos;
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
        if (Auth()->user()->rol == "Admin") {
            return redirect()->route('discos.index');
        }
        else{
            $discos = discos::simplePaginate(12);
            return view('home', compact('discos'));    
        }
        
    }
}
