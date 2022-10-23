@extends('users.layout')

@section('content')






   <!-- Content Header (Page header) -->
    <section class="content ">
        <section class="container">

<p><--- <a href="/" class="display-5">Home</a> / Login Panel</p>




 <hr>



<section class="d-flex justify-content-center m-5">
            <div class="register-box ">
                <div class="register-logo">
                    <a href="#"><b>Afofida</b></a>
                </div>

                <div class="card">
                    <div class="card-body register-card-body">
                        <p class="login-box-msg">Login an account</p>

        <form action="{{ route('login') }}" method="post">
            @csrf

            <div class="input-group mb-3">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('Email') }}" required autofocus>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
                @error('email')
                <span class="error invalid-feedback">
                    {{ $message }}
                </span>
                @enderror
            </div>

            <div class="input-group mb-3">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{ __('Password') }}" required>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
                @error('password')
                <span class="error invalid-feedback">
                    {{ $message }}
                </span>
                @enderror
            </div>

            <div class="row">
                <div class="col-8">
                    <div class="icheck-primary">
                        <input type="checkbox" id="remember" name="remember">
                        <label for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block">{{ __('Login') }}</button>
                </div>
                <!-- /.col -->

            </div>
        </form>

        @if (Route::has('password.request'))
            <p class="mb-1">
                <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
            </p>
        @endif


                                      <a href="register" class="text-center">  I don't have an account  </a>


    </div>
    <!-- /.login-card-body -->

                                <!-- /.col -->

                    </div>
                    <!-- /.form-box -->
                </div><!-- /.card -->
            </div>
            <!-- /.register-box -->
</section>
        </section>
@endsection
