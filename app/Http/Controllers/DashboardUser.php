<?php

namespace App\Http\Controllers;

use App\Models\ComiteOrganisation;
use App\Models\Contributeur;
use App\Models\EntiteOrganisatrice;
use App\Models\Etablissement;
use App\Models\FraisCouvert;
use App\Models\Manifestation;
use App\Models\ManifestationComite;
use App\Models\ManifestationContributeur;
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

        $etablissements = Etablissement::all();
        $user = $request->user();

        $fraisCouvert = FraisCouvert::all();
        if ($request->isMethod('post')) {
            $data = $request->all();

            $user->etablissement_id =  $data['etablissment_coordonnateur_manifestation'];
            $user->tel =  $data['tel_coordonnateur_manifestation'];
            $user->fax =  $data['fax_coordonnateur_manifestation'];


            $updated = $user->update($user->getAttributes());

            if (!$updated) {
                dd("field to update user");
            }
            $entiteOrganisatrice = new EntiteOrganisatrice();
            $entiteOrganisatrice->nom = $data['nom_entite_organisatrice'];
            $entiteOrganisatrice->responsable = $data['responsable_entite_organisatrice'];
            $entiteOrganisatrice->etablissement_id = $data['etablissement_entite_organisatrice'];
            $entiteOrganisatrice = EntiteOrganisatrice::create($entiteOrganisatrice->getAttributes());

            $manifestation = new Manifestation();
            $manifestation->intitule = $data['intitule'];
            $manifestation->type = $data['type'];
            $manifestation->etendue = $data['etendue'];
            $manifestation->lieu = $data['lieu'];
            $manifestation->site_web = $data['site_web'];
            $manifestation->agence_organisatrice = $data['agence_organisatrice'];
            $manifestation->partenaires = $data['partenaires'];
            $manifestation->nbr_participants_prevus = $data['nbr_participants_prevus'];
            $manifestation->date_debut = $data['date_debut'];
            $manifestation->date_fin = $data['date_fin'];
            $manifestation->entite_organisatrice_id = $entiteOrganisatrice->getAttributes()["id"];
            // $manifestation->coordonnateur_id = $user->id;

            $manifestation = Manifestation::create($manifestation->getAttributes());

            $comiteOrganisation = json_decode($data['comiteOrganisation'], true);
            for ($i = 0; $i < count($comiteOrganisation); $i++) {
                $organisature = ComiteOrganisation::create($comiteOrganisation[$i]);
                $manifestationComite = new ManifestationComite();
                $manifestationComite->comite_organisation_id = $organisature->getAttributes()['id'];
                $manifestationComite->manifestation_id = $manifestation->getAttributes()["id"];
                $manifestationComite = ManifestationComite::create($manifestationComite->getAttributes());
            }

            $contributeurs = json_decode($data['contributeurs'], true);
            for ($i = 0; $i < count($contributeurs); $i++) {
                $contributeur = Contributeur::create($contributeurs[$i]);
                $manifestationContributeur = new ManifestationContributeur();
                $manifestationContributeur->contributeur_id = $contributeur->getAttributes()['id'];
                $manifestationContributeur->manifestation_id  = $manifestation->getAttributes()["id"];
                $manifestationContributeur =ManifestationContributeur::create($manifestationContributeur ->getAttributes());
            }


        }

        return view('dashboard-user/create-request', ["etablissements" => $etablissements, 'user' => $user, 'fraisCouvert' => $fraisCouvert]);
    }
}
