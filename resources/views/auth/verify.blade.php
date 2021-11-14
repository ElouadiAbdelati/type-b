@extends('layouts.app')

@section('content')

<section class="section">
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">



                <div class="card card-primary">

                    <div class="login-brand">
                        <img src="../assets/img/uca.jpg" alt="logo" width="100" class="mt-2 center">
                    </div>




                    <div class="card-body">
                        <div class="alert alert-success alert-has-icon mb-5">
                            <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                            <div class="alert-body">
                                <div class="alert-title">Succès</div>

                                {{ __('Vérifier votre boîte mail.') }}
                            </div>
                        </div>
                        @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                        @endif

                        {{ __('Avant de continuer, veuillez vérifier votre e-mail pour un lien de vérification.') }}
                        {{ __("Si vous n'avez pas reçu l'e-mail") }},
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('cliquez ici pour en demander un autre') }}</button>.
                        </form>
                    </div>
                </div>
                <div class="simple-footer">Copyright &copy; Made with 🧡 by EL OUADI, KHADIM and EL AIMANI
                </div>

            </div>
        </div>
    </div>
</section>

@endsection