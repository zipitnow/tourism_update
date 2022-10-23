@extends('users.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content ">
        <section class="container">

<p><--- <a href="/" class="display-5">Home</a> / Registration Panel</p>





        </section>

        <hr>
        <section class="d-flex justify-content-center m-5">
            <div class="register-box ">
                <div class="register-logo">
                    <a href="#"><b>Afofida</b></a>
                </div>

                <div class="card">
                    <div class="card-body register-card-body">
                        <p class="login-box-msg">Register a new account</p>

                        <form method="POST" action="/customerstore">
                            @csrf

                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Full name" name="name" value="{{ old('name') }}">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>

                            </div>
                             @error('name')
                                    <p class="text-danger lh-1 fw-bolder mt-1">{{ $message }}</p>
                                @enderror
                            <div class="input-group mb-3">
                                <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>

                            </div>
                             @error('email')
                                    <p class="text-danger lh-1 fw-bolder mt-1">{{ $message }}</p>
                                @enderror
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" placeholder="Password" name="password" value="{{ old('password') }}">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>

                            </div>
                             @error('password')
                                    <p class="text-danger lh-1 fw-bolder mt-1">{{ $message }}</p>
                                @enderror
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" placeholder="Retype password" value="{{ old('password_confirmation') }}">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-4">
                                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                                </div>
                                <!-- /.col -->
                                <div class="col-8">
                                    <div class="icheck-primary">
                                      <a href="login" class="text-center">I already have account</a>
                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>
                        </form>




                    </div>
                    <!-- /.form-box -->
                </div><!-- /.card -->
            </div>
            <!-- /.register-box -->


        </section>
    </section>
    <!-- /.content -->
@endsection
