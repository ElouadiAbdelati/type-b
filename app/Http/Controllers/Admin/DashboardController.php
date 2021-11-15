<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ComiteOrganisation;
use App\Models\Contributeur;
use App\Models\EntiteOrganisatrice;
use App\Models\Etablissement;
use App\Models\FraisCouvert;
use App\Models\Manifestation;
use App\Models\ManifestationComite;
use App\Models\ManifestationContributeur;
use App\Models\NatureContribution;
use App\Models\SoutienSollicite;
use App\Models\TypeContributeur;
use Illuminate\Http\Request;

class DashboardController extends Controller
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
        return view('admin/index');
    }
}
