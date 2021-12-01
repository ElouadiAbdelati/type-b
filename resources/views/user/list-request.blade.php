@extends('layouts.main_user')

@section('content')

<section class="section">
  <div class="section-header">
    <h1>Liste des demandes</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
      <div class="breadcrumb-item"><a href="#">Forms</a></div>
      <div class="breadcrumb-item">Form Validation</div>
    </div>
  </div>



  <div class="section-body">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Résultats</h4>
              <div class="card-header-action">
                <form>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-btn">
                      <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table table-striped" id="sortable-table">
                  <thead>
                    <tr>
                      <th class="text-center">
                        <i class="fas fa-th"></i>
                      </th>
                      <th>Code</th>
                      <th>Date envoie</th>
                      <th>remarques</th>
                      <th>etat</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($demandes as $demande)
                    <tr>
                      <td>
                        <div class="sort-handler">
                          <i class="fas fa-th"></i>
                        </div>
                      </td>
                      <td>{{$demande->code}}</td>
                      <td class="align-middle">
                        {{$demande->date_envoie}}
                      </td>
                      <td> {{$demande->remarques}}</td>
                      <td>
                        @if ($demande->etat === "PENDING")
                        <div class="badge badge-danger">{{$demande->etat}}</div>

                        @else
                        <div class="badge badge-success">{{$demande->etat}}</div>

                        @endif

                      </td>
                      <td><a href="{{route('request.pdf',['id'=>$demande->id])}}" class="btn btn-secondary">Detail</a></td>
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
  </div>
</section>
@endsection