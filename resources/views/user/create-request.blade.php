@extends('layouts.main_user')

@section('content')

<section class="section">
  <div class="section-header">
    <h1>Créer une demande</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
      <div class="breadcrumb-item"><a href="#">Forms</a></div>
      <div class="breadcrumb-item">Form Validation</div>
    </div>
  </div>

  <div class="steps">
    <div class="step ">
      <p>

      </p>
      <div class="bullet">
        <span>1</span>
      </div>
      <div class="check fas fa-check"></div>
    </div>
    <div class="step">
      <p>

      </p>
      <div class="bullet">
        <span>2</span>
      </div>
      <div class="check fas fa-check"></div>
    </div>
    <div class="step">
      <p>

      </p>
      <div class="bullet">
        <span>3</span>
      </div>
      <div class="check fas fa-check"></div>
    </div>
    <div class="step">
      <p>

      </p>
      <div class="bullet">
        <span>4</span>
      </div>
      <div class="check fas fa-check"></div>
    </div>
  </div>

  <div class="section-body">

    <div class="container">
      <div class="form-outer">
        <form action="#">
          <div class="page slide-page">
            <div class="row">

              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Informations concernant la manifestation</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                      <label>intitule</label>
                      <input type="text" class="form-control" name="intitule" required="">
                    </div>
                    <div class="form-group">
                      <label>Type</label>
                      <input type="text" class="form-control" name="type" required="">
                    </div>
                    <div class="form-group">
                      <label>Lieu</label>
                      <input type="text" class="form-control" name="lieu" required="">
                    </div>
                    <div class="form-group">
                      <label>Etendue</label>
                      <input type="text" class="form-control" name="etendue" required="">
                    </div>
                    <div class="form-group">
                      <label>Site web</label>
                      <input type="text" class="form-control" name="site_web" required="">
                    </div>
                    <div class="form-group">
                      <label>Agence organisatrice </label>
                      <input type="text" class="form-control" name="agence_organisatrice" required="">
                    </div>
                    <div class="form-group">
                      <label>Partenaires </label>
                      <input type="text" class="form-control" name="partenaires" required="">
                    </div>
                    <div class="section-title mt-0"></div>
                    <div class="form-group">
                      <label>Etablissement(s) de l’UCAM impliqué(s) dans l’organisation </label>
                      <select class="custom-select" name="etablissements_organisateur[]" id="etablissements_organisateur" multiple="multiple" data-height="100%">
                        @foreach ($etablissements as $etablissement)
                        <option value="{{$etablissement->id}}" id="{{$etablissement->libelle}}" selected>{{$etablissement->libelle}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Numbre participants prevus </label>
                      <input type="number" class="form-control" name="nbr_participants_prevus" min="0" required="">
                    </div>
                    <div class="form-group">
                      <label>Date debut</label>
                      <input type="date" class="form-control" name="date_debut" required="">
                    </div>
                    <div class="form-group">
                      <label>Date fin</label>
                      <input type="date" class="form-control" name="date_fin" required="">

                    </div>

                  </div>
                  <div class="card-footer text-right">
                    <button class="btn btn-primary firstNext next"> Next </button>
                  </div>
                </div>



              </div>

            </div>

          </div>
          <div class="page">
            <div class="col-12 col-md-12 col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h4>Entité de recherche organisant la manifestation</h4>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label>nom</label>
                    <input type="text" class="form-control" name="nom_entite_organisatrice" required="">
                  </div>
                  <div class="form-group">
                    <label>responsable</label>
                    <input type="text" class="form-control" name="responsable_entite_organisatrice" required="">
                  </div>
                  <div class="section-title mt-0">Etablissment</div>
                  <div class="form-group">
                    <select class="custom-select" name="etablissement_entite_organisatrice">
                      @foreach ($etablissements as $etablissement)
                      <option value="{{$etablissement->id}}" selected>{{$etablissement->libelle}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h4> Comment la gestion financière est-elle prévue ?</h4>
                </div>
                <div class="card-body">


                  <div class="form-group">
                    <label>Libelle</label>
                    <input type="text" class="form-control" id='libelle_gestion_financiere' name="libelle_gestion_financiere">
                  </div>
                  <div class="form-group">
                    <label>Information</label>
                    <input type="text" min="0" class="form-control" id='information_gestion_financiere' name="information_gestion_financiere">
                  </div>
                </div>
                <div class="card-footer text-right">
                  <p style="cursor:pointer" class="btn btn-primary" onclick="addGestionFinanciere(document.getElementById('libelle_gestion_financiere').value,document.getElementById('information_gestion_financiere').value );">+</p>
                </div>
                <div style="overflow-x:auto;">
                  <table class="table " id="gestion_financiere_table">
                    <thead>
                      <tr>
                        <th scope="col">Libelle</th>
                        <th scope="col">Information</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h4>Coordonnateur de la manifestation</h4>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label>Nom</label>
                    <input type="text" value="{{$user->name}}" class="form-control" name="nom_coordonnateur_manifestation" disabled>
                  </div>
                  <div class="form-group">
                    <label>Prenom</label>
                    <input type="text" value="{{$user->prenom}}" class="form-control" name="prenom_coordonnateur_manifestation" name="type" disabled>
                  </div>

                  <div class="section-title mt-0">Etablissment</div>

                  <select class="custom-select" name="etablissment_coordonnateur_manifestation">
                    @foreach ($etablissements as $etablissement)
                    <option value="{{$etablissement->id}}" selected>{{$etablissement->libelle}}</option>
                    @endforeach
                  </select>

                  <div class="form-group">
                    <label>Tel</label>
                    <input type="tel" value="{{$user->tel}}" class="form-control" name="tel_coordonnateur_manifestation" name="type" required="">
                  </div>
                  <div class="form-group">
                    <label>Fax</label>
                    <input type="tel" class="form-control" name="fax_coordonnateur_manifestation" name="fax_coordonnateur_manifestation">
                  </div>
                </div>
                <div class="card-footer text-right">
                  <p class="btn btn-primary prev-1 prev"> Previous </p>
                  <p class="btn btn-primary next-1 next"> Next </p>

                </div>
              </div>

            </div>

          </div>
          <div class="page">
            <div class="col-12 col-md-12 col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h4>Contributeurs</h4>
                </div>
                <div class="card-body">

                  <div class="section-title mt-0">Type</div>
                  <div class="form-group">
                    <select class="custom-select" id="type_contributeur" name="type_contributeur">
                      @foreach ($typeContributeurs as $typeContributeur)
                      <option value="{{$typeContributeur->id}}" id="{{$typeContributeur->libelle}}" selected>{{$typeContributeur->libelle}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Nom</label>
                    <input type="text" class="form-control" id='nom_contributeur' name="nom_contributeur">
                  </div>
                  <div class="form-group">
                    <label>Montant</label>
                    <input type="number" min="0" class="form-control" id='montant_contributeur' name="montant_contributeur">
                  </div>

                  <div class="section-title mt-0">Nature</div>
                  <div class="form-group">
                    <select class="custom-select" id="nature_contributeur" name="nature_contributeur">
                      @foreach ($natureContributions as $natureContribution)
                      <option value="{{$natureContribution->id}}" id="{{$natureContribution->libelle}}" selected>{{$natureContribution->libelle}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="card-footer text-right">
                  <p style="cursor:pointer" class="btn btn-primary" onclick="addContributeur(document.getElementById('nom_contributeur').value,$('#type_contributeur').children(':selected').attr('id'),document.getElementById('type_contributeur').value ,document.getElementById('montant_contributeur').value,$('#nature_contributeur').children(':selected').attr('id'),document.getElementById('nature_contributeur').value );">+</p>
                </div>
                <div style="overflow-x:auto;">
                  <table class="table " id="contributeurs_table">
                    <thead>
                      <tr>
                        <th scope="col">Type</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Montant</th>
                        <th scope="col">Nature</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                    </tbody>
                  </table>
                </div>
                <div class="card-footer text-right">
                  <p class="btn btn-primary prev-2 prev"> Previous </p>
                  <p class="btn btn-primary next-2 next"> Next </p>
                </div>

              </div>
            </div>

          </div>
          <div class="page">
            <div class="col-12 col-md-12 col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h4>Comité d'organisation</h4>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label>Nom</label>
                    <input type="text" class="form-control" id="nom_organisateur" name="nom_organisateur">
                  </div>
                  <div class="form-group">
                    <label> Prenom</label>
                    <input type="text" class="form-control" id="prenom_organisateur" name="prenom_organisateur">
                  </div>
                  <div class="form-group">
                    <label> Tel</label>
                    <input type="tel" class="form-control" id="tel_organisateur" name="tel_organisateur">
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" id="email_organisateur" name="email_organisateur">
                  </div>
                  <div class="section-title mt-0">Etablissment</div>
                  <div class="form-group">
                    <select class="custom-select" id="etablissement_organisateur" name="etablissement_organisateur">
                      @foreach ($etablissements as $etablissement)
                      <option value="{{$etablissement->id}}" id="{{$etablissement->libelle}}" selected>{{$etablissement->libelle}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="card-footer text-right">
                    <p style="cursor:pointer" class="btn btn-primary" onclick="addOrganisateur(document.getElementById('tel_organisateur').value,document.getElementById('nom_organisateur').value ,document.getElementById('prenom_organisateur').value,document.getElementById('email_organisateur').value, $('#etablissement_organisateur').children(':selected').attr('id') ,document.getElementById('etablissement_organisateur').value );">+</p>
                  </div>
                  <div style="overflow-x:auto;">
                    <table class="table " id="organisateurs_table">
                      <thead>
                        <tr>
                          <th scope="col">nom & prenom</th>
                          <th scope="col">etablissement</th>
                          <th scope="col">email</th>
                          <th scope="col">tel</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>

                      </tbody>
                    </table>
                  </div>

                </div>

              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-12">

              <div class="card">
                <div class="card-header">
                  <h4>Soutien sollicité de l’Université</h4>
                </div>
                <div class="card-body">
                  <div id="accordion">
                    @foreach ($fraisCouvert as $fr)
                    <div class="accordion">
                      <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-{{$fr->id}}" aria-expanded="true">
                        <h4>{{$fr->libelle}}</h4>
                      </div>
                      <div class="accordion-body collapse " id="panel-body-{{$fr->id}}" data-parent="#accordion">
                        <p class="mb-0">Forfait: {{$fr->forfait}}</p>
                        <p class="mb-0">Limite: {{$fr->limite}}</p>
                        <input type="checkbox" name="frais-ouvert-{{$fr->id}}" id="frais-ouvert-{{$fr->id}}">
                        <div class="form-group">
                          <label> Nombre</label>
                          <input type="number" min="0" class="form-control" id='nombre_frais_ouvert_{{$fr->id}}' name="nombre_frais_ouvert_{{$fr->id}}" required="" disabled>
                        </div>
                        <div class="form-group">
                          <label> Montant (DH)</label>
                          <input type="number" min="0" class="form-control" id='montant_frais_ouvert_{{$fr->id}}' name="montant_frais_ouvert_{{$fr->id}}" required="" disabled>
                        </div>
                        <div class="form-group">
                          <label> Remarques</label>

                          <input type="text" class="form-control" id='remarques_frais_ouvert_{{$fr->id}}' name="remarques_frais_ouvert_{{$fr->id}}" required="" disabled>
                        </div>
                      </div>
                    </div>
                    @endforeach

                  </div>
                </div>
                <div class="card-footer text-right">
                  <p class="btn btn-primary prev-3 prev">Previous </p>
                  <button class="btn btn-primary">Créer </button>

                </div>
              </div>


            </div>

          </div>
        </form>
      </div>
    </div>


    <!-- 
            <form method="POST" action="{{ route('create.request.store') }}" id="form">
              @csrf


              <div class="row">

                <div class="col-12 col-md-12 col-lg-12">
                  <div class="card">
                    <div class="card-header">
                      <h4>Informations concernant la manifestation</h4>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label>intitule</label>
                        <input type="text" class="form-control" name="intitule" required="">
                      </div>
                      <div class="form-group">
                        <label>Type</label>
                        <input type="text" class="form-control" name="type" required="">
                      </div>
                      <div class="form-group">
                        <label>Lieu</label>
                        <input type="text" class="form-control" name="lieu" required="">
                      </div>
                      <div class="form-group">
                        <label>Etendue</label>
                        <input type="text" class="form-control" name="etendue" required="">
                      </div>
                      <div class="form-group">
                        <label>Site web</label>
                        <input type="text" class="form-control" name="site_web" required="">
                      </div>
                      <div class="form-group">
                        <label>Agence organisatrice </label>
                        <input type="text" class="form-control" name="agence_organisatrice" required="">
                      </div>
                      <div class="form-group">
                        <label>Partenaires </label>
                        <input type="text" class="form-control" name="partenaires" required="">
                      </div>
                      <div class="section-title mt-0"></div>
                      <div class="form-group">
                        <label>Etablissement(s) de l’UCAM impliqué(s) dans l’organisation </label>
                        <select class="custom-select" name="etablissements_organisateur[]" id="etablissements_organisateur" multiple="multiple" data-height="100%">
                          @foreach ($etablissements as $etablissement)
                          <option value="{{$etablissement->id}}" id="{{$etablissement->libelle}}" selected>{{$etablissement->libelle}}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Numbre participants prevus </label>
                        <input type="number" class="form-control" name="nbr_participants_prevus" min="0" required="">
                      </div>
                      <div class="form-group">
                        <label>Date debut</label>
                        <input type="date" class="form-control" name="date_debut" required="">
                      </div>
                      <div class="form-group">
                        <label>Date fin</label>
                        <input type="date" class="form-control" name="date_fin" required="">

                      </div>

                    </div>

                  </div>

                  <div class="card">
                    <div class="card-header">
                      <h4>Entité de recherche organisant la manifestation</h4>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label>nom</label>
                        <input type="text" class="form-control" name="nom_entite_organisatrice" required="">
                      </div>
                      <div class="form-group">
                        <label>responsable</label>
                        <input type="text" class="form-control" name="responsable_entite_organisatrice" required="">
                      </div>
                      <div class="section-title mt-0">Etablissment</div>
                      <div class="form-group">
                        <select class="custom-select" name="etablissement_entite_organisatrice">
                          @foreach ($etablissements as $etablissement)
                          <option value="{{$etablissement->id}}" selected>{{$etablissement->libelle}}</option>
                          @endforeach
                        </select>
                      </div>

                    </div>
                  </div>

                </div>
                <div class="col-12 col-md-12 col-lg-12">
                  <div class="card">
                    <div class="card-header">
                      <h4> Comment la gestion financière est-elle prévue ?</h4>
                    </div>
                    <div class="card-body">


                      <div class="form-group">
                        <label>Libelle</label>
                        <input type="text" class="form-control" id='libelle_gestion_financiere' name="libelle_gestion_financiere">
                      </div>
                      <div class="form-group">
                        <label>Information</label>
                        <input type="text" min="0" class="form-control" id='information_gestion_financiere' name="information_gestion_financiere">
                      </div>
                    </div>
                    <div class="card-footer text-right">
                      <p style="cursor:pointer" class="btn btn-primary" onclick="addGestionFinanciere(document.getElementById('libelle_gestion_financiere').value,document.getElementById('information_gestion_financiere').value );">+</p>
                    </div>
                    <div style="overflow-x:auto;">
                      <table class="table " id="gestion_financiere_table">
                        <thead>
                          <tr>
                            <th scope="col">Libelle</th>
                            <th scope="col">Information</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-12 col-lg-12">
                  <div class="card">
                    <div class="card-header">
                      <h4>Coordonnateur de la manifestation</h4>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label>Nom</label>
                        <input type="text" value="{{$user->name}}" class="form-control" name="nom_coordonnateur_manifestation" disabled>
                      </div>
                      <div class="form-group">
                        <label>Prenom</label>
                        <input type="text" value="{{$user->prenom}}" class="form-control" name="prenom_coordonnateur_manifestation" name="type" disabled>
                      </div>

                      <div class="section-title mt-0">Etablissment</div>

                      <select class="custom-select" name="etablissment_coordonnateur_manifestation">
                        @foreach ($etablissements as $etablissement)
                        <option value="{{$etablissement->id}}" selected>{{$etablissement->libelle}}</option>
                        @endforeach
                      </select>

                      <div class="form-group">
                        <label>Tel</label>
                        <input type="tel" value="{{$user->tel}}" class="form-control" name="tel_coordonnateur_manifestation" name="type" required="">
                      </div>
                      <div class="form-group">
                        <label>Fax</label>
                        <input type="tel" class="form-control" name="fax_coordonnateur_manifestation" name="fax_coordonnateur_manifestation">
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      <h4>Comité d'organisation</h4>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label>Nom</label>
                        <input type="text" class="form-control" id="nom_organisateur" name="nom_organisateur">
                      </div>
                      <div class="form-group">
                        <label> Prenom</label>
                        <input type="text" class="form-control" id="prenom_organisateur" name="prenom_organisateur">
                      </div>
                      <div class="form-group">
                        <label> Tel</label>
                        <input type="tel" class="form-control" id="tel_organisateur" name="tel_organisateur">
                      </div>
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" id="email_organisateur" name="email_organisateur">
                      </div>
                      <div class="section-title mt-0">Etablissment</div>
                      <div class="form-group">
                        <select class="custom-select" id="etablissement_organisateur" name="etablissement_organisateur">
                          @foreach ($etablissements as $etablissement)
                          <option value="{{$etablissement->id}}" id="{{$etablissement->libelle}}" selected>{{$etablissement->libelle}}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="card-footer text-right">
                        <p style="cursor:pointer" class="btn btn-primary" onclick="addOrganisateur(document.getElementById('tel_organisateur').value,document.getElementById('nom_organisateur').value ,document.getElementById('prenom_organisateur').value,document.getElementById('email_organisateur').value, $('#etablissement_organisateur').children(':selected').attr('id') ,document.getElementById('etablissement_organisateur').value );">+</p>
                      </div>
                      <div style="overflow-x:auto;">
                        <table class="table " id="organisateurs_table">
                          <thead>
                            <tr>
                              <th scope="col">nom & prenom</th>
                              <th scope="col">etablissement</th>
                              <th scope="col">email</th>
                              <th scope="col">tel</th>
                              <th scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody>

                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-12 col-lg-12">
                  <div class="card">
                    <div class="card-header">
                      <h4>Contributeurs</h4>
                    </div>
                    <div class="card-body">

                      <div class="section-title mt-0">Type</div>
                      <div class="form-group">
                        <select class="custom-select" id="type_contributeur" name="type_contributeur">
                          @foreach ($typeContributeurs as $typeContributeur)
                          <option value="{{$typeContributeur->id}}" id="{{$typeContributeur->libelle}}" selected>{{$typeContributeur->libelle}}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Nom</label>
                        <input type="text" class="form-control" id='nom_contributeur' name="nom_contributeur">
                      </div>
                      <div class="form-group">
                        <label>Montant</label>
                        <input type="number" min="0" class="form-control" id='montant_contributeur' name="montant_contributeur">
                      </div>

                      <div class="section-title mt-0">Nature</div>
                      <div class="form-group">
                        <select class="custom-select" id="nature_contributeur" name="nature_contributeur">
                          @foreach ($natureContributions as $natureContribution)
                          <option value="{{$natureContribution->id}}" id="{{$natureContribution->libelle}}" selected>{{$natureContribution->libelle}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="card-footer text-right">
                      <p style="cursor:pointer" class="btn btn-primary" onclick="addContributeur(document.getElementById('nom_contributeur').value,$('#type_contributeur').children(':selected').attr('id'),document.getElementById('type_contributeur').value ,document.getElementById('montant_contributeur').value,$('#nature_contributeur').children(':selected').attr('id'),document.getElementById('nature_contributeur').value );">+</p>
                    </div>
                    <div style="overflow-x:auto;">
                      <table class="table " id="contributeurs_table">
                        <thead>
                          <tr>
                            <th scope="col">Type</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Montant</th>
                            <th scope="col">Nature</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-12 col-lg-12">

                  <div class="card">
                    <div class="card-header">
                      <h4>Soutien sollicité de l’Université</h4>
                    </div>
                    <div class="card-body">
                      <div id="accordion">
                        @foreach ($fraisCouvert as $fr)
                        <div class="accordion">
                          <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-{{$fr->id}}" aria-expanded="true">
                            <h4>{{$fr->libelle}}</h4>
                          </div>
                          <div class="accordion-body collapse " id="panel-body-{{$fr->id}}" data-parent="#accordion">
                            <p class="mb-0">Forfait: {{$fr->forfait}}</p>
                            <p class="mb-0">Limite: {{$fr->limite}}</p>
                            <input type="checkbox" name="frais-ouvert-{{$fr->id}}" id="frais-ouvert-{{$fr->id}}">
                            <div class="form-group">
                              <label> Nombre</label>
                              <input type="number" min="0" class="form-control" id='nombre_frais_ouvert_{{$fr->id}}' name="nombre_frais_ouvert_{{$fr->id}}" required="" disabled>
                            </div>
                            <div class="form-group">
                              <label> Montant (DH)</label>
                              <input type="number" min="0" class="form-control" id='montant_frais_ouvert_{{$fr->id}}' name="montant_frais_ouvert_{{$fr->id}}" required="" disabled>
                            </div>
                            <div class="form-group">
                              <label> Remarques</label>

                              <input type="text" class="form-control" id='remarques_frais_ouvert_{{$fr->id}}' name="remarques_frais_ouvert_{{$fr->id}}" required="" disabled>
                            </div>
                          </div>
                        </div>
                        @endforeach

                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <button class="btn btn-primary">Créer </button>
                  </div>
                </div>

              </div>
            </form> -->
  </div>
  </div>


</section>
@endsection

@section('scripts')

<script>
  var comiteOrganisation = []
  var contributeurs = []
  var gestionFinanciere = []
  var comiteOrganisationCount = 0
  var contributeurCount = 0
  var gestionFinanciereCount = 0

  function addOrganisateur(tel_organisateur, nom_organisateur, prenom_organisateur, email_organisateur, etablissement_organisateur, id_etablissement_organisateur) {

    tel_organisateur = tel_organisateur.trim()
    nom_organisateur = nom_organisateur.trim()
    email_organisateur = email_organisateur.trim()
    prenom_organisateur = prenom_organisateur.trim()

    if (tel_organisateur != "" && nom_organisateur != "" && prenom_organisateur != "" && email_organisateur != "") {
      var organisateur = {
        nom: nom_organisateur,
        prenom: prenom_organisateur,
        tel: tel_organisateur,
        email: email_organisateur,
        etablissement_id: id_etablissement_organisateur
      }
      comiteOrganisation[comiteOrganisationCount] = organisateur;
      comiteOrganisationCount = comiteOrganisationCount + 1
      var HtmlContent = " <tr><td>" + nom_organisateur + " " + prenom_organisateur + " </td> <td>" + etablissement_organisateur + " </td><td>" + email_organisateur + " </td><td>" + tel_organisateur + " </td><td> <button  class='btn btn-icon btn-danger' onClick='deleteOrganisateurRow(this);'><i class='fas fa-times'></i></button> </td></tr>"
      var tableRef = document.getElementById('organisateurs_table').getElementsByTagName('tbody')[0];
      var newRow = tableRef.insertRow(tableRef.rows.length);
      newRow.innerHTML = HtmlContent;

      $('#tel_organisateur').val('')
      $('#nom_organisateur').val('')
      $('#email_organisateur').val('')
      $('#prenom_organisateur').val('')
    } else {

    }

  }

  function addContributeur(nom_contributeur, type_contributeur, id_type_contributeur, montant_contributeur, nature_contributeur, id_nature_contributeur) {
    nom_contributeur = nom_contributeur.trim()
    type_contributeur = type_contributeur.trim()
    montant_contributeur = montant_contributeur.trim()
    nature_contributeur = nature_contributeur.trim()

    if (nature_contributeur != "" && montant_contributeur != "" && type_contributeur != "" && nom_contributeur != "") {
      var contributeur = {
        nom: nom_contributeur,
        type_contributeur_id: id_type_contributeur,
        montant: montant_contributeur,
        nature_contribution_id: id_nature_contributeur,
      }
      contributeurs[contributeurCount] = contributeur;
      contributeurCount = contributeurCount + 1
      var HtmlContent = " <tr><td>" + type_contributeur + "</td><td> " + nom_contributeur + " </td> <td>" + montant_contributeur + " </td><td>" + nature_contributeur + " </td><td> <button  class='btn btn-icon btn-danger' onClick='deleteContributeurRow(this);'><i class='fas fa-times'></i></button> </td></tr>"
      var tableRef = document.getElementById('contributeurs_table').getElementsByTagName('tbody')[0];
      var newRow = tableRef.insertRow(tableRef.rows.length);
      newRow.innerHTML = HtmlContent;

      $('#nom_contributeur').val('')
      $('#montant_contributeur').val('')

    } else {

    }

  }

  function addGestionFinanciere(libelle_gestion_financiere, information_gestion_financiere) {
    libelle_gestion_financiere = libelle_gestion_financiere.trim()
    information_gestion_financiere = information_gestion_financiere.trim()

    if (libelle_gestion_financiere != "" && information_gestion_financiere != "") {
      var gf = {
        libelle: libelle_gestion_financiere,
        information: information_gestion_financiere,
      }
      gestionFinanciere[gestionFinanciereCount] = gf;
      gestionFinanciereCount = gestionFinanciereCount + 1
      var HtmlContent = " <tr><td>" + libelle_gestion_financiere + "</td><td> " + information_gestion_financiere + " </td><td> <button  class='btn btn-icon btn-danger' onClick='deleteGestionFinanciereRow(this);'><i class='fas fa-times'></i></button> </td></tr>"
      var tableRef = document.getElementById('gestion_financiere_table').getElementsByTagName('tbody')[0];
      var newRow = tableRef.insertRow(tableRef.rows.length);
      newRow.innerHTML = HtmlContent;

      $('#information_gestion_financiere').val('')
      $('#libelle_gestion_financiere').val('')

    } else {

    }

  }


  function deleteOrganisateurRow(row) {
    var i = row.parentNode.parentNode.rowIndex;
    comiteOrganisation.splice((i - 1), 1)
    document.getElementById('organisateurs_table').deleteRow(i);
  }

  function deleteContributeurRow(row) {
    var i = row.parentNode.parentNode.rowIndex;
    contributeurs.splice((i - 1), 1)
    document.getElementById('contributeurs_table').deleteRow(i);
  }

  function deleteGestionFinanciereRow(row) {
    var i = row.parentNode.parentNode.rowIndex;
    gestionFinanciere.splice((i - 1), 1)
    console.log(gestionFinanciere)

    document.getElementById('gestion_financiere_table').deleteRow(i);
  }


  var fraisOuvert = <?php echo json_encode($fraisCouvert); ?>;
  for (var i = 0; i < fraisOuvert.length; i++) {
    $('#frais-ouvert-' + fraisOuvert[i].id).change(
      function() {
        var str = 'frais-ouvert-'
        var id = this.name.slice(str.length)
        if ($(this).is(':checked')) {
          $('#nombre_frais_ouvert_' + id).prop("disabled", false);
          $('#montant_frais_ouvert_' + id).prop("disabled", false);
          $('#remarques_frais_ouvert_' + id).prop("disabled", false);
        } else {
          $('#nombre_frais_ouvert_' + id).prop("disabled", true);
          $('#montant_frais_ouvert_' + id).prop("disabled", true);
          $('#remarques_frais_ouvert_' + id).prop("disabled", true);

        }
      });


    $("#form").submit(function(eventObj) {
      $("<input />").attr("type", "hidden")
        .attr("name", "comiteOrganisation")
        .attr("value", JSON.stringify(comiteOrganisation))
        .appendTo("#form");
      $("<input />").attr("type", "hidden")
        .attr("name", "contributeurs")
        .attr("value", JSON.stringify(contributeurs))
        .appendTo("#form");
      $("<input />").attr("type", "hidden")
        .attr("name", "gestionFinanciere")
        .attr("value", JSON.stringify(gestionFinanciere))
        .appendTo("#form");
      return true;
    });
  }
</script>
@endsection