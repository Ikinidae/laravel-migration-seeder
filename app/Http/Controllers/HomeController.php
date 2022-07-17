<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function trains () {
        return view('home')->name('home');
    }
}
