<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Demande;
use App\Models\Manifestation;
use App\Models\User;
use App\Services\ServicesImpl\DemandeServiceImpl;
use Illuminate\Http\Request;

class AdminsController extends Controller
{
    public function getManifestation()
    {
        $manif = Manifestation::first();
        return view('admin/edit_demande',['manif'=>$manif]);
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

    public function getManifestationDetails(){
        return view('admin/manif_details');
    }
}
