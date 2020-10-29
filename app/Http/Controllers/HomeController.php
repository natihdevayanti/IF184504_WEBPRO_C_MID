<?php

namespace App\Http\Controllers;

use App\Pertanyaan;
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
    public function index(Request $request)
    {
        if($request->has('cari'))
        {
            $pertanyaans = Pertanyaan::where('pertanyaan', 'LIKE', '%'.$request->cari.'%')->orderBy('created_at', 'desc')->paginate(10);
        }
        else{
            $pertanyaans = Pertanyaan::orderBy('created_at', 'desc')->paginate(10);
        }
        return view('home', compact ('pertanyaans'));
    }
}
