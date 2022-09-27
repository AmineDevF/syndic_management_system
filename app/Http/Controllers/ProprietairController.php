<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProprietairController extends Controller
{
    public function index()
    {
        return view('proprietaire.index');
    }
}
