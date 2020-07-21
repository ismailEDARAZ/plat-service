@extends('layouts.app')

@section('css')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/destination.css') }}">
	<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
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
                                <select class="form-control select-pays">
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

    <livewire:destination-activities />

@endsection

@section('js')

	<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.select-pays').select2();
        });
    </script>

@endsection