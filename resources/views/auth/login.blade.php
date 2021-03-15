@extends('layouts/auth')

@section('content')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-flex">
                                <div class="flex-grow-1 bg-login-image" style="background-image: url(&quot;assets-admin/img/dogs/logo_ischool-2.png&quot;);"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h4 class="text-dark mb-4">Se connecter</h4>
                                    </div>
                                    <form class="user"  method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" value="{{ old('email') }}" placeholder="Entrer  votre adresse Email" name="email" required>
                                            @if ($errors->has('email'))
                                            <div class="alert alert-danger my-2" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control form-control-user" type="password" id="exampleInputPassword" placeholder="Password" name="password">
                                            @if ($errors->has('password'))
                                            <div class="alert alert-danger  my-2" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <div class="form-check"><input class="form-check-input custom-control-input" type="checkbox" id="formCheck-1"><label class="form-check-label custom-control-label" for="formCheck-1">Se souvenir de Moi</label></div>
                                            </div>
                                        </div><button class="btn btn-primary btn-block text-white btn-user" type="submit">Connexion</button>

                                    </form>
                                    <div class="text-center"><a class="small" href="{{ route('password.request') }}">Mot de passe Oublié?</a></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
