<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProprieteController extends Controller
{
    public function index()
    {
        return view('propriete.index');
    }
}
