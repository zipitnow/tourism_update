@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>View Tourist Card Listings</h1>
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
                <h3 class="card-title">Tourist-Post</h3>

                <div class="card-tools">
                    <a href="{{ route('tourist.create') }}" class="card-title text-primary underline">Create a post
                        &nbsp;&nbsp;&nbsp;&nbsp;</a>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>

                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    {{-- Table Header --}}
                    <thead>
                        <tr>
                            <th style="width: 1%">
                                ID
                            </th>
                            <th style="width: 24%">
                                Title
                            </th>
                            <th style="width: 24%">
                                Tags
                            </th>
                            <th>
                                Price
                            </th>

                            <th style="width: 30%">

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
                                            {{ $listing->title }}

                                        </a>
                                        <br />
                                        <small>
                                            Created {{ $listing->created_at }}
                                        </small>
                                    </td>
                                    <td>
                                        <a>
                                            {{ $listing->tags }}

                                        </a>
                                        <br />
                                        <small>
                                            Created {{ $listing->created_at }}
                                        </small>
                                    </td>
                                    <td>
                                        <a>
                                            <span class="text-success">$</span> {{ $listing->price }}

                                        </a>


                                    </td>

                                    <td class="project-actions text-right">
                                        <a class="btn btn-primary btn-sm" href="/tourist/{{ $listing->id }}">
                                            <i class="fas fa-folder">
                                            </i>
                                            View
                                        </a>
                                        <a class="btn btn-info btn-sm" href="/tourist/{{ $listing->id }}/edit">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Edit
                                        </a>

                                        <form method="POST" action="/tourist/{{ $listing->id }}">
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
