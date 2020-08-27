@extends('layouts.auth')

@section('title', "Login")
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
                            <h4 class="card-title">Login</h4>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="email">{{ __('E-Mail Address') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password">{{ __('Password') }}
                                    </label>
                                    <div>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="text-right">
                                        @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-check position-relative mb-2">
                                        <input type="checkbox" class="form-check-input d-none" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="checkbox checkbox-xxs form-check-label ml-1" for="remember" data-icon="&#xe936">{{ __('Remember Me') }}</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary" style="font-family: Arial, Helvetica, sans-serif; width: 100%;">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                                <div class="text-center mt-3 small">
                                    @if (Route::has('register'))
                                    Don't have an account? <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>
                    <footer class="footer mt-3">
                        <div class="container-fluid">
                            <div class="footer-content text-center small">
                                <span class="text-muted">&copy; 2020 Dwibagus.</span>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>



        </div>

    </div>
</main>
@endsection