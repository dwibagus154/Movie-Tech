@extends('layouts.auth')

@section('title', "register")
@section('content')
<main class="main">

    <div class="content">

        <div class="container-fluid pb-5">

            <div class="row justify-content-md-center">
                <div class="card-wrapper col-12 col-md-4 mt-5">
                    <div class="brand text-center mb-3">
                        <img src=" {{ asset('front/img/logo.png') }}" style="width: 100px; height:70px;">
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Create new account</h4>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group">
                                    <label for="name">{{ __('Name') }}</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="email">{{ __('E-Mail Address') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="password">{{ __('Password') }}
                                        </label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="password-confirm">{{ __('Confirm Password') }}
                                        </label>
                                        <input id="password-confirm" type="password2" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>


                                <div class="form-group no-margin">
                                    <button type="submit" class="btn btn-primary" style="font-family: Arial, Helvetica, sans-serif; width: 100%">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                                <div class="text-center mt-3 small">
                                    Already have an account? <a href="{{ route('login') }}">{{ __('Login') }}</a>
                            </form>
                        </div>
                    </div>
                    <footer class="footer mt-3">
                        <div class="container-fluid">
                            <div class="footer-content text-center small">
                                <span class="text-muted">&copy; 2020 DwiBagus</span>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>



        </div>

    </div>
</main>
@endsection