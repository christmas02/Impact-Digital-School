@extends('site.header')

@section('content')

  <!--==========================
    Intro Section
  ============================-->
  <style>
      .seconde{
          padding:60px 0px 40px 0px;
          margin:70px 50px 0px 50px;
          border-radius: 20px;
      }
      .text{
          color:#fff;
          font-weight:bold;
      }
      .titre h1{
        font-weight:bolder!important;
      }
      p{
        font-size:20px;   
      }
      h1{
        font-weight: 900;
        font-size:50px;
      }
  </style>


   <section class="seconde" style=" background-image: linear-gradient(to bottom, #f7ca05 , #f7c800);">
    <div class="container">
      <div class="row">
        <div class="col-md-8 text">
            <h1>Apprendre developpement<br>web</h1>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            </p>
            <ul class="btn-nav lg-mt">
              <li><a href="#myModal" class="btn-lg-3" data-toggle="modal">S'inscrire</a></li>
            </ul>
        </div>
        <div class="col-md-4">
              <img class="" src="{{asset('/site/img/web2.png')}}" width="220">
        </div>
      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">  

    <section id="services" class="section-bg">
      <div class="container">
        <br>
        <div class="row">
           <div class="col-md-6 col-lg-8 data-wow-duration="1.4s">
            <h1 class="title-eve cta-red lg-title">Description de <span>la journee</span> de formation</h1>
            <p class="cta-text text-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat, repudiandae itaque. Atque qui voluptatem
                maiores enim culpa, quos veritatis eaque labore odit, amet commodi voluptas vero temporibus ea, modi sunt.Nulla
                deleniti cumque at veritatis quam. Vel eum architecto quisquam, repudiandae animi aperiam dolore iusto possimus,
                explicabo, ullam fugiat? Ullam quas perferendis excepturi modi obcaecati, nemo tempora reprehenderit asperiores
                optio.
             </p>
             <h2>Au programme </h2>
              <ul class="listview">
                <li><a href="">
                  <h4>Propotypage de site web (Adobe Xd)</h4>
                  <small>Un programme avec des horraire flaicible (10 semaine)</small>
                </a></li>
                <li><a href="">
                  <h4>Integration de la marquette (Html5, scc3, Javascript)</h4>
                  <small>Un programme avec des horraire flaicible (10 semaine)</small>
                </a></li>
                <li><a href="">
                  <h4>Introduction (PHP}</h4>
                  <small>Un programme avec des horraire flaicible (10 semaine)</small>
                </a></li>
              </ul>

           </div>

          <div class="col-md-6 col-lg-4 data-wow-duration="1.4s" disable>
             
             <div class="boxer">
              <span></span>
              <h5 class="title-boxer">Workshop</h5>
              <p class="description"><img src="{{asset('/site/img/clock.png')}}"> août 26, 2019 - 07:00 PM</p>
              <p class="description"><img src="{{asset('/site/img/maps.png')}}"> Espace jokko-connect Valon</p>
              <hr>
              <div class="img-master"><img src="{{asset('/site/img/ekissi.png')}}"><small> Mr EKISSI EKISSI Vincent <br>Developpeur fullstack</small></div>
              <div class="img-master"><img src="{{asset('/site/img/ekissi.png')}}"><small> Mr EKISSI EKISSI Vincent <br>Developpeur fullstack</small></div>
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