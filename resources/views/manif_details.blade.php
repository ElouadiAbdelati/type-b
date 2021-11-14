<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Forms &rsaquo; Advanced Forms &mdash; Stisla</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Template CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <div id="app">
        <div class="navbar-bg"></div>
        <!-- ------------------------------- MAIN ---------------------------- -->
        <div class="main-content">
            <section class="section mr-5">
                <div class="section-header d-flex justify-content-between pl-2 pr-3">

                    <div class="d-inline"><label for="">Intitule: </label>&nbsp;<span> $manif->intitule </span>
                    </div>
                    <div class="d-inline"><label for="">Type: </label>&nbsp;<span> $manif->type </span></div>
                    <div class="d-inline"><label for="">Lieu: </label>&nbsp;<span> $manif->lieu </span></div>
                    <div class="d-inline"><label for="">Date reçue: </label>&nbsp;<span> 14/11/2021</span></div>
                    <div class="d-inline"></span></div>

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
                                                    <i class="fa fa-info-circle" aria-hidden="true"
                                                        data-container="body" data-toggle="popover"
                                                        data-placement="right"
                                                        data-content="Des remarques du coordonnateur." role="button">
                                                    </i>
                                                </td>
                                                <td class="text-right"><input class="form-control" type="number" name=""
                                                        id=""></td>
                                                <td class="text-right"><input class="form-control" type="number" name=""
                                                        id=""></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- ----------------------------------- END MAIN ----------------------------- -->
        <footer class="main-footer">
            <div class="footer-right">
                Copyright &copy; 2021 Made with 💙 by EL OUADI,KHADIM & EL AIMANI
            </div>
        </footer>
    </div>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        <script src="../assets/js/stisla.js">
    </script>

    <!-- Template JS File -->
    <script src="../assets/js/scripts.js"></script>
    <script src="../assets/js/custom.js"></script>


</body>

</html>
