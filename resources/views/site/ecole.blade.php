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
      .titre img{
          border-radius: 8px;
          margin-bottom: 20px;
      }
      .content{
          padding-left: 60px;
      }
      .content p{
          font-size: 16px;
      }
      .content h4{
          font-size: 28px;
          font-weight:bolder!important;

      }
  </style>


   <section class="">
    <div class="container">
      <div class="row">
         
      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">  

    <section id="services" class="section-bg">
      <div class="container">
        <br>
        <div class="row">
          <div class="col-md-6 col-lg-6 titre data-wow-duration="1.4s">
              <h1 class="cta-red">Une formation unique qui positionne 
                  <span>l'apprenent</span>au coeur du programme.</h1>
          </div>
          <div class="col-md-6 col-lg-6 data-wow-duration="1.4s">
            <p>
               -	Nous améliorons constamment notre programme et nos outils pour répondre aux besoins 
               de nos futurs développeurs, en éliminant toutes les frictions dans le processus 
               d’apprentissage du codage. Nos masters s’adaptent au rythme et au niveau de tous 
               les participants s’assurant que personnes n’est laissé pour compte.
            </p>
          </div>
        </div>
        <hr>
        <br>
        <div class="row">
          <div class="col-md-6 col-lg-6 titre data-wow-duration="1.4s">
              <img src="{{asset('/site/img/profil.jpg')}}" class="img-responsive" width="550">
              <p class="text-center">Une formation unique qui positionne 
                  <span>l'apprenent</span>au coeur du programme.</p>
          </div>
          <div class="col-md-6 col-lg-6 content data-wow-duration="1.4s">
            <h4>Une pedagogie qui nous indentifie</h4>
            <p>
                -	Impact Digital School vous apprendra toute la pile du WEB 
                de la BASE DE DONNÉES au navigateur. De l’apprentissage 
                des concepts de base à la programmation orienté objet en passant par 
                le Front-End jusqu’à la structuration d’application en MVC ou avec un 
                Framework Back-End.
            </p>
            <h4>L'edutiant au coeur de nos thematique</h4>
            <p>
                -	En effet nous croyons fermement qu’il existe un bon moyen de créer 
                des applications WEB de qualité. Partir du cahier de charge du client 
                en passant par la conception d’un wireframe à la maquette visuelle du produit, 
                prototyper l’UX, tout en répartissant les users stories dans une équipe tout 
                en collaborant avec des requêtes de branche et pull avec Git & Github.<br>
                -	Vous apprendre à apprendre également avec les outils adéquats, 
                vous apprendre à utiliser des services tels que Gitlab, Heroku, Docker, Stripe, 
                Cloudinary etc… pour des applications WEB plus performantes et complètes.<br>
                -	Au sortir d’une formation complète d’avec Impact Digital School, vous serez en 
                mesure de pouvoir mettre sur pieds une application web à partir de 0, de concevoir 
                la base de données relationnelle tout en interagissant avec des requêtes SQL, 
                d’intégrer des services tierces tel que des APIs ou récupérer des données HTML, 
                et d’apprendre un nouveau langage assez rapidement en un lapse de temps, 
                ce qui est d’une importance relativement capital lorsqu’on se trouve être dans 
                le milieu du développement WEB.
            </p>
          </div>
        </div>
        <hr>
        <br>
        <div class="row">
           <div class="col-md-6 col-lg-3 data-wow-duration="1.4s">
              <div class="boxer-cours">
                   <img class="img-responsive img-cours" src="{{asset('/site/img/formateur.jpg')}}">
                   <div class="cours"><h5 class="title-boxer">Ekissi eric</h5></div>
              </div>
           </div>
           <div class="col-md-6 col-lg-3 data-wow-duration="1.4s">
              <div class="boxer-cours">
                   <img class="img-responsive img-cours" src="{{asset('/site/img/formateur.jpg')}}">
                   <div class="cours"><h5 class="title-boxer">Ekissi eric</h5></div>
              </div>
           </div>
           <div class="col-md-6 col-lg-3 data-wow-duration="1.4s">
              <div class="boxer-cours">
                   <img class="img-responsive img-cours" src="{{asset('/site/img/formateur.jpg')}}">
                   <div class="cours"><h5 class="title-boxer">Ekissi eric</h5></div>
              </div>
           </div>
           <div class="col-md-6 col-lg-3 data-wow-duration="1.4s">
              <div class="boxer-cours">
                   <img class="img-responsive img-cours" src="{{asset('/site/img/formateur.jpg')}}">
                   <div class="cours"><h5 class="title-boxer">Ekissi eric</h5></div>
              </div>
           </div>
        </div>
      </div>
    </section><!-- #services -->




    <!--==========================
      Call To Action Section
    ============================-->

@endsection