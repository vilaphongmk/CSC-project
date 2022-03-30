@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-12 ">
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
                <div class="col-lg-6 col-6 ">
                    <a href=""><img src="{{asset('images/images slide/p.jpg')}}" class="card-img-top" alt="...">
                        <h6 class=" text-center my-2">title</h6>
                    </a>
                </div>
                <div class="col-lg-6 col-6 ">
                    <a href=""><img src="{{asset('images/images slide/p.jpg')}}" class="card-img-top" alt="...">
                        <h6 class=" text-center my-2">title</h6>
                    </a>

                </div>
                <div class="col-lg-6 col-6 ">
                    <a href=""><img src="{{asset('images/images slide/p.jpg')}}" class="card-img-top" alt="...">
                        <h6 class=" text-center my-2">title</h6>
                    </a>
                </div>
                <div class="col-lg-6 col-6 ">
                    <a href=""><img src="{{asset('images/images slide/p.jpg')}}" class="card-img-top" alt="...">
                        <h6 class=" text-center my-2">title</h6>
                    </a>

                </div>
                <div class="col-lg-6 col-6 ">
                    <a href=""><img src="{{asset('images/images slide/p.jpg')}}" class="card-img-top" alt="...">
                        <h6 class="text-center my-2">title</h6>
                    </a>
                </div>
                <div class="col-lg-6 col-6 ">
                    <a href=""><img src="{{asset('images/images slide/p.jpg')}}" class="card-img-top" alt="...">
                        <h6 class="text-center my-2">title</h6>
                    </a>

                </div>

            </div>

        </div>

    </div>
</div>
</div>


<!-- news -->

<div class="container box_news">
    <div class="heading-news mt-3"> ຂ່າວສານ</div>
    <div class="card text-center card_box">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="true" href="#">ຂ່າວໃໝ່</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ແຈ້ງການ</a>
                </li>
            </ul>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 news_style">
                    <div class="row ">
                        <div class="col-md-4 imge">
                            <img src="{{asset('images/images slide/p.jpg')}}" alt="">
                        </div>
                        <div class="col-md-8 contene">
                            <h2>heading</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, perspiciatis est quasi debitis impedit dolor. Consectetur quia voluptas nisi culpa quam quod nihil minima vitae. Quisquam asperiores minus dolores ex!</p>
                            <a href="#" class="btn btn-primary">ອ່ານຕໍ່</a>
                        </div>


                    </div>
                </div>
                <div class="col-lg-6 col-12 ">
                    <div class="row news_style ">
                        <div class="col-md-4 imge">
                            <img src="{{asset('images/images slide/p.jpg')}}" alt="">
                        </div>
                        <div class="col-md-8 contene">
                            <h2>heading</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, perspiciatis est quasi debitis impedit dolor. Consectetur quia voluptas nisi culpa quam quod nihil minima vitae. Quisquam asperiores minus dolores ex!</p>
                            <a href="#" class="btn btn-primary">ອ່ານຕໍ່</a>
                        </div>

                    </div>

                </div>
                <div class="col-lg-6 col-12 news_style">
                    <div class="row ">
                        <div class="col-md-4 imge">
                            <img src="{{asset('images/images slide/p.jpg')}}" alt="">
                        </div>
                        <div class="col-md-8 contene">
                            <h2>heading</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, perspiciatis est quasi debitis impedit dolor. Consectetur quia voluptas nisi culpa quam quod nihil minima vitae. Quisquam asperiores minus dolores ex!</p>
                            <a href="#" class="btn btn-primary">ອ່ານຕໍ່</a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-12 news_style">
                    <div class="row ">
                        <div class="col-md-4 imge">
                            <img src="{{asset('images/images slide/p.jpg')}}" alt="">
                        </div>
                        <div class="col-md-8 contene">
                            <h2>heading</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, perspiciatis est quasi debitis impedit dolor. Consectetur quia voluptas nisi culpa quam quod nihil minima vitae. Quisquam asperiores minus dolores ex!</p>
                            <a href="#" class="btn btn-primary">ອ່ານຕໍ່</a>
                        </div>

                    </div>
                </div>
            </div>
            <a href="#" class="btn btn-primary m-2">ອ່ານທັງໜົດ</a>
        </div>

    </div>
</div>

@endsection