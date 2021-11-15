<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Demande;
use App\Models\Manifestation;
use App\Models\User;
use App\Services\DemandeService;
use App\Services\ServicesImpl\DemandeServiceImpl;
use App\Services\ServicesImpl\FraisCouvetServiceImpl;
use App\Services\ServicesImpl\ManifestationServiceImpl;
use Illuminate\Http\Request;

class AdminsController extends Controller
{
    public function getManifestation($id)
    {
        return view('admin/edit_demande',ManifestationServiceImpl::getManifestation($id));
    }

    public function delete(Request $request){
        try {

        $id = $request->demande;
        DemandeServiceImpl::delete($id);
        $msg = "Demande deleted";
        return redirect('/admin_edit_form');
        } catch (\Exception $ex) {
            error_log($ex->getMessage());
            return redirect('/admin_edit_form');
        }
    }

    public function getManifestationDetails($id){
        return view('admin/manif_details',ManifestationServiceImpl::getManifestationDetails($id));
    }
}
