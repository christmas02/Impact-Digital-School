@extends('site.header')

@section('content')

  <!--==========================
    Intro Section
  ============================-->
  <style>
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
            <h1>‘’Les journées’’ du web </h1>
            <p>
              Pour cette première édition ; “les journées du Web” vous plongera dans l’univers de la programmation web, 
              venez découvrir le métier de développeur Web dans tous ses aspects.
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
            <h1 class="title-eve cta-red lg-title">Qu'est ce que <span>les journees</span> du web</h1>
            <p class="cta-text text-justify">Comme son nom l’indique ‘’ Les Journées du Web ‘’, se présentent comme des journées spécialement dédiées au Web pour toutes personnes désireuses de s’y exercer et qui est totalement GRATUITE.<br><br>
             Ces Journées sont mises en place, pour plonger les participants aux métiers du web par les différentes technologies du web tant Front-End que Back-End (Html5/Css3, Javascript, nodeJs, Bootstrap, AngularJs, React, Backbone, Ember, VueJS, PHP, Python, Ruby …) tout en passant par le DevOps et de la communication Web qui sont aujourd’hui incontournable.<br><br>
             Se basant sur un projet assez léger à réaliser généralement en un jour tel qu’écrire un Api, ou faire un C.R.U.D avec une technologie choisie, tous les aspects pour la réalisation sont étudiés et présentés par un professionnel du métier de l’assemblage des outils à la mise en production dudit projet.

             </p>
             <h2>Première édition ‘’Des Journées du web’’ </h2>
             <p class="cta-text text-justify">La première édition des Journées du Web sera l’occasion d’initier le premier contact avec la communauté désireuse de participer et qui nous emmènera à mettre sur pied un Landing Page aussi appelé One Page 
             présentant une entreprise brièvement, ses services, son portfolio, ses testimoniaux, ses partenaires et une section contact permettant aux visiteurs <br><br>
             de leur envoyer un message. Ce petit exercice mettra en exergue des connaissances de bases (html5/css3, Adobe XD, Javascript, Php).
             </p>
             <h2>Au programme </h2>
              <ul class="listview">
                <li><a href="">
                  <h4>	PROTOTYPAGE DE SITE WEB AVEC ADOBE XD </h4>
                  <small>08h-10h par Alexis DJIDONOU(Développeur Fullstack</small>
                </a></li>
                <li><a href="">
                  <h4> INTEGRATION DE LA MAQUETTE (HTML5 / CSS3, JAVASCRIPT) </h4>
                  <small>10h-12h par Alexis DJIDONOU(Développeur Fullstack)]</small>
                </a></li>
                <li><a href="">
                  <h4> INITIALISATION AU VERSIONNING (GIT-GITHUB</h4>
                  <small>13h-14h par Vincent-Férié (Développeur Fullstack)]</small>
                </a></li>
                <li><a href="">
                  <h4> MISE EN PLACE D’UN SYSTEME DE RECUPERATION DE MESSAGE ET ENVOIE DE MAIL PAR LE BIAIS DE PHP. </h4>
                  <small>14h-16h par Vincent-Férié (Développeur Fullstack</small>
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
              <div class="img-master"><img src="{{asset('/site/img/ekissi.png')}}"><small> Mr Alexis DJIDONOU <br>Developpeur fullstack</small></div>
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