<?php

namespace App\Http\Controllers;

use App\Models\Proprietaire;
use Illuminate\Http\Request;

class ProprietairController extends Controller
{
    public function index()
    {
        $proprietaires = Proprietaire::latest()->paginate(5);
   
        
        return view('proprietaire.index', compact('proprietaires'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function creat()
    {
        return view('proprietaire.create');
    }

    public function show($id)
    {
        $proprietaire = Proprietaire::findOrFail($id);
        dd($proprietaire);
       
        return view('proprietaire.show',compact('proprietaire'));
    } 
     


}
