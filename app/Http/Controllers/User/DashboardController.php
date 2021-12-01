<?php


namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use App\Models\ComiteOrganisation;
use App\Models\Contributeur;
use App\Models\Demande;
use App\Models\EntiteOrganisatrice;
use App\Models\Etablissement;
use App\Models\FraisCouvert;
use App\Models\GestionFinanciere;
use App\Models\Manifestation;
use App\Models\ManifestationComite;
use App\Models\ManifestationContributeur;
use App\Models\ManifestationEtablissement;
use App\Models\NatureContribution;
use App\Models\SoutienSollicite;
use App\Models\TypeContributeur;
use App\Services\DemandeService;
use Illuminate\Http\Request;
use PDF;
class DashboardController extends Controller
{
    
    private DemandeService $demandeService ;
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(DemandeService $demandeService){
        $this->demandeService  =$demandeService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {  
        $demandes = $this->demandeService->findAll();
        return view('user/list-request',['demandes'=>$demandes]);
    }

    public function generatePDF(Request $request)
    {   
        $demande = $this->demandeService->findById($request->route('id'));
        $pdf = PDF::loadView('user/pdf', compact('demande'));
        return $pdf->stream("invoice.pdf",array("Attachment" => false));
    }

    public function createRequest(Request $request)
    {

        $etablissements = Etablissement::all();
        $user = $request->user();
        $typeContributeurs = TypeContributeur::all();
        $fraisCouvert = FraisCouvert::all();
        $natureContributions  = NatureContribution::all();
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

            $demande = new Demande();
            $demande->code = 'sdv';
            $demande->date_envoie = date('Y-m-d H:i:s');
            $demande->etat = 'PENDING';
            $demande->remarques = 'PENDING';
            $demande->coordonnateur_id = $user->id;
            $demande = Demande::create($demande->getAttributes());

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
            $manifestation->demande_id = $demande->getAttributes()["id"];

            $manifestation = Manifestation::create($manifestation->getAttributes());
           
            $gestionFinanciere = json_decode($data['gestionFinanciere'], true); 
            for ($i = 0; $i < count($gestionFinanciere); $i++) {
                $gestionFinanciere[$i]["manifestation_id"] = $manifestation->getAttributes()["id"];
                GestionFinanciere::create($gestionFinanciere[$i]);
            }

            $etablissementsOrganisateur = $data['etablissements_organisateur'];
            for ($i = 0; $i < count($etablissementsOrganisateur); $i++) {
                $manifestationEtablissement = new ManifestationEtablissement();
                $manifestationEtablissement->manifestation_id = $manifestation->getAttributes()["id"];
                $manifestationEtablissement->etablissement_id = $etablissementsOrganisateur[$i];
                ManifestationEtablissement::create($manifestationEtablissement->getAttributes());
            }

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
                $manifestationContributeur = ManifestationContributeur::create($manifestationContributeur->getAttributes());
            }

            for($i= 0;$i<count($fraisCouvert);$i++){
                if($request->has("frais-ouvert-".$fraisCouvert[$i]->id)){
                   $soutienSollicite = new SoutienSollicite();
                   $soutienSollicite->nbr = $data["nombre_frais_ouvert_".$fraisCouvert[$i]->id];
                   $soutienSollicite->montant = $data["montant_frais_ouvert_".$fraisCouvert[$i]->id];
                   $soutienSollicite->remarques = $data["remarques_frais_ouvert_".$fraisCouvert[$i]->id];
                   $soutienSollicite->manifestation_id = $manifestation->getAttributes()["id"];
                   $soutienSollicite->frais_couvert_id = $fraisCouvert[$i]->id;
                   SoutienSollicite::create($soutienSollicite->getAttributes());
                }
           }

            return redirect()->route('dashboard.user');
        }

        return view('user/create-request', ["natureContributions" => $natureContributions, "typeContributeurs" => $typeContributeurs, "etablissements" => $etablissements, 'user' => $user, 'fraisCouvert' => $fraisCouvert]);
    }
}
