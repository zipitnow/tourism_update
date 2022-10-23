@extends('singlemain')

@section('content')
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Artifacts</a>
            </li>

        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="fas fa-search"></i>
                </a>
                <div class="navbar-search-block">
                    <form class="form-inline">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-widget="cart" href="#" role="button">

                    <i class="fas fa-cart-plus fa-lg mr-2 text-primary"></i>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>

        </ul>
    </nav>
    <!-- /.navbar -->




    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ $listings->title }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Artifact Available</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card card-solid">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h3 class="d-inline-block d-sm-none">{{ $listings->title }}</h3>

                        <div class="col-12 product-image-thumbs">
                            <div class="product-image-thumb active">
                                <img src="{{ $listings->logo ? asset('storage/' . $listings->logo) : asset('/images/prod-1.jpg') }}"
                                    alt="Product Image">
                            </div>


                            <div class="product-image-thumb"><img
                                    src="{{ $listings->slider_two ? asset('storage/' . $listings->slider_two) : asset('/images/prod-1.jpg') }}"
                                    alt="Product Image"></div>
                            <div class="product-image-thumb"><img
                                    src="{{ $listings->slider_three ? asset('storage/' . $listings->slider_three) : asset('/images/prod-2.jpg') }}"
                                    alt="Product Image"></div>
                            <div class="product-image-thumb"><img
                                    src="{{ $listings->slider_four ? asset('storage/' . $listings->slider_four) : asset('/images/prod-1.jpg') }}"
                                    alt="Product Image"></div>

                        </div>
                        <div class="col-12">
                            <img src="{{ $listings->logo ? asset('storage/' . $listings->logo) : asset('/images/prod-1.jpg') }}"
                                class="product-image" alt="Product Image">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <h3 class="my-3">{{ $listings->title }}</h3>
                        <p>{{ $listings->description }}</p>

                        <hr>
                        <h4>Location of Artifact</h4>
                        <div class=" container-fluid   bg-light ">
                            <x-listing-tags :tagsCsv="$listings->tags" />
                        </div>
                        <div class="bg-gray py-2 px-3 mt-4">
                            <h2 class="mb-0">
                                ${{ $listings->price }}
                            </h2>

                        </div>

                        <div class="mt-4">
                            <div class="mt-4">
                                <div class="btn btn-primary btn-lg btn-flat">
                                    <i class="fas fa-cart-plus fa-lg mr-2"></i>
                                    Add to Cart
                                </div>

                                <div class="btn btn-default btn-lg btn-flat">
                                    <i class="fas fa-heart fa-lg mr-2"></i>
                                    Buy
                                </div>
                            </div>



                            <div class="mt-4 product-share">
                                <a href="#" class="text-gray">
                                    <i class="fab fa-facebook-square fa-2x"></i>
                                </a>
                                <a href="#" class="text-gray">
                                    <i class="fab fa-twitter-square fa-2x"></i>
                                </a>
                                <a href="#" class="text-gray">
                                    <i class="fas fa-envelope-square fa-2x"></i>
                                </a>
                                <a href="#" class="text-gray">
                                    <i class="fas fa-rss-square fa-2x"></i>
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="row mt-4">
                        <nav class="w-100">
                            <div class="nav nav-tabs" id="product-tab" role="tablist">
                                <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab"
                                    href="#product-desc" role="tab" aria-controls="product-desc"
                                    aria-selected="true">Description</a>
                                <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab"
                                    href="#product-comments" role="tab" aria-controls="product-comments"
                                    aria-selected="false">Comments</a>

                            </div>
                        </nav>
                        <div class="tab-content p-3" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="product-desc" role="tabpanel"
                                aria-labelledby="product-desc-tab"> {{ $listings->details }} </div>
                            <div class="tab-pane fade" id="product-comments" role="tabpanel"
                                aria-labelledby="product-comments-tab"> Vivamus rhoncus nisl sed venenatis luctus. Sed
                                condimentum risus ut tortor feugiat laoreet. Suspendisse potenti. Donec et finibus sem, ut
                                commodo lectus. Cras eget neque dignissim, placerat orci interdum, venenatis odio. Nulla
                                turpis elit, consequat eu eros ac, consectetur fringilla urna. Duis gravida ex pulvinar
                                mauris ornare, eget porttitor enim vulputate. Mauris hendrerit, massa nec aliquam cursus, ex
                                elit euismod lorem, vehicula rhoncus nisl dui sit amet eros. Nulla turpis lorem, dignissim a
                                sapien eget, ultrices venenatis dolor. Curabitur vel turpis at magna elementum hendrerit vel
                                id dui. Curabitur a ex ullamcorper, ornare velit vel, tincidunt ipsum. </div>

                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

    </section>
    <!-- /.content -->
@endsection
