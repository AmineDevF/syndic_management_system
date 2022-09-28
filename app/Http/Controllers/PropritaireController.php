<?php

namespace App\Http\Controllers;

use App\Models\Proprietaire;
use Illuminate\Http\Request;

class PropritaireController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proprietaires = Proprietaire::latest()->paginate(5);
   
        // return view('proprietaire.index',compact('proprietaires'))
        //     ->with('i', (request()->input('page', 1) - 1) * 5);
        return view('proprietaire.index', compact('proprietaires'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proprietaire.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
        ]);
    
        Proprietaire::create($request->all());
     
        return redirect()->route('propri.index')
                        ->with('success','Proprietaire created successfully.');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Proprietaire  $proprietaire
     * @return \Illuminate\Http\Response
     */
    public function show(Proprietaire $proprietaire)
    {
       
        
        return view('proprietaire.show',compact('proprietaire'));
    } 
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Proprietaire  $proprietaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Proprietaire $proprietaire)
    {
        
        return view('proprietaire.edit',compact('proprietaire'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Proprietaire  $proprietaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proprietaire $proprietaire)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
    
        $proprietaire->update($request->all());
    
        return redirect()->route('proprietaire.index')
                        ->with('success','Proprietaire updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proprietaire  $proprietaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proprietaire $proprietaire)
    {
        $proprietaire->delete();
    
        return redirect()->route('proprietaire.index')
                        ->with('success','Proprietaire deleted successfully');
    }
}
