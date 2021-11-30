@extends('layouts.main_admin')

@section('content')
<section class="section">
    <div class="section-header">
        @if (Route::is('demandes.courantes'))
        <h1>Demandes courantes</h1>
        @elseif (Route::is('demandes.acceptees'))
        <h1>Demandes acceptées</h1>
        @else
        <h1>Demandes refusées</h1>
        @endif
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item">Activities</div>
        </div>
    </div>
    <div class="section-body">
        <h2 class="section-title">{{ date('d-m-Y H:i') }}</h2>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4></h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            Code
                                        </th>
                                        <th>Intitule</th>
                                        <th>Coordonnateur</th>
                                        <th>Montant demandé</th>
                                        <th>Date reçu</th>
                                        <th>Modifier</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($demandes as $demande)
                                    <tr>
                                        <td>
                                            {{ $demande->code }}
                                        </td>
                                        <td>{{ $demande->manifestation->intitule }}</td>
                                        <td class="align-middle">
                                            {{ $demande->coordonnateur->name }}&nbsp;{{ $demande->coordonnateur->prenom
                                            }}
                                        </td>
                                        <td>
                                            {{ $demande->manifestation->soutienSollicite->sum('montant') }}
                                        </td>
                                        <td>{{ $demande->created_at }}</td>
                                        <td class="text-center"><a
                                                href="{{ route('admin.edit.manifestation',['id'=>$demande->id]) }}"
                                                class="text-job has-icon"><i class="fas fa-pen"></i></a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('scripts')
<script src="{{ mix('js/app.js') }}"></script>
<script src="../assets/js/page/modules-datatables.js"></script>
@endsection
