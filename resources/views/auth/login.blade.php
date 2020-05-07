@extends('layouts.form')

@section('content')

<p class="px-2 text-md-center text-warning mt-3">Bienvenido a MAININ S.A.C.</p>
<form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="form-group row">
        <label for="login" class="col-md-12 col-form-label text-md-center">{{ __('Correo Electronico o Nombre de Usuario') }}</label>

        <div class="col-md-12">
            <input id="login" type="text" class="form-control @error('username') is-invalid @enderror @error('email') is-invalid @enderror" name="login" value="{{ old('username') ?: old('email') }}" required autofocus>

            @error('username')
                <span class="invalid-feedback text-md-center" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="password" class="col-md-12 col-form-label text-md-center">{{ __('Contraseña') }}</label>

        <div class="col-md-12">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback text-md-center" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-6 offset-md-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary btn-block">
                {{ __('Login') }}
            </button>

            @if (Route::has('password.request'))
            <div class="form-group d-flex justify-content-between align-items-center">
                <div class="text-center mt-2"><a href="{{ route('password.request') }}" class="card-link">Forgot Password?</a></div>
            </div>
            @endif
        </div>
    </div>
</form>

@endsection
