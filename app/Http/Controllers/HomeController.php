<?php

namespace App\Http\Controllers;

use App\Models\Facture;
use App\Models\Proprietaire;
use App\Models\Propriete;
use App\Models\User;
use Illuminate\Http\Request;
use PDF;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    // public function acceil()
    // {
    //     return view('layouts.index');
    // }
    public function paneaux()
    {
        $users = User::all();
       
        return view('admin.index', compact('users'));
    }
    public function downloadPDF($id) {

        $facture = Facture::find($id);
        $propriete = Propriete::find($facture->propriete_id);
        $proprietaire = Proprietaire::find($propriete->proprietaire_id);
       

             
               $pdf = PDF::loadView('facture.pdflist', compact('facture','propriete','proprietaire'));
               
               return $pdf->download('factures.pdf');
}

}
