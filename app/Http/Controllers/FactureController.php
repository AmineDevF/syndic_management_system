<?php

namespace App\Http\Controllers;

use App\Models\Facture;
use App\Models\Propriete;
use Illuminate\Http\Request;
use PDF;
class FactureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facturss = Facture::paginate(5);
   
       
        return view('facture.index', compact('facturss'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $propriete_info = Propriete::all();
        
        return view('facture.create' , compact('propriete_info'));
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
            'prestation' => 'required',
            'num_facture' => 'required',
            'montant' => 'required',
            'date_facture' => 'required',
            'propriete_id' => 'required',
            
        ]);
    
        Facture::create($request->all());
     
        return redirect()->route('facture.index')
                        ->with('success','Facture created successfully.');
    }

   

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Facture  $factures
     * @return \Illuminate\Http\Response
     */
    public function show(Facture $factures)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Facture  $factures
     * @return \Illuminate\Http\Response
     */
    public function edit(Facture $factures)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Factures  $factures
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, factures $factures)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Factures  $factures
     * @return \Illuminate\Http\Response
     */
    public function destroy($facture)
    {
        $factures = Facture::findOrFail($facture);
        $factures->delete();
    
        return redirect()->route('facture.index')
                        ->with('success','Facture deleted successfully');
    }
}
