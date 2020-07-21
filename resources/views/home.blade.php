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
    <!--gallery -->
    <div id="gallery">
        <section>
            <div class="container">
                <div class="section-title">
                        <h4 class="text-center">TOP DESTINATIONS PLAT-SERVICE</h4>
                        <p class="text-center">Découvrez nos destinations coup de coeur pour votre enterrement de vie de garçon.
Avec nos 77 destinations à travers l’Europe,vous allez trouver l’idée d’enfer pour le prochain enterrement de vie de garçon.</p>
                    </div>
                <div class="row">
                    <div class="col-md-8 col-sm-12 co-xs-12 gal-item">

                        <div class="box">                            
                            <a title="playa" class="link-gallery">          
                                <img class="img-gallery modal-img"  src="https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                        <div class="box">                            
                            <a title="flores" class="link-gallery">
                                <img class="img-gallery" src="https://images.unsplash.com/photo-1515362778563-6a8d0e44bc0b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80">
                            </a>
                        </div>
                    </div>
                <!--</div>-->
                <!--<div class="row">-->
                    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                        <div class="box">                            
                            <a  title="cascada" class="link-gallery">
                                <img class="img-gallery" src="https://images.unsplash.com/photo-1444201983204-c43cbd584d93?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                        <div class="box">                                                        
                            <a title="rocas" class="link-gallery">
                                <img class="img-gallery" src="https://images.unsplash.com/photo-1549294413-26f195200c16?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                        <div class="box">                            
                            <a title="rocas" class="link-gallery">
                                <img class="img-gallery" src="https://images.unsplash.com/photo-1531003300514-1976481c521e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjUzMjV9&auto=format&fit=crop&w=1500&q=80">
                            </a>
                        </div>
                    </div>
                <!--</div>
                <div class="row">-->
                    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                        <div class="box">
                            <a title="cascada" class="link-gallery">
                                <img class="img-gallery" src="https://images.unsplash.com/photo-1488805990569-3c9e1d76d51c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
                        <div class="box">                            
                            <a title="cancha en el bosque" class="link-gallery">
                                <img class="img-gallery" src="https://images.unsplash.com/photo-1560200353-ce0a76b1d438?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1567&q=80">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Modal -->
        <div id="myModal" class="modal">
        <!-- Boton para cerrar el modal -->
        <span class="close">×</span>
        <!-- Imagen a mostrar -->
        <span class="zoom" id="img-zoom" style="position: relative; overflow: hidden;">            
            <img class="modal-content" id="img01">
        </span>
        <!-- Descripcion de la imagen -->
        <div id="caption">hola</div>
        </div>
    </div>
    <!-- /gallery -->
   <!-- owl carousel-->
    <div class="container mt-40 mb-30">
          <div class="section-title">
                        <h4 class="text-center">TOP ACTIVITÉS PLAT-</h4>
                        <p class="text-center">Découvrez nos meilleures activités pour votre enterrement de vie de garçon.
Avec un catalogue de </p>
                    </div>
            <div class="row mt-30">
                <div class="col-md-4 col-sm-6">
                    <div class="box21">
                        <img src="http://bestjquery.com/tutorial/hover-effect/demo95/images/img-1.jpg" alt="">
                        <div class="box-content">
                            <h4 class="title">willimson</h4>
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis augue in odio suscipit, at.</p>
                            <a class="read-more" href="#">read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="box21">
                        <img src="http://bestjquery.com/tutorial/hover-effect/demo95/images/img-2.jpg" alt="">
                        <div class="box-content">
                            <h4 class="title">Kristiana</h4>
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis augue in odio suscipit, at.</p>
                            <a class="read-more" href="#">read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="box21">
                        <img src="http://bestjquery.com/tutorial/hover-effect/demo95/images/img-3.jpg" alt="">
                        <div class="box-content">
                            <h4 class="title">Kristiana</h4>
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis augue in odio suscipit, at.</p>
                            <a class="read-more" href="#">read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   <!--end carousel-->
   
  </div><!-- /.container -->
 <!--modal destination-->
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#destination">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="destination" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    <!--end modal destination-->
@endsection
