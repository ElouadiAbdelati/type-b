<?php

namespace App\Services\ServicesImpl;

use App\Models\Manifestation;
use App\Services\ManifestationService;

class ManifestationServiceImpl implements ManifestationService
{
    public static function findAll()
    {
        return Manifestation::all();
    }
    public static function findById($id)
    {
        return Manifestation::findOrFail($id);
    }
    public static function save($manif)
    {
        return Manifestation::create($manif);
    }
    public static function update($manif)
    {
        return $manif->save();
    }
    public static function delete($id)
    {
        $manif = ManifestationServiceImpl::findById($id);
        return $manif->delete();
    }

    public static function getManifestation($id)
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

    public static function getManifestationDetails($id)
    {
        $details_part1 = ManifestationServiceImpl::getManifestation($id);

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
