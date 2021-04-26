@extends('site.header')

@section('content')

  <!--==========================
    Intro Section
  ============================-->



   <section class="seconde" style=" background-image: linear-gradient(to top, #4c0000 , #740000);">
    <div class="container">
      <div class="row">
        <div class="col-md-8 text">
            <h1>Apprenez à votre rythme  <br>à coder</h1>
            <p>
              Le code est une question 
              de logique et nous vous offrons la possibilité de l’assimiler 
              comme vous le devez.
            </p>
            <ul class="btn-nav lg-mt">
              <li><a href="" class="btn-lg-3">S'inscrire</a></li>
            </ul>
        </div>
        <div class="col-md-4">
              <img class="img-responsive img-cours" src="{{asset('/site/img/dev.png')}}" width="100">
        </div>
      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">  

    <section id="services" class="section-bg">
      <div class="container">
        <br>
         <div class="row">
          <div class="col-md-6 col-lg-4 data-wow-duration="1.4s">
            <a href="{{ route('detailCours') }}">
            <div class="boxer-cours">
              <img class="img-responsive img-cours" src="{{asset('/site/img/tesmonial.jpg')}}">
              <div class="cours">
                 <h5 class="title-boxer">Apprendre developpement web</h5>
                 <p class="description">40 heures de formation.</p>
                 <br>
                 <!--<a href="" class="btn-1">Participer</a>-->
              </div>
            
            </div>
            </a>
          </div>

          <div class="col-md-6 col-lg-4 data-wow-duration="1.4s">
            <a href="">
            <div class="boxer-cours">
              <img class="img-responsive img-cours" src="{{asset('/site/img/tesmonial.jpg')}}">
              <div class="cours">
                 <h5 class="title-boxer">Demarer le frontent avec Vus.js</h5>
                 <p class="description">40 heures de formation.</p>
                 <br>
                 <!--<a href="" class="btn-1">Participer</a>-->
              </div>
            
            </div>
            </a>
          </div>

          <div class="col-md-6 col-lg-4 data-wow-duration="1.4s">
            <a href="{{ route('detailCours') }}">
            <div class="boxer-cours">
              <img class="img-responsive img-cours" src="{{asset('/site/img/tesmonial.jpg')}}">
              <div class="cours">
                 <h5 class="title-boxer">Laravel dans toute sa plamdeur</h5>
                 <p class="description">40 heures de formation.</p>
                 <br>
                 <!--<a href="" class="btn-1">Participer</a>-->
              </div>
            
            </div>
            </a>
          </div>

          
        </div>
        <!--<div class="row">
          <div class="col-md-6 col-lg-4 data-wow-duration="1.4s">
            <div class="boxer" href="#myModal" data-toggle="modal" >
              <span>Workshop</span>
              <h5 class="title-boxer">Pouquoi appredre le php</h5>
              <p class="description"><img src="{{asset('/site/img/clock.png')}}"> août 26, 2019 - 07:00 PM</p>
              <p class="description"><img src="{{asset('/site/img/maps.png')}}"> Espace jokko-connect Valon</p>
              <hr>
              <div class="img-master"><img src="{{asset('/site/img/ekissi.png')}}"></div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 data-wow-duration="1.4s">
            <div class="boxer" href="#myModal" data-toggle="modal" >
              <span>Workshop</span>
              <h5 class="title-boxer">Pouquoi appredre le php</h5>
              <p class="description"><img src="{{asset('/site/img/clock.png')}}"> août 26, 2019 - 07:00 PM</p>
              <p class="description"><img src="{{asset('/site/img/maps.png')}}"> Espace jokko-connect Valon</p>
              <hr>
              <div class="img-master"><img src="{{asset('/site/img/ekissi.png')}}"></div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 data-wow-duration="1.4s">
            <div class="boxer" href="#myModal" data-toggle="modal" >
              <span>Workshop</span>
              <h5 class="title-boxer">Pouquoi appredre le php</h5>
              <p class="description"><img src="{{asset('/site/img/clock.png')}}"> août 26, 2019 - 07:00 PM</p>
              <p class="description"><img src="{{asset('/site/img/maps.png')}}"> Espace jokko-connect Valon</p>
              <hr>
              <div class="img-master"><img src="{{asset('/site/img/ekissi.png')}}"></div>
            </div>
          </div>
        </div>-->


      </div>
    </section><!-- #services -->




    <!--==========================
      Call To Action Section
    ============================-->

@endsection