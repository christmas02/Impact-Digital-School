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


   <section class="seconde" style="background-image: url({{asset('/site/img/suivie.jpg')}}); background-size:cover">
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
        <div class="row">
          <div class="col-md-6 col-lg-4 data-wow-duration="1.4s">
            <div class="boxer-cours" href="">
              <img class="img-responsive img-cours" src="{{asset('/site/img/tesmonial.jpg')}}">
              <div class="cours">
                 <h5 class="title-boxer">Developpement web</h5>
                 <p class="description">Alexis Djidonou.</p>
                 <p class="description">40 heures de formation.</p>
                 <br>
                 <a href="" class="btn-1">Participer</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 data-wow-duration="1.4s">
            <div class="boxer-cours" href="">
              <img class="img-responsive img-cours" src="{{asset('/site/img/tesmonial.jpg')}}">
              <div class="cours">
                 <h5 class="title-boxer">Developpement web</h5>
                 <p class="description">Alexis Djidonou.</p>
                 <p class="description">40 heures de formation.</p>
                 <br>
                 <a href="" class="btn-1">Participer</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 data-wow-duration="1.4s">
            <div class="boxer-cours" href="">
              <img class="img-responsive img-cours" src="{{asset('/site/img/tesmonial.jpg')}}">
              <div class="cours">
                 <h5 class="title-boxer">Developpement web</h5>
                 <p class="description">Alexis Djidonou.</p>
                 <p class="description">40 heures de formation.</p>
                 <br>
                 <a href="" class="btn-1">Participer</a>
              </div>
            </div>
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