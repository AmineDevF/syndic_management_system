<?php

namespace App\Http\Controllers;

use App\Models\Type_Propriete;
use Illuminate\Http\Request;

class Type_ProprieteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $propriete_type = Type_Propriete::all();

        // return view('proprietaire.index',compact('proprietaires'))
        //     
        return view('propriete_type.index', compact('propriete_type'));
    }
    public function create()
    {
        return view('propriete_type.create');
    }
    public function store(Request $request)
    {
        $request->validate([
           
            'type_propriete' => 'required',
            'batiment' => 'required',
            'etage' => 'required',
            'num_titre' => 'required',
            'surfac' => 'required',
            'article_impot' => 'required',
            
        ]);
    
        Type_Propriete::create($request->all());
     
        return redirect()->route('p_t')
                        ->with('success','Proprietaire created successfully.');
    }
}
