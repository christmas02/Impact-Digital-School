@extends('site.header')

@section('content')

  <!--==========================
    Intro Section
  ============================-->
  <style>
      .seconde{
          padding:70px 0px;
          margin-top:70px;
      }
      .text{
          color:#fff;
          font-weight:bold;
      }
      .titre h1{
        font-weight:bolder!important;
      }

  </style>


   <!-- <section class="seconde" style="background-image: url({{asset('/site/img/suivie.jpg')}}); background-size:cover">
    <div class="container">
      <div class="row">
          <div class="col-md-12 text intro-info titre">
             <h1>Apprenez à votre rythme<br>un codeur</h1>
          <div>
      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">

    <section id="services" class="section-bg">
      <div class="container">
        <br>


        <div class="error-404" href="">
            <div class="col-md-12 col-lg-12 col-xl-12">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        @if(session('success'))
                            <div class=" alert alert-success py-2 mb-2">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-flex">
                                <div class="flex-grow-1 bg-login-image" style="background-image: url(&quot;assets-admin/img/dogs/etudiant_ischool-7.png&quot;);"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h4 class="text-dark mb-4">Inscription </h4>
                                        <p>
                                            Vous souhaitez apprendre à coder inscrivez comme etudiant en remplissant ce formulaire d'inscription afin
                                            de benéficiez du conténu éducatif de qualité dispensez par nos meilleurs formateurs.
                                        </p>
                                    </div>

                                    <form  method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="">
                                            <input type="hidden" value="2" name="role">
                                                <div class="form-group ">

                                                        <input class="form-control form-control-user" type="text" id="exampleInputName" aria-describedby="namelHelp" value="{{ old('name') }}" placeholder="Entrer  votre nom et prénoms" name="name" required autofocus>
                                                        @if ($errors->has('name'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('name') }}</strong>
                                                            </span>
                                                        @endif

                                                </div>

                                                <div class="form-group ">

                                                        <input class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }} form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" value="{{ old('email') }}" placeholder="Entrer  votre adresse Email" name="email" required>
                                                        @if ($errors->has('email'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                        @endif

                                                </div>

                                                <div class="form-group ">

                                                        <input class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }} form-control-user" type="password" id="exampleInputPassword" aria-describedby="password" value="{{ old('password') }}" placeholder="Entrer  votre mot de passe" name="password" required>
                                                        @if ($errors->has('password'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group">

                                                        <input class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }} form-control-user" type="password" id="password-confirm" aria-describedby="password-confirm" value="{{ old('password_confirmation') }}" placeholder="Confirmez le mot de passe" name="password_confirmation" required>

                                                </div>

                                                <div class="form-group  mb-2">

                                                        <button type="submit" class="btn btn-block btn-dark">
                                                            s'inscrire
                                                        </button>

                                                </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

      </div>
    </section><!-- #services -->




    <!--==========================
      Call To Action Section
    ============================-->

@endsection
