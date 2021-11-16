@extends('layouts.app')

@section('content')

<section class="section">
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">


                <div class="card card-primary">


                    <div class="mr-3 ml-3">
                        <img src="../assets/img/uca.jpg" alt="logo" width="80" class="mb-5 mt-2">
                        <h4 style="color: #a34f23"> Bienvenue, </h4>
                        <p class="text-muted">Avant de commencer, vous devez vous connecter ou vous inscrire si vous
                            n'avez pas encore de compte.</p>


                    </div>


                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" type="email" class="form-control" name="email" tabindex="1" required
                                    autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="d-block">
                                    <label for="password" class="control-label">Mot de passe</label>
                                    <div class="float-right">

                                        @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" class="text-small"></a>

                                        {{ __('Mot de passe oublié?') }}

                                        @endif
                                    </div>
                                </div>



                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>



                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">
                                    Se connecter </button>
                            </div>
                        </form>



                    </div>
                </div>


                <div class="mt-5 text-muted text-center">
                    <a href="{{ route('register') }}"> Vous n'avez pas un compte ? Créer un nouveau</a>
                </div>
                <div class="simple-footer">Copyright &copy; Made with 🧡 by EL OUADI, KHADIM and EL AIMANI
                </div>

            </div>
        </div>
    </div>
</section>

@endsection
