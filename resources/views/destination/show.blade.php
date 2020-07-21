@extends('layouts.app')

@section('css')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/destination.css') }}">
@endsection

@section('content')
	<div id="main-carousel" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://picsum.photos/1600/501" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block text-center">
                    <h5>It is a long established </h5>
                    <p> fact that a reader distracted</p>
                    <a href="#0" class="btn btn-info">MORE INFO</a>
                </div>
            </div>
        </div>
    </div>
    <section class="home__form">
        <div class="container">
            <div class="home__form-container text-center">
                <h3>Demander une devis</h3>
                <p>Please get in touch with our support team and expect a response within 24 working hours.</p>
                <form>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <select class="form-control">
							      <option>1</option>
							      <option>2</option>
							      <option>3</option>
							      <option>4</option>
							      <option>5</option>
							    </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <select class="form-control">
							      <option>1</option>
							      <option>2</option>
							      <option>3</option>
							      <option>4</option>
							      <option>5</option>
							    </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <select class="form-control">
							      <option>1</option>
							      <option>2</option>
							      <option>3</option>
							      <option>4</option>
							      <option>5</option>
							    </select>
                            </div>
                        </div>
                        <div class="col-2">
                        	<button type="submit" class="btn btn-danger">Chercher</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </section>

    <div class="wrapper">
	    <div class="container">
	      	<div class="row">
				<h5 class="title-activity">ACTIVITÉS JOUR (24) pour votre enterrement vie de garçon à Paris</h5>
		        <div class="col-lg-4 col-md-3 col-sm-6">
		          	<div class="ticket-card">
			            <div class="cover">
				            <img src="https://www.indior.tours/images/Taj_Mahal_Agra.jpg" alt="" />
			            </div>
			            <div class="body">
			              <div class="artist">
			                <h4 class="name"> Taste of India </h4>
			              </div>
			              <div class="clearfix"></div>
			            </div>
			            <div class="footer">
			            	<div class="price">
				                <div class="value">
				                  <b>$</b>721
				                </div>
				            </div>
			              	<a class="btn">
				              	<svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-plus-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								  	<path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
								  	<path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
								  	<path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
								</svg>
			              	</a>
			            </div>
		          </div>
		        </div>

	      </div>
	    </div>
	</div>

@endsection