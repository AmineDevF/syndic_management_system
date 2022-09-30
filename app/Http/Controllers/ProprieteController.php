<?php

namespace App\Http\Controllers;

use App\Models\Proprietaire;
use App\Models\Propriete;
use App\Models\Type_Propriete;
use Illuminate\Http\Request;

class ProprieteController extends Controller
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
        $proprietes = Propriete::paginate(5);
   
       
        return view('propriete.index', compact('proprietes'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proprietaire_info = Proprietaire::all();
        $propriete_types = Type_Propriete::all();
        return view('propriete.create' , compact('propriete_types','proprietaire_info'));
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
            'type_propriete' => 'required',
            'batiment' => 'required',
            'etage' => 'required',
            'num_titre' => 'required',
            'surfac' => 'required',
            'article_impot' => 'required',
            'proprietaire_id' => 'required',
            
        ]);
    
        Propriete::create($request->all());
     
        return redirect()->route('propriete.index')
                        ->with('success','Propriete created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Propriete  $propriete
     * @return \Illuminate\Http\Response
     */
    public function show(Propriete $proprietee , $propriete)
    {
        $propriete = Propriete::findOrFail($propriete);
        //  dd($propriete->proprietaire()) ;
         $all_proprietaire = Proprietaire::findOrFail($propriete->proprietaire_id);
       
        
        return view('propriete.show',compact('propriete','all_proprietaire'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Propriete  $propriete
     * @return \Illuminate\Http\Response
     */
    public function edit( $proprite)
    {
        $propriete_types = Type_Propriete::all();
        $propriete = Propriete::findOrFail($proprite);
        return view('propriete.edite',compact('propriete','propriete_types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Propriete  $propriete
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Propriete $proprietee , $propriete)
    {
        $request->validate([
            'type_propriete' => 'required',
            'batiment' => 'required',
            'etage' => 'required',
            'num_titre' => 'required',
            'surfac' => 'required',
            'article_impot' => 'required',
            // 'proprietaire_id' => 'required',
            
            
        ]);
        $propriete = Propriete::findOrFail($propriete);
        $propriete->update($request->all());

        
    
        return redirect()->route('propriete.index')
                        ->with('success','Propriete updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Propriete  $propriete
     * @return \Illuminate\Http\Response
     */
    public function destroy($proprietee)
    {
        $propriete = Propriete::findOrFail($proprietee);
        $propriete->delete();
    
        return redirect()->route('propriete.index')
                        ->with('success','Propriete deleted successfully');
    }
}
