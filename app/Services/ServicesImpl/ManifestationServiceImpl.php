<?php

namespace App\Services\ServicesImpl;

use App\Models\Manifestation;
use App\Services\ManifestationService;

class ManifestationServiceImpl implements ManifestationService
{
    public  function findAll()
    {
        return Manifestation::all();
    }
    public  function findById($id)
    {
        return Manifestation::findOrFail($id);
    }
    public  function save($manif)
    {
        return Manifestation::create($manif);
    }
    public  function update($manif)
    {
        return $manif->save();
    }
    public  function delete($id)
    {
        $manif = $this->findById($id);
        return $manif->delete();
    }

    public  function getManifestation($id)
    {
        $frais = FraisCouvetServiceImpl::findAll();
        $demande = DemandeServiceImpl::findById($id);
        $manifestation = $demande->manifestation;
        $coordonnateur = DemandeServiceImpl::findById($id)->coordonnateur;
        $soutienSollicites = $manifestation->soutienSollicite;
        $soutienAccordes = $manifestation->soutienAccorde;
        return [
            'demande' => $demande,'manifestation' => $manifestation, 'coordonnateur' => $coordonnateur, 'soutienSollicite' => $soutienSollicites,
            'soutienAccorde' => $soutienAccordes, 'frais'=> $frais
        ];
    }

    public  function getManifestationDetails($id)
    {
        $details_part1 = $this->getManifestation($id);

        $manifestation = $details_part1['manifestation'];
        $entiteOrganisatrice = $manifestation->entiteOrganisatrice;
        $etablissements = $manifestation->etablissements;
        $contributeurs = $manifestation->contributeurs;
        $gestionFinanciere = $manifestation->gestionFinanciere;
        $comiteOrganisations = $manifestation->comites;

        $details = array_merge($details_part1, [
            'entiteOrganisatrice' => $entiteOrganisatrice,
            'etablissements' => $etablissements, 'contributeurs' => $contributeurs,
             'gestionFinanciere' => $gestionFinanciere,'comiteOrganisations'=>$comiteOrganisations
        ]);

        return $details;
    }
}
