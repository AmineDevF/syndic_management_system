<?php

namespace App\Http\Controllers;

use App\Models\Facture;

use Illuminate\Http\Request;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function destroy(factures $factures)
    {
        //
    }
}
