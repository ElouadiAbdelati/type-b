@extends('layouts.main')

@section('contenue')
<section class="section">
    <div class="section-header d-flex justify-content-between pl-2 pr-3">
        @if ($manif != null )
        <div class="d-inline"><label for="">Intitule: </label>&nbsp;<span> {{ $manif->intitule }}</span></div>
        <div class="d-inline"><label for="">Type: </label>&nbsp;<span> {{ $manif->type }}</span></div>
        <div class="d-inline"><label for="">Lieu: </label>&nbsp;<span> {{ $manif->lieu }}</span></div>
        <div class="d-inline"><label for="">Date reçue: </label>&nbsp;<span> 14/11/2021</span></div>
        <div class="d-inline"><span><a href="{{ url('/manif-details') }}" title="Plus de détails"><i class="fa fa-plus fa-lg"></i></a></span></div>
        @endif
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12 col-sm-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Modofocation du montant sollicité</h4>
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
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="text-center">Irwansyah Saputra</td>
                                    <td class="text-center">0000 &nbsp;&nbsp;
                                        <i class="fa fa-info-circle" aria-hidden="true" data-container="body"
                                            data-toggle="popover" data-placement="right"
                                            data-content="Des remarques du coordonnateur." role="button">
                                        </i>
                                    </td>
                                    <td class="text-right"><input class="form-control" type="number" name="" id=""></td>
                                    <td class="text-right"><input class="form-control" type="number" name="" id=""></td>
                                </tr>
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
                                            value="1000" name="" id=""></th>
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
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-md">
                            <tr>
                                <th>Rubrique <a href="#" data-toggle="modal" data-target="#rubriqueModal"><i
                                            class="fa fa-book" aria-hidden="true"></i></a></th>
                                <th>Nombre demandé</th>
                                <th>Montant demandé</th>
                                <th>Nombre accordé</th>
                                <th>Montant accordé</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Irwansyah Saputra</td>
                                <td>0000 &nbsp;
                                    <i class="fa fa-info-circle" aria-hidden="true" data-container="body"
                                        data-toggle="popover" data-placement="right"
                                        data-content="Des remarques du coordonnateur." role="button">
                                    </i>
                                </td>
                                <td>000</td>
                                <td>0000</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
