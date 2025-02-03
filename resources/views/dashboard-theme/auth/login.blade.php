@extends('dashboard-theme.auth.master')
@section('title', __('messages.signin'))
@section('form')
    <form class="mx-auto text-center col-lg-3 col-md-4 col-10" method="POST" action="{{ route('dashboard.login') }}">
        @csrf
        <x-multi-language-button />
        <a class="mx-auto mt-2 text-center navbar-brand flex-fill" href="./index.html">
            <svg version="1.1" id="logo" class="navbar-brand-img brand-md" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
                <g>
                    <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                    <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                    <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                </g>
            </svg>
        </a>
    <x-auth-session-status class="mb-4" :status="session('status')" />

        <h1 class="mb-3 h6">{{ __('messages.signin') }}</h1>

        <div class="form-group">
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" name="email" id="inputEmail" class="form-control form-control-lg"
                placeholder="{{ __('messages.email') }}"  autofocus="" value="{{ old('email') }}">
            @error('email')
                <div style="color: red">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="inputPassword" class="sr-only">Password</label>
            <input name="password" type="password" id="inputPassword" class="form-control form-control-lg"
                placeholder="{{ __('messages.password') }}" >
                @error('password')
                <div style="color: red">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3 checkbox">
            <label>
                <input type="checkbox" value="remember-me" name="remember"> {{ __('messages.stay-signin') }} </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">{{ __('messages.signin') }}</button>
        <p class="mt-5 mb-3 text-muted">© {{ date('Y') }}</p>
    </form>
@endsection
