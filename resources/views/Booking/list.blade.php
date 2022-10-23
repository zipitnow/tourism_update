@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>View Booking Listings</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Book Listings</li>
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
                <h3 class="card-title">Booking-Post</h3>


            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    {{-- Table Header --}}
                    <thead>
                        <tr>
                            <th style="width: 1%">
                                ID
                            </th>
                            <th style="width: 25%">
                                Tourist Site
                            </th>
                            <th style="width: 20%">
                                Name
                            </th>
                             <th style="width: 16%">
                                Email
                            </th >
                            <th style="width: 16%">
                                Total Price
                            </th>

                            <th style="width: 20%">

                            </th>
                        </tr>
                    </thead>

                    {{-- Table Header Close --}}
                    @unless(count($listings) == 0)
                        @foreach ($listings as $listing)
                            {{-- table --}}

                            <tbody>
                                <tr>
                                    <td>
                                        {{ $listing->id }}
                                    </td>
                                    <td>
                                        <a>
                                            {{ $listing->touristname }}

                                        </a>
                                        <br />
                                        <small>
                                            Created {{ $listing->created_at }}
                                        </small>
                                    </td>
                                    <td>
                                        <a>
                                            {{ $listing->lname }}   {{ $listing->fname }}

                                        </a>

                                    </td>
                                     <td>
                                        <a>
                                             {{ $listing->email }}

                                        </a>


                                    </td>
                                    <td>
                                        <a>
                                            <span class="text-success">$</span> {{ $listing->totprice }}

                                        </a>


                                    </td>

                                    <td class="project-actions text-right">
                                        <a class="btn btn-primary btn-sm" href="/booking/{{ $listing->id }}">
                                            <i class="fas fa-folder">
                                            </i>
                                            View
                                        </a>


                                        <form method="POST" action="/booking/{{ $listing->id }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"> <i class="fas fa-trash">
                                                </i>
                                                Delete
                                            </button>

                                        </form>

                                    </td>
                                </tr>



                            </tbody>

                            {{-- End card --}}
                        @endforeach
                    @else
                        <p>No listing found</p>
                    @endunless




                </table>
                {{-- Pagination --}}

                <div class="container-fluid py-2">
                    {{ $listings->links() }}
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
    <!-- /.content -->
@endsection
