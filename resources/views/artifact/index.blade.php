@extends('welcome1')

@section('content')
    <!-- Head -->
    <section class="bg-dark text-light p-5 p-lg-0 pt-lg-5 text-start text-sm-start">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-start ">
                <div class="p-3">
                    <h1 class="text-success">Tour<span class="text-warning">Ghana</span></h1>
                    <h3 class="text-danger">Bring History To Your Door Step</h3>
                    <p class="lead my-4 ps-5">
                        Discourse there gloated and door if, and till quaff tapping
                        burning. Long quaff press the feather the i said, for.
                    </p>
                    <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#enroll">learn
                        more</button>
                </div>
                <img class="img-fluid w-50 d-none d-sm-block" src="culture/img_header.png" alt=""
                    style="height: 300px" />
            </div>
        </div>
    </section>
    <section>
        <nav class="navbar bg-light">
            <div class="container-fluid">
                <a class="navbar-brand">Navbar</a>
                <form class="d-flex" role="search" action="/artifact">
                    <input class="form-control me-1" name="search" type="search" placeholder="Search" aria-label="Search"
                        style="width:330px">
                    <button class="btn btn-outline-success " type="submit">Search</button>
                </form>

    </section>



    <section class="p-5 bg-light">
        <div class="container-fluid text-center">



            <div class="row align-item-start text-left justify-content-start ">

                @unless(count($listings) == 0)
                    @foreach ($listings as $listing)
                        {{-- card --}}
                        <div class="col-md-3 col-sm-6 col-lg-4 col-8 g-4">
                            <div class="card" style="width: 18rem;">
                                <img src="{{$listing->logo ? asset('storage/'. $listing->logo ) : asset('/artifacts/artifact1.png')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h4 class="card-title float-start ">{{ $listing->title }} </h4> <br>
                                    <h5 class="card-title text-left ">${{ $listing->price }}</h5>
                                    <br>
                                    <x-listing-tags :tagsCsv="$listing->tags" />
                                    <p class="card-text">{{ $listing->description }}</p>
                                </div>

                <button type="button" class="btn  btn-outline-success btn-block"> <i class="fas fa-cart-plus fa-lg mr-2"></i>Add To Cart</button>



                                <div class="card-body d-flex justify-content-center align-items-center">
                                    <a href=" /artifact/{{ $listing->id }} ">Learn
                                        more</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="/payment" class=" bg-success rounded px-2 py-1">Buy Now</a>
                                </div>


                            </div>
                        </div>

                        {{-- End card --}}
                    @endforeach
                @else
                    <p>No listing found</p>
                @endunless


                {{-- Pagination --}}

                <div class="container-fluid">
                    {{ $listings->links() }}
                </div>
    </section>
@endsection
