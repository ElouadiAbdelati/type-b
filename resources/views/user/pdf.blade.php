<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>UCA</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> -->

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{public_path('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{public_path('assets/css/components.css')}}">
    <link rel="stylesheet" href="{{public_path('css/steps.css')}}">


</head>

<body>
    <div class="section-body">
        <div class="container">
            <h5>Informations concernant la manifestation</h5>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped" id="sortable-table">
                                    <thead>
                                        <tr>
                                            <th>Code</th>
                                            <th>Date envoie</th>
                                            <th>remarques</th>
                                            <th>etat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
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
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h5>Informations concernant la manifestation</h5>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body p-0">
                            <p>intitule :{{$demande->manifestation->intitule}} </p>
                            <p>type :{{$demande->manifestation->type}} </p>

                            <p>etendue :{{$demande->manifestation->etendue}} </p>

                            <p>lieu :{{$demande->manifestation->lieu}} </p>
                            <p>site_web :{{$demande->manifestation->site_web}} </p>
                            <p>agence_organisatrice :{{$demande->manifestation->agence_organisatrice}} </p>
                            <p>partenaires :{{$demande->manifestation->partenaires}} </p>
                            <p>nbr_participants_prevus :{{$demande->manifestation->nbr_participants_prevus}} </p>
                            <p>date_debut :{{$demande->manifestation->date_debut}} </p>
                            <p>date_fin :{{$demande->manifestation->date_fin}} </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="{{public_path('assets/js/stisla.js')}}"></script>

    <!-- JS Libraies -->

    <!-- Template JS File -->
    <script src="{{public_path('assets/js/scripts.js')}}"></script>
    <script src="{{public_path('assets/js/custom.js')}}"></script>
    <script src="{{public_path('js/steps.js')}}"></script>
    <!-- Page Specific JS File -->
</body>

</html>