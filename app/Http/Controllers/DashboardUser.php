<?php

namespace App\Http\Controllers;

use App\Models\EntiteOrganisatrice;
use App\Models\Etablissement;
use Illuminate\Http\Request;

class DashboardUser extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard-user/index');
    }


    public function createRequest(Request $request)
    {
      
        $etablissements= Etablissement::all();
        
        if ($request->isMethod('post')) {
            
            dd($request->all());
        }

        return view('dashboard-user/create-request',["etablissements"=>$etablissements]);
    }

    
}
