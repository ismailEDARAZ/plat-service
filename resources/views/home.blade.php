@extends('layouts.app')

@section('css')
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
@endsection

@section('content')

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/img-2.jpg') }}" class="bd-placeholder-img" width="100%" height="100%">
                <div class="container">
                    <div class="carousel-caption text-center">
                     <h1>LES EXPERTS DE L'ENTERREMENT DE VIE DE GARÇON</h1>
                        <p>77 DESTINATIONS S'OFFRENT À VOUS POUR UN EVG UNIQUE ET INOUBLIABLE !</p>
                        <p>
                            <a class="btn btn-lg btn-primary" href="#" role="button">
                                Demander un devis
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="services-area pt-100 pb-70" id="services">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 mx-auto text-center">
                    <div class="section-title">
                        <h4>what i do</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-service">
                        <i class="fa fa-dribbble"></i>
                        <h4>Un prix juste</h4>
                        <p>Nous négocions en direct avec les meilleurs fournisseurs en Europe depuis 10 ans </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-service">
                        <i class="fa fa-credit-card-alt"></i>
                        <h4>Payez individuellement</h4>
                        <p>Notre système de paiement permet à chacun de régler sa part avec sa propre CB </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-service">
                        <i class="fa fa-clone"></i>
                        <h4>branding</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui quaerat fugit quas veniam perferendis repudiandae sequi. </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-service">
                        <i class="fa fa-rocket"></i>
                        <h4>database</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui quaerat fugit quas veniam perferendis repudiandae sequi. </p>
                    </div>
                </div>
            </div>
        </div>
      </section>

  </div><!-- /.container -->

@endsection
