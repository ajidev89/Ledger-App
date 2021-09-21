@extends('layouts.auth')
@section('content')
<div class="p-6">
    <h1 class="text-2xl font-semibold mb-4">Register an account</h1>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="mb-4 ">
            <label class="block text-sm pb-2">{{ __('Name') }}</label>
            <input id="email" type="text" placeholder="{{ __('Name') }}" class="input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-4 ">
            <label class="block text-sm pb-2">{{ __('Email Address') }}</label>
            <input id="email" type="email" placeholder="{{ __('Email Address') }}" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-4 ">
            <label for="password" class="block text-sm pb-2">{{ __('Password') }}</label>
            <input id="password" placeholder="{{ __('Password') }}" type="password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-4 ">
            <label for="password-confirm"class="block text-sm pb-2">{{ __('Confirm Password') }}</label>
            <input id="password-confirm" placeholder="{{ __('Confirm Password') }}" type="password" class="input" name="password_confirmation" required autocomplete="new-password">
        </div>

        <div class="mt-4">
            <button type="submit" class="btn w-full">
                {{ __('Register') }}
            </button>
            <div class="flex-grow flex justify-center mt-4">
                    <a class="text-sm" href="{{ route('login') }}">
                        {{ __('Already have account? Login') }}
                    </a>
            </div>
        </div>
    </form>
</div>
@endsection
