@extends('layouts.store_header')

@section('content')
<div class="row w-100 mx-0" style="min-height: 100vh">
    <div class="col-md-6 bg-info d-flex flex-column justify-content-center align-items-center" style="">
        <div>
            <i class="fa fa-sign-in fa-3x text-danger"></i>
        </div>
        <h1 class="text-white">Login</h1>
    </div>
    <div class="col-md-6  d-flex flex-column justify-content-center align-items-center">
        <div class="card p3-5 my-5 rounded-0" style="width: 350px; max-width: 90%">

            <div class="card-body">
                @if (isset($_GET['error']))
                    <div class="alert alert-danger"><strong>Invalid Login Credentials</strong></div>
                @endif
                <form method="POST" action="{{route('store.login.post')}}">
                    @csrf

                    <div class="form-group">
                        <label for="email" class="text-md-right">{{ __('E-Mail Address') }}</label>

                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password" class="text-md-right">{{ __('Password') }}</label>

                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>

                    <div class="form-group mb-0">
                        <button type="submit" class="btn btn-lg btn-info rounded-0">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
