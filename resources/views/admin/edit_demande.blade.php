@extends('layouts.main_admin')

@section('content')
<section class="section">
    <div class="section-header d-flex justify-content-between pl-2 pr-3">
        @if ($manifestation != null )
        <div class="d-inline"><label for="">Intitule: </label>&nbsp;<span> {{ $manifestation->intitule }}</span></div>
        <div class="d-inline"><label for="">Type: </label>&nbsp;<span> {{ $manifestation->type }}</span></div>
        <div class="d-inline"><label for="">Coordonnateur: </label>&nbsp;<span> {{ $coordonnateur->name }}&nbsp;{{
                $coordonnateur->prenom }}</span></div>
        <div class="d-inline"><label for="">Date reçue: </label>&nbsp;<span> {{ $demande->date_envoie }}</span></div>
        <div class="d-inline"><span><a href="{{ url('/manif-details/'.$demande->id) }}" title="Plus de détails"><i
                        class="fa fa-plus fa-lg"></i></a></span></div>
        @endif
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12 col-sm-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Modification du montant sollicité</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-md">
                                <tr>
                                    <th class="text-center">Rubrique &nbsp;&nbsp;
                                        <a href="#" data-toggle="modal" data-target="#rubriqueModal"><i
                                                class="fa fa-book" aria-hidden="true"></i></a>
                                    </th>
                                    <th class="text-center">Nombre demandé</th>
                                    <th class="text-center">Montant demandé</th>
                                    <th class="text-center">Nombre accordé</th>
                                    <th class="text-center">Montant accordé</th>
                                </tr>
                                @for ($i = 0; $i < sizeof($soutienSollicite); $i++) <tr>
                                    <td class="text-center">{{ $soutienSollicite[$i]->libelle }} &nbsp;({{
                                        $soutienSollicite[$i]->forfait }})</td>
                                    <td class="">{{ $soutienSollicite[$i]->pivot->nbr }}</td>
                                    <td class="text-center">{{ $soutienSollicite[$i]->pivot->montant }} &nbsp;&nbsp;
                                        <i class="fa fa-info-circle" aria-hidden="true" data-container="body"
                                            data-toggle="popover" data-placement="right"
                                            data-content="{{ $soutienSollicite[$i]->pivot->remarques_ }}" role="button">
                                        </i>
                                    </td>
                                    <td class="text-right"><input class="form-control" type="number" name="" id=""></td>
                                    <td class="text-right"><input class="form-control montantOk" type="number"  id=""></td>
                                    </tr>
                                    @endfor

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-md">
                                <tr>
                                    <th>Total demandé</th>
                                    <th class="text-right"><input class="form-control" disabled type="number" name=""
                                            id=""></th>
                                    <th>Total accordé</th>
                                    <th class="text-right"><input class="form-control text-right" disabled type="number"
                                            value="1000" name="totalmontant" id="totalmontant"></th>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-success">Enregistrer</button>
                        <button class="btn btn-danger">Annuler</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ------------------ MODALS ---------------------- -->
    <div class="modal fade" tabindex="-1" role="dialog" id="rubriqueModal" data-backdrop="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Rubriques soutenues par l’UCAM</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-md">
                            <tr>
                                <th>Rubrique</th>
                                <th>Forfait</th>
                                <th>Limite</th>
                                <th>Description</th>
                                <th>Remarques</th>
                            </tr>
                            @foreach ($frais as $frais_)
                            <tr>
                                <td>{{ $frais_->libelle }}</td>
                                <td>{{ $frais_->forfait }}
                                    @if ( $frais_->forfait =="" )
                                    <span>-----</span>
                                    @endif
                                </td>
                                <td>{{ $frais_->limite }}</td>
                                <td>{{ $frais_->description }}</td>
                                <td>{{ $frais_->remarques }}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
