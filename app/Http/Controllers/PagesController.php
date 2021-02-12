<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;

class PagesController extends Controller
{
    public function home(){
        $entretenimientos = Models\Entretenimiento::all();
        return view('welcome', compact('entretenimientos'));
    }

    public function registro(){
        return view('register');
    }
}
