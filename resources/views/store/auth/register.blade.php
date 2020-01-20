@extends('layouts.store_header')

@section('content')
<div class="row w-100 mx-0" style="min-height: 97vh">
    <div class="col-md-6 py-3 d-flex flex-column justify-content-center align-items-center" style="background-image: url('https://res.cloudinary.com/openmarket/image/upload/v1579552475/backgrounds/register-257986_1920_dqyknt.jpg'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
        <div>
            <i class="fa fa-user-plus fa-3x text-danger"></i>
        </div>
        <h1 class="text-white">Register</h1>
    </div>
    <div class="col-md-6 container  d-flex flex-column justify-content-center align-items-center">
        <div class="card p3-5 my-5 rounded-0" style="width: 350px; max-width: 90%">
            <div class="card-body">
                <form method="POST" action="{{route('store.register.post')}}">
                    @csrf

                    <div class="form-group">
                        <label for="name" class="text-md-right">{{ __('Name') }}</label>

                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>

                    <div class="form-group">
                        <label for="email"
                            class="text-md-right">{{ __('E-Mail Address') }}</label>

                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>

                    <div class="form-group">
                        <label for="password-confirm"
                            class="text-md-right">{{ __('Confirm Password') }}</label>

                            <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-outline-info btn-lg">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
