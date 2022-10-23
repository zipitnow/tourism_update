@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>View Artifact Card Listings</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Card Listings</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Artifact-Post</h3>

                <div class="card-tools">
                    <a href="{{ route('artifact.list') }}" class="card-title text-primary underline">
                        <--Back &nbsp;&nbsp;&nbsp;&nbsp;</a>
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>

                </div>
            </div>


            <div class="container-fluid p-5">

                <div class="d-flex justify-content-center align-items-center">
                    <h3 class="display-1">{{ $listings->title }} </h3>
                </div>
                <hr>
                <form method="POST" action="/artifact/{{ $listings->id }}" enctype="multipart/form-data" class="container">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Tags</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="tags"name="tags"
                                value="{{ $listings->tags }}">
                            @error('tags')
                                <p class="text-danger lh-1 fw-bolder mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Price</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="price"name="price"
                                value="{{$listings->price  }}">
                            @error('price')
                                <p class="text-danger lh-1 fw-bolder mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>

                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Logo_image</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="file" id="formFile" name="logo">
                             <img src="{{$listings->logo ? asset('storage/'. $listings->logo ) : asset('/artifacts/artifact1.png')}}" class="card-img-top" alt="..."style= "width:60px;height:50px;">
                            @error('logo')
                                <p class="text-danger lh-1 fw-bolder mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Slider-two</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="file" id="formFile"name="slider_two">
                             <img src="{{$listings->slider_two ? asset('storage/'. $listings->slider_two ) : asset('/artifacts/artifact1.png')}}" class="card-img-top" alt="..."style= "width:60px;height:50px;">
                            @error('slider_two')
                                <p class="text-danger lh-1 fw-bolder mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Slider-three</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="file" id="formFile" name="slider_three">
                            <img src="{{$listings->slider_three ? asset('storage/'. $listings->slider_three ) : asset('/artifacts/artifact1.png')}}" class="card-img-top" alt="..."style= "width:60px;height:50px;">
                            @error('slider_three')
                                <p class="text-danger lh-1 fw-bolder mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Slider-four</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="file" id="formFile" name="slider_four">
                              <img src="{{$listings->slider_four ? asset('storage/'. $listings->slider_four ) : asset('/artifacts/artifact1.png')}}" class="card-img-top" alt="..."style= "width:60px;height:50px;">
                            @error('slider_four')
                                <p class="text-danger lh-1 fw-bolder mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Decription</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="description">{{ $listings->description  }}</textarea>
                            @error('decription')
                                <p class="text-danger lh-1 fw-bolder mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Details</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="details">{{ $listings->details  }}</textarea>
                            @error('title')
                                <p class="text-danger lh-1 fw-bolder mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <br>

                    <button type="submit" class="btn btn-primary px-4">Update</button> &nbsp; &nbsp; &nbsp;
                    <a href="#" type="submit" class="btn btn-danger px-4">Cancel</a>
                </form>

            </div>




        </div>


    </section>

    <!-- /.content -->
@endsection
