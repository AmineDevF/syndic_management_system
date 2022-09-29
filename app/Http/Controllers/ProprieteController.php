<?php

namespace App\Http\Controllers;

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
        $proprietes = Propriete::latest()->paginate(20);
   
       
        return view('propriete.index', compact('proprietes'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $propriete_types = Type_Propriete::all();
        return view('propriete.create' , compact('propriete_types'));
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
    public function show(Propriete $propriete)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Propriete  $propriete
     * @return \Illuminate\Http\Response
     */
    public function edit(Propriete $propriete)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Propriete  $propriete
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Propriete $propriete)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Propriete  $propriete
     * @return \Illuminate\Http\Response
     */
    public function destroy(Propriete $propriete)
    {
        //
    }
}
