<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Forms &rsaquo; Form Validation &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/components.css">
  <link rel="stylesheet" href="../css/steps.css">


</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>

          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
              <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
              <div class="d-sm-none d-lg-inline-block">{{ Auth::user()->name }}</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">

              <a href="features-settings.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </i>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">uca</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">


            <li class="menu-header">Stisla</li>

            <li class="nav-item dropdown active">
              <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Demandes</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('create.request.store') }}">Créer une demande</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-map-marker-alt"></i> <span>Google Maps</span></a>
              <ul class="dropdown-menu">
                <li><a href="gmaps-advanced-route.html">Advanced Route</a></li>
                <li><a href="gmaps-draggable-marker.html">Draggable Marker</a></li>
                <li><a href="gmaps-geocoding.html">Geocoding</a></li>
                <li><a href="gmaps-geolocation.html">Geolocation</a></li>
                <li><a href="gmaps-marker.html">Marker</a></li>
                <li><a href="gmaps-multiple-marker.html">Multiple Marker</a></li>
                <li><a href="gmaps-route.html">Route</a></li>
                <li><a href="gmaps-simple.html">Simple</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-plug"></i> <span>Modules</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="modules-calendar.html">Calendar</a></li>
                <li><a class="nav-link" href="modules-chartjs.html">ChartJS</a></li>
                <li><a class="nav-link" href="modules-datatables.html">DataTables</a></li>
                <li><a class="nav-link" href="modules-flag.html">Flag</a></li>
                <li><a class="nav-link" href="modules-font-awesome.html">Font Awesome</a></li>
                <li><a class="nav-link" href="modules-ion-icons.html">Ion Icons</a></li>
                <li><a class="nav-link" href="modules-owl-carousel.html">Owl Carousel</a></li>
                <li><a class="nav-link" href="modules-sparkline.html">Sparkline</a></li>
                <li><a class="nav-link" href="modules-sweet-alert.html">Sweet Alert</a></li>
                <li><a class="nav-link" href="modules-toastr.html">Toastr</a></li>
                <li><a class="nav-link" href="modules-vector-map.html">Vector Map</a></li>
                <li><a class="nav-link" href="modules-weather-icon.html">Weather Icon</a></li>
              </ul>
            </li>

          </ul>

          <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
              <i class="fas fa-rocket"></i> Documentation
            </a>
          </div>
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
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
                          <div class="card-footer text-right">
                            <p class="btn btn-primary firstNext next"> Next </p>
                          </div>
                        </div>

                      </div>

                    </div>

                  </div>
                  <div class="page">
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
                          <div class="card-footer text-right">
                            <p class="btn btn-primary prev-1 prev"> Previous </p>
                            <p class="btn btn-primary next-1 next"> Next </p>

                          </div>
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
    </div>
    <footer class="main-footer">
      <div class="footer-left">
        Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
      </div>
      <div class="footer-right">
        2.3.0
      </div>
    </footer>
  </div>
  </div>


  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="../assets/js/stisla.js"></script>

  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="../assets/js/scripts.js"></script>
  <script src="../assets/js/custom.js"></script>
  <script src="../js/steps.js"></script>
  <!-- Page Specific JS File -->

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
</body>

</html>