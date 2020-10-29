<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Pertanyaan;

class ProfilController extends Controller
{
    public function index(User $user)
    {
        $pertanyaans = Pertanyaan::where('user_id', $user->id)->orderBy('created_at', 'desc')->paginate(5);
        return view('profil', compact('user', 'pertanyaans'));
    }
}