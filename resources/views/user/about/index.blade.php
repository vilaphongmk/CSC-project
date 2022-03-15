@extends('layouts.user')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-8  col-12 ">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('images/images slide/p.jpg')}}" class="d-block" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('images/images slide/p.jpg')}}" class="d-block " alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('images/images slide/p.jpg')}}" class="d-block" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col-lg-4  col-12 ">
            <div class="row">
                <div class="col-lg-6 col-6">
                    <div class="card" style="width: 12rem;">
                        <a href=""><img src="{{asset('images/images slide/p.jpg')}}" class="card-img-top" alt="...">
                            <h6 class="card-title ">title</h6>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-6">
                    <div class="card" style="width: 12rem;">
                        <a href=""><img src="{{asset('images/images slide/p.jpg')}}" class="card-img-top" alt="...">
                            <h6 class="card-title ">title</h6>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-6">
                    <div class="card" style="width: 12rem;">
                        <a href=""><img src="{{asset('images/images slide/p.jpg')}}" class="card-img-top" alt="...">
                            <h6 class="card-title ">title</h6>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-6">
                    <div class="card" style="width: 12rem;">
                        <a href=""><img src="{{asset('images/images slide/p.jpg')}}" class="card-img-top" alt="...">
                            <h6 class="card-title ">title</h6>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-6">
                    <div class="card" style="width: 12rem;">
                        <a href=""><img src="{{asset('images/images slide/p.jpg')}}" class="card-img-top" alt="...">
                            <h6 class="card-title ">title</h6>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-6">
                    <div class="card" style="width: 12rem;">
                        <a href=""><img src="{{asset('images/images slide/p.jpg')}}" class="card-img-top" alt="...">
                            <h6 class="card-title ">title</h6>
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
</div>


@endsection