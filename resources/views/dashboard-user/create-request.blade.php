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
              <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">

              <a href="features-settings.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
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

          <div class="section-body">
            <form method="POST" action="{{ route('create.request.store') }}" id="form">
              @csrf
              <div class="row">

                <div class="col-12 col-md-6 col-lg-6">
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
                        <label>Pertenaires </label>
                        <input type="text" class="form-control" name="pertenaires" required="">
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
                        <select class="custom-select" name="etablissement">
                          @foreach ($etablissements as $etablissement)
                          <option value="{{$etablissement->id}}" selected>{{$etablissement->libelle}}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="card-footer text-right">
                        <button class="btn btn-primary">Submit</button>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="col-12 col-md-6 col-lg-6">
                  <div class="card">
                    <div class="card-header">
                      <h4>Coordonnateur de la manifestation</h4>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label>Nom</label>
                        <input type="text" class="form-control" name="nom_coordonnateur_manifestation" required="">
                      </div>
                      <div class="form-group">
                        <label>Prenom</label>
                        <input type="text" class="form-control" name="prenom_coordonnateur_manifestation" name="type" required="">
                      </div>
                      <div class="form-group">
                        <label>Etablissment</label>
                        <input type="tel" class="form-control" name="etablissment_coordonnateur_manifestation" name="type" required="">
                      </div>
                      <div class="form-group">
                        <label>Tel</label>
                        <input type="tel" class="form-control" name="tel_coordonnateur_manifestation" name="type" required="">
                      </div>
                      <div class="form-group">
                        <label>Fax</label>
                        <input type="tel" class="form-control" name="fax_coordonnateur_manifestation" name="type" required="">
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
                        <input type="text" class="form-control" id="nom_organisateur" name="nom_organisateur" required="">
                      </div>
                      <div class="form-group">
                        <label> Prenom</label>
                        <input type="text" class="form-control" id="prenom_organisateur" name="prenom_organisateur" required="">
                      </div>
                      <div class="form-group">
                        <label> Tel</label>
                        <input type="tel" class="form-control" id="tel_organisateur" name="tel_organisateur" required="">
                      </div>
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" id="email_organisateur" name="email_organisateur" required="">
                      </div>
                      <div class="section-title mt-0">Etablissment</div>
                      <div class="form-group">
                        <select class="custom-select" id="etablissement_organisateur" name="etablissement_organisateur">
                          @foreach ($etablissements as $etablissement)
                          <option value="{{$etablissement->id}}" selected>{{$etablissement->libelle}}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="card-footer text-right">
                        <p style="cursor:pointer" class="btn btn-primary" onclick="addOrganisateur(document.getElementById('tel_organisateur').value,document.getElementById('nom_organisateur').value ,document.getElementById('prenom_organisateur').value,document.getElementById('email_organisateur').value,document.getElementById('etablissement_organisateur').value  );">+</p>
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
            </form>
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

  <!-- Page Specific JS File -->

  <script>
    var comiteOrganisation = []
    var i = 0

    function addOrganisateur(tel_organisateur, nom_organisateur, prenom_organisateur, email_organisateur, etablissement_organisateur) {
      if (tel_organisateur != "" && nom_organisateur != "" && prenom_organisateur != "" && email_organisateur != "") {
        var organisateur = {
          nom: nom_organisateur,
          prenom: prenom_organisateur,
          tel: tel_organisateur,
          email: email_organisateur,
          etablissement_id: etablissement_organisateur
        }
        comiteOrganisation[i] = organisateur;
        i = i + 1
        var HtmlContent = " <tr><td>" + nom_organisateur + " " + prenom_organisateur + " </td> <td>" + etablissement_organisateur + " </td><td>" + email_organisateur + " </td><td>" + tel_organisateur + " </td><td> <button  class='btn btn-icon btn-danger' onClick='deleteRow(this);'><i class='fas fa-times'></i></button> </td></tr>"
        var tableRef = document.getElementById('organisateurs_table').getElementsByTagName('tbody')[0];
        var newRow = tableRef.insertRow(tableRef.rows.length);
        newRow.innerHTML = HtmlContent;
      }

    }

    $("#form").submit(function(eventObj) {
      $("<input />").attr("type", "hidden")
        .attr("name", "comiteOrganisation")
        .attr("value",JSON.stringify(comiteOrganisation)  )
        .appendTo("#form");
      return true;
    });

    function deleteRow(row) {
      var i = row.parentNode.parentNode.rowIndex;
      document.getElementById('organisateurs_table').deleteRow(i);
    }
  </script>
</body>

</html>