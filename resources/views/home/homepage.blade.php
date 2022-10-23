@extends('welcome')

@section('content')
    <section class="bg-dark text-light p-5 p-lg-0 pt-lg-5 text-start text-sm-start">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-start ">
           @include('components.headinfo')
                <img class="img-fluid w-50 d-none d-sm-block" src="culture/img_header.png" alt=""
                    style="height: 300px" />
            </div>
        </div>
    </section>

    <section id="learn" class="  bg-white text-light">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-md p-3">
                    <h2>About US</h2>
                    <p class="lead">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque delectus est facere
                        sapiente?
                        Illum, vel.
                    </p>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati repudiandae harum
                        reprehenderit vel ad sed officiis explicabo eius ratione in itaque sint, ipsum nulla.
                        Temporibus
                        fuga nihil quo consectetur assumenda.
                    </p>
                    <a href="#" class="btn btn-light mt-3">
                        <i class="bi bi-chevron-right"></i>Read More
                    </a>
                </div>
                <div class="col-md">
                    <img src="culture/img_about.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>


    <!-- /.content -->







    {{-- Artifacts Site Gallary --}}

    <section id="learn" class="   text-light " style="border:3px solid #2D6C41">

            <div class="row d-flex align-items-center justify-content-center  bg-white ">
                <div class="col-md p-3">
                    <h2>Artifacts Available</h2>
                    <p class="lead">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque delectus est facere
                        sapiente?
                        Illum, vel.
                    </p>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati repudiandae harum
                        reprehenderit vel ad sed officiis explicabo eius ratione in itaque sint, ipsum nulla.
                        Temporibus
                        fuga nihil quo consectetur assumenda.
                    </p>
                    <a href="/artifact" class="btn btn-light mt-3 bg-success">
                        <i class="fa fas fa-arrow"></i>Read More
                    </a>
                </div>
                <div class="col-md "     >
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"style="border:5px solid #2D6C41">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="culture/img1.jpg" class="d-block w-100 " alt="Test slide"
                                    style="width: 500px; height: 500px;" />
                            </div>
                            <div class="carousel-item">
                                <img src="culture/img2.jpg" class="d-block w-100  img-fluid" alt="Test slide"
                                    style="width: 500px; height: 500px;" />
                            </div>
                            <div class="carousel-item ">
                                <img src="culture/img3.jpg" class="d-block w-100 " alt="Test slide"
                                    style="width: 500px;height: 500px;" />
                            </div>
                            <div class="carousel-item ">
                                <img src="culture/img5.jpg" class="d-block w-100 " alt="Test slide"
                                    style="width: 500px;height: 500px;" />
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
    </section>

    <!-- /.content-wrapper -->






    {{-- Tourist Site Gallary --}}


    <section id="learn" class="    text-light" style="border:3px solid #FFC107">

            <div class="  row d-flex align-items-center justify-content-center  bg-white ">
                <div class="col-md p-3">
                    <h2>Tourist Sites</h2>
                    <p class="lead">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque delectus est facere
                        sapiente?
                        Illum, vel.
                    </p>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati repudiandae harum
                        reprehenderit vel ad sed officiis explicabo eius ratione in itaque sint, ipsum nulla.
                        Temporibus
                        fuga nihil quo consectetur assumenda.
                    </p>
                    <a href="/tourist" class="btn btn-light mt-3 bg-warning">
                        <i class="bi bi-chevron-right"></i>Read More
                    </a>
                </div>
                <div class="col-md ">
                    <div id="carousel1" class="carousel slide" data-ride="carousel" style="border:5px solid #FFC107">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel1" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel1" data-slide-to="1"></li>
                            <li data-target="#carousel1" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="culture/img4.jpg" class="d-block w-100 " alt="Test slide"
                                    style="width: 500px; height: 500px;" />
                            </div>
                            <div class="carousel-item">
                                <img src="culture/img4.jpg" class="d-block w-100  img-fluid" alt="Test slide"
                                    style="width: 500px; height: 500px;" />
                            </div>
                            <div class="carousel-item ">
                                <img src="culture/img4.jpg" class="d-block w-100 " alt="Test slide"
                                    style="width: 500px;height: 500px;" />
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev">
                            <span class="carousel-control-prev1-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
    </section>
@endsection
