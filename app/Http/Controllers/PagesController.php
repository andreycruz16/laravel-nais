<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
    		$names = ['mark', 'angela', 'liza'];
    		return view('home', compact('names'));   	
    }
}
